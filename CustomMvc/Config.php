<?php
##Estrutura do sistema
define('VIEW',  ROOT .  'app' . DIRECTORY_SEPARATOR . 'view'  . DIRECTORY_SEPARATOR);
define('MODEL', ROOT .  'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('DAO', ROOT .  'app' . DIRECTORY_SEPARATOR . 'dao' . DIRECTORY_SEPARATOR);
define('CORE',  ROOT .  'app' . DIRECTORY_SEPARATOR . 'core'  . DIRECTORY_SEPARATOR);
define('TEMPLATE',  ROOT .  'app' . DIRECTORY_SEPARATOR . 'template'  . DIRECTORY_SEPARATOR);
define('CONTROLLER',  ROOT .  'app' . DIRECTORY_SEPARATOR . 'controller'  . DIRECTORY_SEPARATOR);
#Recursos css,js e imagens
define('LIBS', DIRECTORY_SEPARATOR .  'app' . DIRECTORY_SEPARATOR .  'libs' . DIRECTORY_SEPARATOR);
define('CSS',   LIBS .  'css' . DIRECTORY_SEPARATOR);
define('JS',    LIBS .  'js'  . DIRECTORY_SEPARATOR);
define('IMG',    LIBS .  'img'  . DIRECTORY_SEPARATOR);

##Carrega os Modulos do sistema
$modules = [ROOT,APP,CORE,CONTROLLER,TEMPLATE,MODEL,DAO];
set_include_path(get_include_path() .  PATH_SEPARATOR . implode(PATH_SEPARATOR,$modules));
//spl_autoload_register('spl_autoload',false);
spl_autoload_register(function($class) {
    require $class . '.php';
});

##Banco de dados
define('DATABASE','zadmin_chat');
define('HOST','localhost');
define('USER','root');
define('PASS','');

##Definindo o template a ser carregado e arquivos config nos templates
define('TEMPLATE_SELECTED','bootstrap');
include_once(TEMPLATE . TEMPLATE_SELECTED . DIRECTORY_SEPARATOR . 'Config.php');

##Segurança
define('SALT',md5('1ff2Sh@aj33f2&#&3Ssf%goa$s1'));
define('SECURE',FALSE);
