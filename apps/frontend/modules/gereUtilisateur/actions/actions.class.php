<?php

/**
 * gereUtilisateur actions.
 *
 * @package    trocabd
 * @subpackage gereUtilisateur
 * @author     FERRENT
 */
class gereUtilisateurActions extends sfActions

{

	public function executeIndex()
  {
    return $this->forward('accueil', 'visite');
  }

  	public function executeShowmap()
  {
    $c = new Criteria();
    $this->utilisateurs = UtilisateurPeer::doSelect($c);

//(2) On crée une nouvelle carte; Ici, notre carte sera $map.
 $this->map = new GMap();
    
    
foreach ($this->utilisateurs as $obj): 
//	if ($obj->getLon()<> 0 ) {
//		$this->map->addMarkerByCoords( $obj->getLon(), $obj->getLat(),' ' , 'Dernière connexion le '.$obj->getDerniereConnexion().'<BR> Situé : '.$obj->getCp().' '.$obj->getVille().'<BR><a href="'.$this->getRequest()->getScriptName().'/gereBD/saVitrine?sort=Talbum&login='.$obj->getLogin().'&utilid='.$obj->getId().'&rechercher=+">'.$obj->getLogin().'</a>', $obj->getLogin()); 
//	}
	if ($obj->getLon() <> 0 ) {
		  $gMapInfoWindow = new GMapInfoWindow('Dernière connexion le '.$obj->getDerniereConnexion().'<BR> Situé : '.$obj->getCp().' '.$obj->getVille().'<BR><a href="'.$this->getRequest()->getScriptName().'/gereBD/saVitrine?sort=Talbum&login='.$obj->getLogin().'&utilid='.$obj->getId().'&rechercher=+">'.$obj->getLogin().'</a>');
		  $gMapMarker = new GMapMarker($obj->getLat(),$obj->getLon());
		  $gMapMarker->addHtmlInfoWindow($gMapInfoWindow);
		  $this->map->addMarker($gMapMarker);
	}
endforeach; 
  $this->map->centerAndZoomOnMarkers();
  $this->map->setZoom(5);

return sfView::SUCCESS;

  }
  
    
    public function executeRecherche()
  {
  	$c = new Criteria();
  	if ($this->getRequestParameter('sort'))
  	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
  	}
  	$this->rechercher = ' ';
  	if ($this->getRequestParameter('rechercher') <> '')
  	{
  		$this->rechercher = $this->getRequestParameter('rechercher');
  		$criterion = $c->getNewCriterion(UtilisateurPeer::LOGIN, '%'.$this->getRequestParameter('rechercher').'%', Criteria::LIKE);
  		$c->add($criterion);
  	}
 	
