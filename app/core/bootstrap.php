<?php



use Core\Router;

// Загрузка конфигурации и вспомогательных функций
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'function.php');

//Автозагрузка классов

require_once (ROOT . DS . 'vendor' . DS . 'autoload.php');

/*
function __autoload($className)
{
    //Проверка есть ли такой файл в дирктории "core", если есть - подключаем
    if( file_exists(ROOT . DS . 'core' . DS . $className . '.php' ))
    {
        require_once (ROOT . DS . 'core' . DS . $className . '.php');
    }
    //Проверка есть ли такой файл в дирктории "app/controllers", если есть - подключаем
    elseif( file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php') )
    {
        require_once (ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
    }
    //Проверка есть ли такой файл в дирктории "app/models", если есть - подключаем
    elseif( file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php') )
    {
        require_once (ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
    }
}
*/

//Роутинг
Router::route($url);