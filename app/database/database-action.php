<?php
$acao  = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_STRING);

/*
* Passos
* 1. Exportar - Estando no ambiente Desenvolvimento
* 2. Migration - estando no ambiente Produção
*/

switch ($acao) {

	case 'exportar': System\Database::exportStructure(); break;
	case 'importar': System\Database::importStructure(); break;
	case 'exportarDadosFake': System\Database::exportFakeData(); break;
	case 'importarDadosFake': System\Database::importFakeData(); break;	
	case 'exportarDados': System\Database::exportData(); break;	
	case 'importarDados': System\Database::importData(); break;	
	case 'bkp': System\Database::bkp(); break;	
	
	//Rodar online
	case 'migration':
	//gera um bkp por segurança, caso der errado os dados completos estarao aqui
	//basta voltar o arquivo gerado para o banco
	System\Database::bkp(); 

	//exporta os dados atuais
	System\Database::exportData(); 

	// importa a nova estrutura
	System\Database::importStructure();

	//importa dos dados atuais
	System\Database::importData(); 
	break;
}

exit();