  	$pager = new sfPropelPager('Utilisateur', 5);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    $this->setFlash('listeOrigine','recherche');
  }

  public function executeShow()
  {
  	if ($this->getUser()->getId() <> $this->getRequestParameter('id'))  
  	{
  		return $this->forward('accueil', 'visite');
  	}
    $this->user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->user);
   }

  public function executeCreate()
  {
    $this->user = new Utilisateur();
	$this->setFlash('actionOrigine','create');
	$this->setFlash('messageOrigine',MESSAGE_FIN_CREATE_OK);
    $this->setTemplate('edit');
  }

  public function executeUpdate()
  {
	    if (!$this->getRequestParameter('id'))
	    {
	      $user = new Utilisateur();
	      $guarduser = new sfGuardUser();
	    }
	    else
	    {
	      $user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($user);
	      $guarduser = sfGuardUserPeer::retrieveByPk($user->getUserId());
	      $this->forward404Unless($guarduser);
	    }

	    $user->setId($this->getRequestParameter('id'));
	    $user->setNom($this->getRequestParameter('nom'));
  	    $user->setPrenom($this->getRequestParameter('prenom'));
   	    $user->setLogin($this->getRequestParameter('login'));
        $user->setMdp($this->getRequestParameter('mdp'));
        $user->setRue2($this->getRequestParameter('rue2'));
        $user->setRue3($this->getRequestParameter('rue3'));
        $user->setRue4($this->getRequestParameter('rue4'));
        $user->setCp($this->getRequestParameter('cp'));
        $user->setVille($this->getRequestParameter('ville'));
        $user->setEmail($this->getRequestParameter('email'));
// ligne à décommenter lorsque la recherche de coordonnées sera effectif
// 		$this->map = new GMap();
//		 if ($this->geocode = $this->map->geocode($user->getCp().' '.$user->getVille()))
//		 { 
//        	$user->setLon($this->geocode->getLng());
//	    	$user->setLat($this->geocode->getLat());
//		 } else {
        	$user->setLon(0);
	    	$user->setLat(0);
//		 }
//        
        $user->setNbVisiteur(0);
        $user->setNbUtilisateur(0);
        $user->setDerniereConnexion(mktime());
	    

	    $guarduser->setUserName($user->getLogin());
	    $guarduser->setAlgorithm('sha1');
	    $guarduser->setPassword($user->getMdp());
	    $guarduser->setIsActive(1);
	    $guarduser->setIsSuperAdmin(0);
	    $guarduser->addGroupByName("troqueur");
	    $guarduser->addPermissionByName("troqueur");
	    $guarduser->save();
	  	$this->getUser()->signIn($guarduser);
	    
	    $user->setUserid($guarduser->getId());
        $user->save();
	    $this->setFlash('messageFin',$this->getFlash('messageOrigine'));
	            
	  	$this->getUser()->setAuthenticated(true);
//	  	$this->getUser()->addCredentials('troqueur');
	  	$this->getUser()->setAttribute('id',$user->getId());
	  	$this->redirect('gereUtilisateur/show?id='.$user->getId());
  }

  
  public function executeEdit()
  {
  	if ($this->getUser()->getId() <> $this->getRequestParameter('id'))  
  	{
  		return $this->forward('accueil', 'visite');
  	}
	$this->user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->user);
	$this->setFlash('actionOrigine','edit');
	$this->setFlash('messageOrigine',MESSAGE_FIN_EDIT_OK);
   }
  
  public function executeDelete()
  {
  	if ($this->getUser()->getId() <> $this->getRequestParameter('id'))  
  	{
  		return $this->forward('accueil', 'visite');
  	}
    $this->user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->user);
	$this->setFlash('actionOrigine','delete');
	$this->setFlash('messageOrigine',MESSAGE_FIN_DELETE_OK);
   }
   
  public function executeErase()
  {
    $user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($user);
    $guarduser = sfGuardUserPeer::retrieveByPk($user->getUserid());
    $this->forward404Unless($guarduser);
    $guarduser->delete();
    $this->setFlash('messageFin',MESSAGE_FIN_DELETE_OK);
  	$this->getUser()->setAuthenticated(false);
  	$this->getUser()->removeCredential('troqueur');
    $this->redirect('accueil/index');
  }
   
  public function executeInitAllSfGuardUser()
  {
    $c = new Criteria();
    $this->utilisateurs = UtilisateurPeer::doSelect($c);
	$this->nblus=0;
	$this->nbcreate=0;
	$this->nbupdate=0;
	foreach ($this->utilisateurs as $obj): 
		$this->nblus = $this->nblus + 1;
		if ($obj->getUserid() == 0) {
			if ($guarduser = sfGuardUserPeer::retrieveByUsername($obj->getLogin()))
			{
				$obj->setUserid($guarduser->getId());
			    $obj->save();
				$this->nbupdate = $this->nbupdate + 1;
			}
			else {
		        $guarduser = new sfGuardUser();
			    $guarduser->setUserName($obj->getLogin());
			    $guarduser->setAlgorithm('sha1');
			    $guarduser->setPassword($obj->getMdp());
			    $guarduser->setIsActive(1);
			    $guarduser->setIsSuperAdmin(0);
			    $guarduser->addGroupByName("troqueur");
			    $guarduser->addPermissionByName("troqueur");
			    $guarduser->save();
		        $obj->setUserid($guarduser->getId());
			    $obj->save();
		        $this->nbcreate = $this->nbcreate + 1;
			}
		}
	endforeach; 
  }
  
  public function executeListeTroqueurs() 
  {
  	if ($this->getRequestParameter('envtroc'))
  	{
	  	if ($this->getRequestParameter('envtroc')=='TEST')
	  		{
			$wsdl='http://127.0.0.1/soapapi.wsdl';
	  	  	}
	  	else
		  	if ($this->getRequestParameter('envtroc')=='PROD')
		  	{
				$wsdl='http://www.trocabd.com/soapapi.wsdl';
		  	}
		}
 	 else
 	 {
			$wsdl='http://127.0.0.1/soapapi.wsdl';
	 }
  
  try {
// Create a soap client using SoapClient class
// Set the first parameter as null, because we are operating in non-WSDL mode.
// Pass array containing url and uri of the soap server as second parameter.
// Read request parameter
// Invoke AddHello() method of the soap server (HelloServer)
//$result = $client->AddHello($param);

  	if ($this->getRequestParameter('sortTroqueurs'))
  	{
  		$sortTroqueurs=$this->getRequestParameter('sortTroqueurs');
  	}
  	else
  	{
  		$sortTroqueurs='nom';
  		$this->request->setParameter('sortTroqueurs',$sortTroqueurs);
  	}
  	
  	if ($this->getRequestParameter('filtreLonLat'))
  	{
  		$filtreLonLat=$this->getRequestParameter('filtreLonLat');
  	}
  	else
  	{
  		$filtreLonLat='N';
  		$this->request->setParameter('filtreLonLat',$filtreLonLat);
  	}

  	$c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
	$this->utilisateurs = UtilisateurPeer::doDelete($c);
  	
  	$client = new SoapClient($wsdl, array());
  	$this->ex='APRES new SoapClient';
	$this->result = $client->__soapCall("getListUsers", array($sortTroqueurs, $filtreLonLat));
	$this->ex='APRES  __soapCall';
	
	if ($this->result) {
		foreach ($this->result as $obj): 
			$user = new Utilisateur();
		    $user->setNom(utf8_decode($obj['nom']));
	  	    $user->setPrenom('UTILISATEUR_PROD');
	   	    $user->setLogin(utf8_decode($obj['login']));
	        $user->setMdp('');
	        $user->setRue2('');
	        $user->setRue3('');
	        $user->setRue4('');
	        $user->setCp($obj['cp']);
	        $user->setVille(utf8_decode($obj['ville']));
	        $user->setLon($obj['lon']);
	        $user->setLat($obj['lat']);
	        $user->setEmail('');
	        $user->setQuestion('UTILISATEUR_PROD');
	        $user->setReponse('');
	        $user->setNbVisiteur(0);
	        $user->setNbUtilisateur(0);
	        $user->setDerniereConnexion(0);
	        $user->setUserid($obj['id']);
	        $user->save();
		endforeach; 
  	}
	
    $c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$pager = new sfPropelPager('Utilisateur', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
	
  	}
	catch(SoapFault $err) {
		$this->ex = $err->getMessage();
	}
  }

  public function executeCalLonLat()
  {
    $c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$this->utilisateurs = UtilisateurPeer::doSelect($c);
  	
  	$i=0;
    $this->ex ='';
  	foreach ($this->utilisateurs as $obj): 
         $address = $obj->getCp().'+'.utf8_decode($obj->getVille());
         $url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address."&sensor=false";
         $xml = simplexml_load_file($url);
         $response  = (string) $xml->status;
         $obj->setReponse($response);
         if ($response == 'OK')
            {
               $obj->setRue2((string) $xml->result->geometry->location->lng);
               $obj->setRue3((string) $xml->result->geometry->location->lat);
            }
            else {
            	$obj->setRue2(0);
                $obj->setRue3(0);
                if ($response <> 'ZERO_RESULTS')
                {
                	$this->ex= ' Status='.$response.' Message='.(string) $xml->error_message;
                }
              }
          $obj->save();
	endforeach; 
	$this->setTemplate('listeTroqueurs');
	$c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$pager = new sfPropelPager('Utilisateur', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  }
  
  public function executeDeleteTroqueursProd()
  {
  	$c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
	$this->utilisateurs = UtilisateurPeer::doDelete($c);
    $this->setTemplate('listeTroqueurs');
    $this->ex ='';
    $c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$pager = new sfPropelPager('Utilisateur', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  }
	
  
  public function executeMajTroqueurs() 
  {
  	if ($this->getRequestParameter('envtroc'))
  	{
	  	if ($this->getRequestParameter('envtroc')=='TEST')
	  		{
			$wsdl='http://127.0.0.1/soapapi.wsdl';
	  	  	}
	  	else
		  	if ($this->getRequestParameter('envtroc')=='PROD')
		  	{
				$wsdl='http://www.trocabd.com/soapapi.wsdl';
		  	}
		}
 	 else
 	 {
			$wsdl='http://127.0.0.1/soapapi.wsdl';
	 }
  
  try {
// Create a soap client using SoapClient class
// Set the first parameter as null, because we are operating in non-WSDL mode.
// Pass array containing url and uri of the soap server as second parameter.
// Read request parameter
// Invoke AddHello() method of the soap server (HelloServer)
//$result = $client->AddHello($param);

  	if ($this->getRequestParameter('sortTroqueurs'))
  	{
  		$sortTroqueurs=$this->getRequestParameter('sortTroqueurs');
  	}
  	else
  	{
  		$sortTroqueurs='nom';
  		$this->request->setParameter('sortTroqueurs',$sortTroqueurs);
  	}
  	
  	if ($this->getRequestParameter('filtreLonLat'))
  	{
  		$filtreLonLat=$this->getRequestParameter('filtreLonLat');
  	}
  	else
  	{
  		$filtreLonLat='N';
  		$this->request->setParameter('filtreLonLat',$filtreLonLat);
  	}

    $c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$this->utilisateurs = UtilisateurPeer::doSelect($c);
  	
  	$i = 0;
	foreach ($this->utilisateurs as $obj): 
		$users[$i] = array('id' => $obj->getUserId(), 'login' => utf8_encode($obj->getLogin()), 'nom' => utf8_encode($obj->getNom()),'cp' => $obj->getCp(),'ville' => utf8_encode($obj->getVille()),'lon' => $obj->getRue2(),'lat' => $obj->getRue3());
        $i = $i +1;
	endforeach; 
  	
  	$client = new SoapClient($wsdl, array());
  	$this->ex='APRES new SoapClient';
	$this->result = $client->__soapCall("setListUsersLonLat", array($users));
	$this->ex='APRES  __soapCall';
	
	
    $this->setTemplate('listeTroqueurs');
    $this->ex ='';
	$c = new Criteria();
  	$c->add(UtilisateurPeer::QUESTION, 'UTILISATEUR_PROD');
  	$pager = new sfPropelPager('Utilisateur', 10);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
	
  	}
	catch(SoapFault $err) {
		$this->ex = $err->getMessage();
	}
  }
  
  public function handleErrorUpdate()
  {
    $this->user = UtilisateurPeer::retrieveByPk($this->getRequestParameter('id'));
  	if (!$this->user)
  	{
  	 	    $this->user = new Utilisateur();
  	}
	$this->setFlash('actionOrigine',$this->getFlash('actionOrigine'));
	$this->setFlash('messageOrigine',$this->getFlash('messageOrigine'));
  	
	$this->setTemplate('edit');
   	return sfView::SUCCESS;
  }
    
  public function validateUpdate()
  {
    if (sfGuardUserPeer::retrieveByUsername($this->getRequestParameter('login')))
    {
    $this->getRequest()->setError('login', 'Le login existe déjà. Veuillez en saisir un autre');
    return false;
    }
    else
    {
    return true;
    }
  }
}
