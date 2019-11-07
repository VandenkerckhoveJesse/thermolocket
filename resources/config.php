<?php
session_start();
/*
 * Basic Site Settings like MySQL Configuration
 */

//Database configuration
define('DB_HOST', 'mysql');
define('DB_PORT', "3306");
define('DB_USERNAME' , 'root');
define('DB_PASSWORD', 'rootpassword');
define('DB_NAME', 'thermolocket');

//Mode: development or production
define("MODE","DEVELOPMENT");

define("DEVELOPMENT_ASSETS_PATH","/public_html/assets/");
define("PRODUCTION_ASSETS_PATH","/assets/");


