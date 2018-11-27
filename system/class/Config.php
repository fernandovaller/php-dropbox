<?php
namespace System;

class Config {

    private static $default_router;	

    public static function init($config){
    	if(isset($config['default_router']))
        	self::$default_router = $config['default_router'];
    }

    public static function getDefaultRouter(){
        //return self::$default_router . DIRECTORY_SEPARATOR;
        return self::$default_router;
    }

    public static function setDefaultRouter($default_router){
        self::$default_router = $default_router;
    }
}