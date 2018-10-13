<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once(sfConfig::get('sf_plugins_dir').'/sfGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 7633 2008-02-27 17:54:50Z fabien $
 */
class sfGuardAuthActions extends BasesfGuardAuthActions
{
 public function executeSignin()
  {
    $user = $this->getUser();
// my specific code
	  	$c = new Criteria();
		$c->add(UtilisateurPeer::LOGIN, $user->getUsername());
		
		$utilisateur =  UtilisateurPeer::doSelect($c);
	  	if (($user->getUsername()<>'trocessai')
	  	and ($user->getUsername()<>'trocautre'))
	  	{
			$utilisateur[0]->setDerniereConnexion(mktime());
 		    $utilisateur[0]->save();
	  	}
		$this->getUser()->setAttribute('id',$utilisateur[0]->getId());
	  	$this->getUser()->setAttribute('login',$utilisateur[0]->getLogin());
		
        
    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $referer = $user->getAttribute('referer', $this->getRequest()->getReferer());
      $user->getAttributeHolder()->remove('referer');

      $signin_url = sfConfig::get('app_sf_guard_plugin_success_signin_url', $referer);

      $this->redirect('' != $signin_url ? $signin_url : '@homepage');
    }
    elseif ($user->isAuthenticated())
    {
      $this->redirect('@homepage');
    }
    else
    {
      if ($this->getRequest()->isXmlHttpRequest())
      {
        $this->getResponse()->setHeaderOnly(true);
        $this->getResponse()->setStatusCode(401);

        return sfView::NONE;
      }

      if (!$user->hasAttribute('referer'))
      {
        $user->setAttribute('referer', $this->getRequest()->getUri());
      }

      if ($this->getModuleName() != ($module = sfConfig::get('sf_login_module')))
      {
        return $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
      }

      $this->getResponse()->setStatusCode(401);
    }
  }
}
