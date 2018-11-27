<?php
namespace System;

class Login {    

    protected static $session_name = 'admin';
    protected static $session_check = [];
    

    public static function sessionStart($name = 'admin'){
        self::$session_name = $name;        
        session_name(self::$session_name);
		session_start();
    }
    
    public static function verificar(){
		if (!isset($_SESSION['usuario_nome']) || !isset($_SESSION['usuario_email']))
            return false;
        return true;
    }

    public static function sair(){    	
		unset($_SESSION);
		session_destroy();
		//redirect(URL_ADMIN);
    }

     public static function debug(){    	
     	var_dump($_SESSION);
     }
}