<?php

/**
 * accueil actions.
 *
 * @package    trocabd
 * @subpackage accueil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class gereCommunauteComponents extends sfComponents
{
  public function executeMenuRecherche()
  {
  	if ($this->getRequestParameter('rechercher') == ' ')
  	{
  		$this->rechercher = '';
  	}
  	else
  	{
  		$this->rechercher = $this->getRequestParameter('rechercher');
  	}
  }
}
