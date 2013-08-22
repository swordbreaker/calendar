<?php
require_once 'AutoloadsRegister.php';
$AutoloadsRegister = new AutoloadsRegister();
spl_autoload_register('AutoloadsRegister::register');
$requestURI = explode('/', $_SERVER['REQUEST_URI']);

$Loader = new Loader();
$Loader->loadController($requestURI);