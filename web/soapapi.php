<?php
 
define('SF_ROOT_DIR',    realpath(dirname(__FILE__).'/..'));
define('SF_APP',         'fo');
define('SF_ENVIRONMENT', 'soap');
define('SF_DEBUG',       true);
 
require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');
 
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer('http://127.0.0.1/soapapi.wsdl'); //this file is defined in the next step
$server->setClass("mySoapController"); // more to come on this one
$server->handle();
 
?>