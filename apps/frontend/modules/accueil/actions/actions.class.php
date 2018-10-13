<?php

/**
 * accueil actions.
 *
 * @package    trocabd
 * @subpackage accueil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class accueilActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
    if ($this->getUser()->isAuthenticated())
  {
  	return $this->forward('accueil', 'troqueur');
  }
  else
  {
  	return $this->forward('accueil', 'visite');
  }
  }
  
  public function executeVisite()
  {
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(UtilisateurPeer::CREATED_AT);
  	$this->lastUser = UtilisateurPeer::doSelectOne($c);
    $this->forward404Unless($this->lastUser);
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(UtilisateurPeer::DERNIERECONNEXION);
  	$this->lastConnectedUser = UtilisateurPeer::doSelectOne($c);
    $this->forward404Unless($this->lastConnectedUser);
    
    $this->executeListNews();
        
  	$cgeo = new Criteria();
    $cgeo->addJoin(UtilisateurPeer::ID, PossedePeer::UTILISATEUR_ID, Criteria::LEFT_JOIN);
	$cgeo->addJoin(PossedePeer::ALBUM_ID, AlbumPeer::ID, Criteria::LEFT_JOIN);
	$cgeo->addDescendingOrderByColumn(UtilisateurPeer::ID);
	
	$this->utilisateurs = UtilisateurPeer::doSelect($cgeo);
	

 	// nouvelle api google map avec plugins
 		$this->map = new GMap();
	
	    					
	foreach ($this->utilisateurs as $utilisateur): 
		$listAlbum = '';
		foreach ($utilisateur->getPossedes() as $poss): 
			$listAlbum = $listAlbum.'<a href="'.$this->getRequest()->getScriptName().'/gereBD/show?id='.$poss->getAlbumId().'&sort=Talbum&rechercher='.$this->rechercher.'">'.$poss->getAlbum()->getTAlbum().'</a><BR>';
		endforeach; 
		if ($utilisateur->getLon() <> 0 ) {
		  $gMapMarker = new GMapMarker($utilisateur->getLat(),$utilisateur->getLon(),array(), 'marker_'.$utilisateur->getId());
		  $gMapInfoWindow = new GMapInfoWindow('<BR><a href="'.$this->getRequest()->getScriptName().'/gereBD/saVitrine?sort=Talbum&login='.$utilisateur->getLogin().'&utilid='.$utilisateur->getId().'&rechercher='.$this->rechercher.'">'.$utilisateur->getLogin().'</a> Dernière connexion le '.$utilisateur->getDerniereConnexion().'<BR>'.$listAlbum,array(), 'info_'.$utilisateur->getId());
		  $gMapMarker->addHtmlInfoWindow($gMapInfoWindow);
		  $this->map->addMarker($gMapMarker);
		}
	endforeach; 
  $this->map->centerAndZoomOnMarkers();
  $this->map->setZoom(5);
  
// 	$this->map->enableZoomEncompass();
//
// 	$this->map->disableDirections(); 
// 	$this->map->disableSidebar(); 
  //On zoom sur la zone marquée, c'est plus simpa
 
  	$c = new Criteria();
    $c->addJoin(AlbumPeer::ID, CommentairealbumPeer::ALBUM_ID, Criteria::LEFT_JOIN);
	$c->addDescendingOrderByColumn(CommentairealbumPeer::CREATED_AT);
	$c->addDescendingOrderByColumn(AlbumPeer::TALBUM);
	$c->setDistinct();
	$pager = new sfPropelPager('Album', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    $this->setTemplate('visite');
    return sfView::SUCCESS;
    }
  
    public function executeTroqueur()
  {
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(UtilisateurPeer::CREATED_AT);
  	$this->lastUser = UtilisateurPeer::doSelectOne($c);
    $this->forward404Unless($this->lastUser);
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(UtilisateurPeer::DERNIERECONNEXION);
  	$this->lastConnectedUser = UtilisateurPeer::doSelectOne($c);
    $this->forward404Unless($this->lastConnectedUser);
    
    $this->executeListNews();
  	
//(4) On ajoute les caractéristiques que l'on désire à notre carte.
$user = UtilisateurPeer::retrieveByPk($this->getUser()->getId());
$this->forward404Unless($user);

  	$cgeo = new Criteria();
    $cgeo->addJoin(UtilisateurPeer::ID, PossedePeer::UTILISATEUR_ID, Criteria::LEFT_JOIN);
	$cgeo->addJoin(PossedePeer::ALBUM_ID, AlbumPeer::ID, Criteria::LEFT_JOIN);
	$cgeo->addDescendingOrderByColumn(UtilisateurPeer::ID);
	
	$this->utilisateurs = UtilisateurPeer::doSelect($cgeo);

 	// nouvelle api google map avec plugins
	$this->map = new GMap();
	    					
	foreach ($this->utilisateurs as $obj): 
		if ($obj->getLon() <> 0 ) {
		  $gMapMarker = new GMapMarker($obj->getLat(),$obj->getLon(),array(), 'marker_'.$obj->getId());
		  $gMapInfoWindow = new GMapInfoWindow('Dernière connexion le '.$obj->getDerniereConnexion().'<BR> Situé : '.$obj->getCp().' '.$obj->getVille().'<BR><a href="'.$this->getRequest()->getScriptName().'/gereBD/saVitrine?sort=Talbum&login='.$obj->getLogin().'&utilid='.$obj->getId().'&rechercher=+">'.$obj->getLogin().'</a>',array(), 'info_'.$obj->getId());
		  $gMapMarker->addHtmlInfoWindow($gMapInfoWindow);
		  $this->map->addMarker($gMapMarker);
		}
	endforeach; 
	$this->map->setZoom(5);
	
	if ($user->getLat()==0) {
	  $this->map->centerAndZoomOnMarkers();
	} else {
		$this->map->setCenter ($user->getLat(), $user->getLon());
	}

    $this->setTemplate('troqueur');
	
    return sfView::SUCCESS;
  }
  
    public function executeHowTo()
  {
    return sfView::SUCCESS;
  }
  
  
  public function executeAddNews()
  {
	$this->news = new News();
	$this->news->setCommentaire(utf8_decode($this->getRequestParameter('commentaire')));
	$this->news->setUtilisateurId($this->getUser()->getId());
	$this->news->save();
    $this->executeListNews();
  }

  public function executeDeleteNews()
  {
  	$this->news = NewsPeer::retrieveByPk($this->getRequestParameter('newsId'));
	$this->news->delete();
    $this->executeListNews();
  }
  
  
  public function executeListNews()
  {
  	$this->newsPager = new sfPropelPager('News', 1);
  	$c = new Criteria();
  	$c->addDescendingOrderByColumn(NewsPeer::CREATED_AT);
    $this->newsPager->setCriteria($c);
    $this->newsPager->setPage($this->getRequestParameter('page', 1));
    $this->newsPager->init();
    $this->setTemplate('addNews');
  }  

  public function handleErrorAddNews()
  {
	$this->setTemplate('addNews');
	$this->getResponse()->setStatusCode(404);
   	return sfView::ERROR;
  }
  
}
