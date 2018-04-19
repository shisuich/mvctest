<?php
//Включаем сессии
session_start();

//Определяем константы
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
//Константы для DB
defined("DBDRIVER")or define('DBDRIVER','mysql');
defined("DBHOST")or define('DBHOST','127.0.0.1:3306');
defined("DBNAME")or define('DBNAME','beejee');
defined("DBUSER")or define('DBUSER','root');
defined("DBPASS")or define('DBPASS','');

//Проверяем не пустой ли url, если не пусто то берём данные из url и делаем из них массив
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

require (ROOT . DS . 'app' . DS . 'core'. DS . 'bootstrap.php');


