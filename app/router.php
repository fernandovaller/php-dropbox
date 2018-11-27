<?php
use System\Router;
use System\Page;
use System\Config;

//DEFINIR AS ROTAS
//O sistema trabalha exibindo sempre a index

//Config::setDefaultRouter('app');
//Adicionando o caminho ate a aplicao para
//nao interferir nas rotas - url[0]
Router::setPrefix(['pessoal', 'php-dropbox-files']);

//Rotas do sistema de login
System\Router::post('login', function (){	    
	System\Page::load('login/login-action');
});

System\Router::get('sair', function(){
	System\Login::sair();
	header("Location: " . URL);
});

//Verificar se usuario logado
if(!System\Login::verificar()){	
	System\Page::load('login/login');
	exit();
}

//GRUPO DE ROTAS DEFAULT (SITE)
//****************************************
//Requisições ao arquivos modulo-actions
Router::any('pages', function(){
	//Page::loads(Router::getURL(1), Config::getDefaultRouter());
	Page::loads(Router::getURL(1));
	exit();
});

//requisicoes ajax
Router::any('ajax', function(){
	Page::loads(Router::getURL(1));
	exit();	
});

// Router::any('relatorios', function(){
// 	Page::load('relatorios/index');
// 	exit();	
// });

// Router::any('print', function(){	
// 	Page::loads(Router::getURL(1));
// 	exit();
// });
