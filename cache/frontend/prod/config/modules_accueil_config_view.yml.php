<?php
// auto-generated by sfViewConfigHandler
// date: 2017/10/15 19:02:23
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Troc de bandes dessin&eacute;es', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'N&eacute;gociez vos &eacute;changes', false, false);
  $response->addMeta('keywords', 'troc, bandes dessin&eacute;es,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());

