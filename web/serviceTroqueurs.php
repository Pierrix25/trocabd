<?php

try
{
//  $server = new SoapServer(null, array('uri' => 'http://www.trocabd.com/gereUtilisateur/'));
  $server = new SoapServer(null, array('uri' => 'http://localhost:81/'));
  
  $server->setClass("actionServiceTroqueurs");
  $server->handle();
}
catch(Exception $e)
{
  echo "Exception: " . $e;
}
?>
