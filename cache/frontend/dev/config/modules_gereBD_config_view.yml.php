<?php
// auto-generated by sfViewConfigHandler
// date: 2017/01/06 22:00:42
$context  = $this->getContext();
$response = $context->getResponse();

if ($this->actionName.$this->viewName == 'editSuccess')
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'listSuccess')
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'rechercheSuccess')
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'showSuccess')
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'editSuccess')
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Mise &agrave; jour BD', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'N&eacute;gociez vos &eacute;changes', false, false);
  $response->addMeta('keywords', 'troc, bandes dessin&eacute;es,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
}
else if ($templateName.$this->viewName == 'listSuccess')
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Liste de BD', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'N&eacute;gociez vos &eacute;changes', false, false);
  $response->addMeta('keywords', 'troc, bandes dessin&eacute;es,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
}
else if ($templateName.$this->viewName == 'rechercheSuccess')
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Recherche de BD', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'N&eacute;gociez vos &eacute;changes', false, false);
  $response->addMeta('keywords', 'troc, bandes dessin&eacute;es,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
}
else if ($templateName.$this->viewName == 'showSuccess')
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Fiche BD', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'N&eacute;gociez vos &eacute;changes', false, false);
  $response->addMeta('keywords', 'troc, bandes dessin&eacute;es,', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
}
else
{
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
}
