<?php
//Включаем сессии
session_start();

//Определяем константы
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

//Проверяем не пустой ли url, если не пусто то берём данные из url и делаем из них массив
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

require (ROOT . DS . 'core'. DS . 'bootstrap.php');


