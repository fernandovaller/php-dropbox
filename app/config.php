<?php
//CONFIGURAÇÕES GERAIS DO SISTEMA
//Essas configurações se aplicam a todos os sistemas dentro da pasta APP

//CONFIG DB
define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PWD' , getenv('DB_PWD'));

//PATH DO SISTEMA
define('URL'         , getenv('URL'));
define('URL_ADMIN'   , getenv('URL_ADMIN'));
define('PATH_UPLOADS', 'uploads');

//DROPBOX CONFIG
define('DROPBOX_APPID'      , getenv('DROPBOX_APPID'));
define('DROPBOX_APPSECRET'  , getenv('DROPBOX_APPSECRET'));
define('DROPBOX_CALLBACKURL', getenv('DROPBOX_CALLBACKURL'));

//pasta padrao do sistema dentro de APP
$CONFIG['default_router'] = '/';