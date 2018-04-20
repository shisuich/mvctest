<?php

use Core\Router;

// Загрузка конфигурации и вспомогательных функций
require_once (ROOT. DS . 'config' . DS . 'config.php');
require_once (ROOT. DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'function.php');

//Автозагрузка классов

require_once (ROOT . DS . 'vendor' . DS . 'autoload.php');


//Роутинг
Router::route($url);