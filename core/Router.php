<?php

namespace Core;

use Controllres\Home;

class Router
{
    //Принимаем массив из url данных
    public static function route($url)
    {
        //Controller
        /**
         *Проверяем определен ли "$url[0]", если определен то проверяем не пусто ли "$url[0]",
         * если не пустой то перезаписываем констану "DEFAULT_CONTROLLER", которую мы определили
         * в файле "app/config/config.php" в строке 10
        */
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;

        /**
         * В переменную "$controller_name", записываем имя контроллера и удаляем его
         * из массива "$url" с помошью функции "array_shift()".
         */
        $controller_name = $controller;
        array_shift($url);




        //Action
        //Тоже самое делаем и с Action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0]. 'Action' : 'indexAction';

        $action_name = $controller;
        array_shift($url);




        //Параметры
        $queryParams = $url;

        //Создаём экземпляр класса $controller
        $dispatch = new Home($controller_name, $action); //Вот тут выходит ошибка

        /**
         * Проверяем есть ли метод $action в классе $controller,
         * если есть то используем callback-функцию с массивом параметров,
         * если такого метода нет, то выдаем ошибку
         */
        if(method_exists($dispatch, $action))
        {
            call_user_func_array([$dispatch, $action], $queryParams);
        }
        else
        {
            die('Метод'. '(\$controller = ' . $controller . ')' . ' ' . '(\$action = ' . $action . ')' . 'не найден<br>Ошибка вызванная в файле \"app/core/Router.php\" в строке 53');
        }

    }
}