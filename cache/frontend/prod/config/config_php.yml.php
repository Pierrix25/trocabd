<?php
// auto-generated by sfPhpConfigHandler
// date: 2017/10/15 19:02:21
ini_set('log_errors', '1');
ini_set('arg_separator.output', '&amp;');
if (ini_get('session.auto_start') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "session.auto_start" key is better set to "false" (current value is "\'0\'" - php.ini location: "C:\wamp\bin\apache\apache2.4.9\bin\php.ini")');
}

