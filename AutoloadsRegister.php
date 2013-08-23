<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * AutoloadsRegister Class
 * includes all needed Classes
 */
class AutoloadsRegister 
{ 
	const MODEL_ENDING = "Model";
	const DAO_ENDING = "Dao";
	const Controller_ENDING = "Controller";
	const SERVICE_ENDING = "Service";
 
 	/**
 	 * register
 	 * @param  object $class Class to include
 	 */
    public static function register($class)
    {
        $subfolder = "";
		if (substr($class, -strlen(self::MODEL_ENDING)) == self::MODEL_ENDING) { $subfolder = "models/"; }
		if (substr($class, -strlen(self::DAO_ENDING)) == self::DAO_ENDING) { $subfolder = "models/dao/"; }
		if (substr($class, -strlen(self::SERVICE_ENDING)) == self::SERVICE_ENDING) { $subfolder = "models/service/"; }
		if (substr($class, -strlen(self::Controller_ENDING)) == self::Controller_ENDING) { $subfolder = "controllers/"; }

 		$classArray = explode('\\', $class);

 		if(count($classArray) == 2)
		{
			$class = $classArray[1];
		}
		
 		require_once $subfolder. $class . '.php';
    }
}