<?php
namespace Core;

use Controllers\Home;



class  Router
{
    //Принимаем массив из url данных
    public static function route($url)
    {
        //Controller
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = $controller;
        array_shift($url);

        //Action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0]. 'Action' : 'indexAction';

        $action_name = $controller;
        array_shift($url);


        //Параметры
        $queryParams = $url;


        $dispatch = new $controller($controller_name,$action);
        call_user_func_array([$dispatch, $action], $queryParams);


    }
}