<?php

namespace Calendar;

require_once 'AutoloadsRegister.php';

//Define the Basel URL
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/calendar');

//Autolad Classes
$AutoloadsRegister = new AutoloadsRegister();
spl_autoload_register('Calendar\AutoloadsRegister::register');

//Exploit the URI path
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$Loader = new Loader();
//Load the Controller
$Loader->loadController($requestURI);