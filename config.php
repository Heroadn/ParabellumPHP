<?php
#Definindo o template e pastas CSS e JS
define('TEMPLATE_SELECTED','Bootstrap');

#Recursos CSS, JS e Imagens
define('CSS' , LIBS .  'css' . DIRECTORY_SEPARATOR);
define('JS'  , LIBS .  'js'  . DIRECTORY_SEPARATOR);
define('IMG' , LIBS .  'img' . DIRECTORY_SEPARATOR);

#Banco de dados
define('DATABASE','#nome_db');
define('HOST','#nome_host');
define('USER','#nome_dbUser');
define('PASS','#senha_db');

#Segurança
define('SALT',md5('1ff2Sh@aj33f2&#&3Ssf%goa$s1'));
define('SECURE',false);
define('DEBUG' ,true);
