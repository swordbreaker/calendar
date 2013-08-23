<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

require_once 'AutoloadsRegister.php';

//Define the Basel URL
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/calendar');

//Autolad Classes
$autoloadsRegister = new Calendar\AutoloadsRegister();
spl_autoload_register('Calendar\AutoloadsRegister::register');

//Exploit the URI path
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$loader = new Calendar\Loader();
//Load the Controller
$loader->loadController($requestURI);