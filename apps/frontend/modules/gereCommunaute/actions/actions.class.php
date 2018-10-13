<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:02
?>
<?php

/**
 * gereBD actions.
 *
 * @package    trocabd
 * @subpackage gereBD
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class gereCommunauteActions extends sfActions

{

public function executeIndex()
  {
    return $this->forward('accueil', 'visite');
    }

  public function executeList()
  {
    $c = new Criteria();
    if ($this->getRequestParameter('sort'))
  	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
  	}
    
    
// lecture invite et membre
    $c->addJoin(CommunautePeer::ID, MembrePeer::COMMUNAUTE_ID, Criteria::LEFT_JOIN);
    $c->addJoin(MembrePeer::UTILISATEUR_ID, UtilisateurPeer::ID, Criteria::LEFT_JOIN);
    $c->setDistinct(); 
 	
 	$c->add(UtilisateurPeer::ID, $this->getUser()->getAttribute('id'));
  	
    $pager = new sfPropelPager('Communaute', 5);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  	$this->setFlash('listeOrigine','list');
  }

  
  public function executeShow()
  {
    $this->communaute = CommunautePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->communaute);
   }

  public function executeCreate()
  {
    $this->communaute = new Communaute();
	$this->setFlash('actionOrigine','create');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_CREATE_OK);
    $this->setTemplate('edit');
  }
  
 
  public function executeUpdate()
  {
	    if (!$this->getRequestParameter('id'))
	    {
	      $communaute = new Communaute();
	      $communaute->setUtilisateurId($this->getUser()->getAttribute('id'));
	    }
	    else
	    {
	      $communaute = CommunautePeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($communaute);
	    }

	    $communaute->fromArray($this->getRequest()->getParameterHolder()->getAll(),BasePeer::TYPE_FIELDNAME);
	    $communaute->save();
	    
	    if (!$this->getRequestParameter('id'))
	    {
	      $membre = new Membre();
	      $membre->setCommunauteId($communaute->getId());
	      $membre->setUtilisateurId($this->getUser()->getAttribute('id'));
	      $membre->setMembre(1);
	      $membre->save();
	    }
	    
	  	$this->redirect('gereCommunaute/list?sort='.$this->getRequestParameter('sort').'&utilid='.$this->getRequestParameter('utilid'));
  }

 public function executeAjouterInvite()
  {
	    $membre = new Membre();
  		$membre->setCommunauteId($this->getRequestParameter('communauteid'));
		$membre->setUtilisateurId($this->getRequestParameter('id'));
	    $membre->setMembre(0);
		$membre->save();
	    $this->setFlash('messageFin',$this->getFlash('messageOrigine'));
  }

  public function executeQuitter()
  {
		$membre = MembrePeer::retrieveByPk($this->getRequestParameter('id'));
		$membre->delete();
	    $this->setFlash('messageFin',$this->getFlash('messageOrigine'));
	    $this->redirect('gereCommunaute/'.$this->getFlash('listeOrigine').'?utilid='.$this->getUser()->getAttribute('id').'&sort='.$this->getRequestParameter('sort').'&communauteid='.$this->getRequestParameter('communauteid'));
  }

  public function executeAccepterInvite()
  {
		$membre = MembrePeer::retrieveByPk($this->getRequestParameter('id'));
	    $membre->setMembre(1);
		$membre->save();
		$this->setFlash('messageFin',$this->getFlash('messageOrigine'));
	    $this->redirect('gereCommunaute/'.$this->getFlash('listeOrigine').'?utilid='.$this->getUser()->getAttribute('id').'&sort='.$this->getRequestParameter('sort').'&communauteid='.$this->getRequestParameter('communauteid'));
  }
 
  public function executeEdit()
  {
  	$this->communaute = CommunautePeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->communaute);
	$this->setFlash('actionOrigine','edit');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_EDIT_OK);
   }
  

  public function executeDelete()
  {
    $communaute = CommunautePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($communaute);
    $membres = $communaute->getMembres();
    $membres[0]->delete();
    $communaute->delete();
    $this->setFlash('messageFin',MESSAGE_FIN_DELETE_OK);
    return $this->redirect('gereCommunaute/'.$this->getFlash('listeOrigine').'?sort='.$this->getRequestParameter('sort'));
  }

  public function handleErrorUpdate()
  {
    $this->communaute = CommunautePeer::retrieveByPk($this->getRequestParameter('id'));
  	if (!$this->communaute)
  	{
  	 	    $this->communaute = new Communaute();
  	}
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('actionOrigine',$this->getFlash('actionOrigine'));
	$this->setFlash('messageOrigine',$this->getFlash('messageOrigine'));
  	
	$this->setTemplate('edit');
   	return sfView::SUCCESS;
  }
}
?>