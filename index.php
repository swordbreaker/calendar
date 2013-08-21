<?php

require_once 'AutoloadsRegister.php';

$AutoloadsRegister = new AutoloadsRegister();

spl_autoload_register('AutoloadsRegister::register');

$CalendarController = new CalendarController();

$CalendarController->index();

?>