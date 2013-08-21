<?php	
	 
class AutoloadsRegister 
{ 
	const MODEL_ENDING = "Model";
	const DAO_ENDING = "Dao";
	const Controller_ENDING = "Controller";
	const SERVICE_ENDING = "Service";
 
    public static function register($class) 
    {

        $subfolder = "";
		if (substr($class, -strlen(self::MODEL_ENDING)) == self::MODEL_ENDING) $subfolder = "models/";
		if (substr($class, -strlen(self::DAO_ENDING)) == self::DAO_ENDING) $subfolder = "models/dao/";
		if (substr($class, -strlen(self::SERVICE_ENDING)) == self::SERVICE_ENDING) $subfolder = "models/service/";
		if (substr($class, -strlen(self::Controller_ENDING)) == self::Controller_ENDING) $subfolder = "controllers/";
 
 		require_once $subfolder . $class . '.php';
    }
}
