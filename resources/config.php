<?php
session_start();
/*
 * Basic Site Settings like MySQL Configuration
 */

//Database configuration
define('DB_HOST', 'localhost');
define('DB_PORT', "3306");
define('DB_USERNAME' , 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'thermoloket');

//Mode: development or production
define("MODE","DEVELOPMENT");

define("DEVELOPMENT_ASSETS_PATH","/public_html/assets/");
define("PRODUCTION_ASSETS_PATH","/assets/");
