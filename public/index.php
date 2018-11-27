<?php  
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
ini_set("display_errors", 1);
//header('Content-Type: text/html; charset=utf-8');

define('ROOT_PATH', realpath(__DIR__.'/../').DIRECTORY_SEPARATOR);
define('APP_PATH', realpath(__DIR__.'/../app/').DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', realpath(__DIR__.'/../public/').DIRECTORY_SEPARATOR);
define('LIB_PATH', realpath(__DIR__.'/../public/libs/').DIRECTORY_SEPARATOR);
define('SYSTEM_PATH', realpath(__DIR__.'/../system/').DIRECTORY_SEPARATOR);
define('VENDOR_PATH', realpath(__DIR__.'/../vendor/').DIRECTORY_SEPARATOR);
define('FOLDER_TEMP_PATH', realpath(__DIR__.'/../public/uploads/_temp_/').DIRECTORY_SEPARATOR);

include SYSTEM_PATH.'core/bootstrap.php';

//Inicia a session
System\Login::sessionStart('phpdropbox');

//Definir Helpers
include APP_PATH . 'helper.php';

//Definir rotas
include APP_PATH . 'router.php';

//pega o parametro via GET
//$_GET['p'] e se nao exitir recebe home
$page = System\Router::pGET('p', 'home');

//Definir as config do app
if(file_exists(APP_PATH . System\Config::getDefaultRouter() . 'config.php'))
	include APP_PATH . System\Config::getDefaultRouter() . 'config.php';

//Definir o layout padrao
if(file_exists(APP_PATH . System\Config::getDefaultRouter() . 'index.phtml'))
	include APP_PATH . System\Config::getDefaultRouter() . 'index.phtml';