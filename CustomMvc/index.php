<?php
ini_set('display_errors',1);
error_reporting(-1);

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('APP',   ROOT .  'app' . DIRECTORY_SEPARATOR);
include('Config.php');
new Application;
