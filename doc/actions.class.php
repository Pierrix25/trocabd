
<?php

/**
 * gereBD actions.
 *
 * @package    trocabd
 * @subpackage gereBD
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class gereBDActions extends sfActions

{

public function executeIndex()
  {
    return $this->forward('accueil', 'visite');
  //    return $this->forward('gereBD', $this->getFlash('listeOrigine'));
  }

  public function executeList()
  {
  // criteria pour compter  les offres
//  	$this->c1 = new Criteria();
//	$criterion1 = $this->c1->getNewCriterion(UtilisateursourcePeer::UTILISATEUR_ID, $this->getRequestParameter('utilid'));
//	$criterion1->addor($this->c1->getNewCriterion(UtilisateurciblePeer::UTILISATEUR_ID, $this->getRequestParameter('utilid')));
//	$this->c1->add($criterion1);
	
    $c = new Criteria();
  	if ($this->getRequestParameter('sort'))
  	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
  	}
    $pager = new sfPropelPager('Album', 5);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  	$this->setFlash('listeOrigine','list');
    }

  public function executeRecherche()
  {
  	$c = new Criteria();
  	$cgeo = new Criteria();
  	
	$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);
  	if ($this->getRequestParameter('sort'))
  	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
  	}
  	$this->rechercher = ' ';
  	if (($this->getRequestParameter('rechercher') <> '+') and ($this->getRequestParameter('rechercher') <> '') and ($this->getRequestParameter('rechercher') <> ' '))
  	{
  		$this->rechercher = $this->getRequestParameter('rechercher');
  		$criterion = $c->getNewCriterion(SeriePeer::NOM, '%'.$this->getRequestParameter('rechercher').'%', Criteria::LIKE);
  		$criterion->addOr($c->getNewCriterion(AlbumPeer::TALBUM, '%'.$this->getRequestParameter('rechercher').'%', Criteria::LIKE));
  		$c->add($criterion);
  		$cgeo->add($criterion);
  	} else {
  		$this->rechercher = '+';
  	}

	$this->filtrePossede = ' ';
  	if ($this->getRequestParameter('filtrePossede'))
  	{
		$this->filtrePossede = $this->getRequestParameter('filtrePossede');
  		if ($this->getRequestParameter('filtrePossede') == 'O')
  	  	{
  	  		$c->addJoin(AlbumPeer::ID, PossedePeer::ALBUM_ID);
  		}
  	}
  	
  	if ($this->getRequestParameter('filtreCommunaute'))
  	{
		$this->filtreCommunaute = $this->getRequestParameter('filtreCommunaute');
  		if ($this->getRequestParameter('filtreCommunaute') == 'O')
  	  	{
 	  		$c->addJoin(PossedePeer::UTILISATEUR_ID, MembrePeer::UTILISATEUR_ID);
  	  		$c->addJoin(MembrePeer::COMMUNAUTE_ID, CommunautePeer::ID);
		 	$c->addAlias('T1', MembrePeer::TABLE_NAME);
  	  		$c->addJoin(CommunautePeer::ID, MembrePeer::alias('T1',MembrePeer::COMMUNAUTE_ID));
  	  		$c->add(MembrePeer::alias('T1',MembrePeer::UTILISATEUR_ID), $this->getUser()->getAttribute('id'));
  	  	}
  	}

$cgeo->addJoin(UtilisateurPeer::ID, PossedePeer::UTILISATEUR_ID, Criteria::LEFT_JOIN);
$cgeo->addJoin(PossedePeer::ALBUM_ID, AlbumPeer::ID, Criteria::LEFT_JOIN);
$cgeo->addDescendingOrderByColumn(UtilisateurPeer::ID);

$this->utilisateurs = UtilisateurPeer::doSelect($cgeo);

 	// nouvelle api google map avec plugins
 $this->map = new GMap();


    
//(4) On ajoute les caractéristiques que l'on désire à notre carte.
foreach ($this->utilisateurs as $utilisateur): 
	$listAlbum = '';
	foreach ($utilisateur->getPossedes() as $poss): 
		$listAlbum = $listAlbum.'<a href="'.$this->getRequest()->getScriptName().'/gereBD/show?id='.$poss->getAlbumId().'&sort=Talbum&rechercher='.$this->rechercher.'">'.$poss->getAlbum()->getTAlbum().'</a><BR>';
	endforeach; 
	if ($utilisateur->getLon() <> 0 ) {
		  $gMapInfoWindow = new GMapInfoWindow('<BR><a href="'.$this->getRequest()->getScriptName().'/gereBD/saVitrine?sort=Talbum&login='.$utilisateur->getLogin().'&utilid='.$utilisateur->getId().'&rechercher='.$this->rechercher.'">'.$utilisateur->getLogin().'</a> Dernière connexion le '.$utilisateur->getDerniereConnexion().'<BR>'.$listAlbum,array(), 'info_'.$utilisateur->getId());
		  $gMapMarker = new GMapMarker($utilisateur->getLat(),$utilisateur->getLon(),array(), 'marker_'.$utilisateur->getId());
		  $gMapMarker->addHtmlInfoWindow($gMapInfoWindow);
		  $this->map->addMarker($gMapMarker);
	}
endforeach; 


if ($this->getUser()->isAuthenticated())  
{
	$user = UtilisateurPeer::retrieveByPk($this->getUser()->getId());
	$this->forward404Unless($user);
	$this->map->setZoom(5);
//	$this->map->centerAndZoomOnMarkers();
	$this->map->setCenter($user->getLat(), $user->getLon());
} else {
//	$this->map->setZoom(20);
	$this->map->centerAndZoomOnMarkers();
	$this->map->setZoom(5);
}
// $this->map->disableDirections(); 
// $this->map->disableSidebar(); 

  	$pager = new sfPropelPager('Album', 5);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    $this->setFlash('listeOrigine','recherche');
  }

  public function executeSaVitrine()
  {
  	$this->setFlash('listeOrigine','saVitrine');
    $this->uneVitrine();
  }
  
  public function uneVitrine()
  {
	
  	$c = new Criteria();
	$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);
  	if ($this->getRequestParameter('sort'))
  	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
  	}
  	
  	if ($this->getRequestParameter('utilid'))
  	{
		$c->addJoin(AlbumPeer::ID, PossedePeer::ALBUM_ID);
	  	$c->add(PossedePeer::UTILISATEUR_ID, $this->getRequestParameter('utilid'));
		
	  	$c->addJoin(AlbumPeer::ID, OffresourcePeer::ALBUM_ID, Criteria::LEFT_JOIN);
		$c->addJoin(OffresourcePeer::UTILISATEURSOURCE_ID, UtilisateursourcePeer::ID, Criteria::LEFT_JOIN);

		$c->addJoin(AlbumPeer::ID, OffreciblePeer::ALBUM_ID, Criteria::LEFT_JOIN);
		$c->addJoin(OffreciblePeer::UTILISATEURCIBLE_ID, UtilisateurciblePeer::ID, Criteria::LEFT_JOIN);

		$c->setDistinct();
  	}
  	
  	$pager = new sfPropelPager('Possede', 5);
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    $this->setTemplate('list');
  }
  
  
  public function executeMaVitrine()
  {
  	$this->setFlash('listeOrigine','maVitrine');
    $this->uneVitrine();
  }
  
  public function executeShow()
  {
    $this->bd = AlbumPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->bd);
   }

  public function executeShowSerie()
  {
    $this->serie = SeriePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->serie);
   }
   
  public function executeShowEditeur()
  {
    $this->editeur = EditeurPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->editeur);
   }
   
   public function executeShowGenre()
  {
    $this->genre = GenrePeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->genre);
   }
   
   public function executeCreate()
  {
    $this->bd = new Album();
	$this->setFlash('actionOrigine','create');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_CREATE_OK);
    $this->setTemplate('edit');
  }
  
   
  public function executeTestUpdate()
  {
  echo 'entrée executeTestUpdate';
/*	if(isset($_POST['name'])) {
		echo 'From Server: '.$_POST['name'];
	}*/
  return true;
  }

  function executeJson() {
	$limit = $this->getRequestParameter('limit', 8);
	$start = $this->getRequestParameter('start', 0);
	$c = new Criteria();
	$c->setLimit($limit);
	$c->setOffset($start);
	if ($this->getRequestParameter('dir')== 'ASC') 
	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
	}
	else
	{
  		$c->addDescendingOrderByColumn($this->getRequestParameter('sort'));
	}
	
	$myAlbums = AlbumPeer :: doSelect($c);
	// On crée un table avec les résultats
	$data = array();
	$i=0;
	foreach ($myAlbums as $album) {
	    $data[$i]['id']=$album->getId();
	    $data[$i]['talbum']=$album->getTalbum();
	    $data[$i]['commentaire']=$album->getCommentaire();
	    $data[$i]['dateParu']=$album->getDateParu();
	    $data[$i]['depotLegal']=$album->getDepotLegal();
	    $data[$i]['histoire']=$album->getHistoire();
	    $data[$i]['integrale']=$album->getIntegrale();
	    $data[$i]['ISBN']=$album->getISBN();
	    $data[$i]['ISSN']=$album->getISSN();
	    $data[$i]['nbrePage']=$album->getNbrePage();
	    $data[$i]['photo1']=$album->getPhoto1();
	    $data[$i]['imgPhoto1']=($album->getPhoto1()==' ' || $album->getPhoto1()=='')?' ':UPLOAD_BD_DIR_REL.'/'.$album->getPhoto1();
	    $data[$i]['photo2']=$album->getPhoto2();
	    $data[$i]['imgPhoto2']=($album->getPhoto2()==' ' || $album->getPhoto2()=='')?' ':UPLOAD_BD_DIR_REL.'/'.$album->getPhoto2();
	    $data[$i]['genre']=$album->getGenre()->getId();
	    $data[$i]['serie']=$album->getSerie()->getId();
	    $data[$i]['editeur']=$album->getEditeur()->getId();
	    $data[$i]['proprietaire']=($album->getUtilisateurId()==$this->getUser()->getAttribute('id'))?true:false;
	    $cScenariste = new Criteria();
	  	$cScenariste->add(AuteuralbumPeer::SCENARISTE, 1);
		$cColoriste = new Criteria();
	  	$cColoriste->add(AuteuralbumPeer::COLORISTE, 1);
	  	$cDessinateur = new Criteria();
	  	$cDessinateur->add(AuteuralbumPeer::DESSINATEUR, 1);
		$data[$i]['scenariste']=0;
		$data[$i]['coloriste']=0;
		$data[$i]['dessinateur']=0;
	  	$rScenariste=$album->getAuteuralbums($cScenariste);
	  	foreach ($rScenariste as $scenariste) {
	  		$data[$i]['scenariste']=$scenariste->getAuteurId();
	  	}
	  	$rColoriste=$album->getAuteuralbums($cColoriste);
	  	foreach ($rColoriste as $coloriste) {
	  		$data[$i]['coloriste']=$coloriste->getAuteurId();
	  	}
	  	$rDessinateur=$album->getAuteuralbums($cDessinateur);
	  	foreach ($rDessinateur as $dessinateur) {
	  		$data[$i]['dessinateur']=$dessinateur->getAuteurId();
	  	}
	  	$i++;
	}

    $result = array(
      'total' => AlbumPeer :: doCount(new Criteria()),
      'data'  => $data
    );

     
    $result = json_encode($result);

    $this->getResponse()->setHttpHeader("X-JSON", '()'); // set a header, (although it is empty, it is nicer than without a correct header. Filling the header with the result will not be parsed by extjs as far as I have seen).
//    sfConfig::set('sf_web_debug', false); // set to false for speed-up (done automatically for production-environment)
    return $this->renderText($result);  // so return the result in the content, but without using symfony-templates.
  
  }
  
  function executeJsonListeSeries() {
	$limit = $this->getRequestParameter('limit', 8);
	$start = $this->getRequestParameter('start', 0);
	$c = new Criteria();
	$c->setLimit($limit);
	$c->setOffset($start);
	if ($this->getRequestParameter('dir')== 'ASC') 
	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
	}
	else
	{
  		$c->addDescendingOrderByColumn($this->getRequestParameter('sort'));
	}
	
	$mySeries = SeriePeer :: doSelect($c);
	// On crée un table avec les résultats
	$listeSeries = array();
	$i=0;
	foreach ($mySeries as $serie) {
	    $listeSeries[$i]['id']=$serie->getId();
	    $listeSeries[$i]['nom']=$serie->getNom();
	    $listeSeries[$i]['histoire']=$serie->getHistoire();
	    $listeSeries[$i]['commentaire']=$serie->getCommentaire();
	    $listeSeries[$i]['photo1']=$serie->getPhoto1();
	    $listeSeries[$i]['imgPhoto1']=($serie->getPhoto1()==' ' || $serie->getPhoto1()=='')?' ':UPLOAD_SERIE_DIR_REL.'/'.$serie->getPhoto1();
	    $listeSeries[$i]['photo2']=$serie->getPhoto2();
	    $listeSeries[$i]['imgPhoto2']=($serie->getPhoto2()==' ' || $serie->getPhoto2()=='')?' ':UPLOAD_SERIE_DIR_REL.'/'.$serie->getPhoto2();
	    $listeSeries[$i]['siteWeb1']=$serie->getSiteWeb1();
	    $listeSeries[$i]['siteWeb2']=$serie->getSiteWeb2();
	    $listeSeries[$i]['proprietaire']=($serie->getUtilisateurId()==$this->getUser()->getAttribute('id'))?true:false;
	    $i++;
	}

    $result = array(
      'totalListeSeries' => SeriePeer :: doCount(new Criteria()),
      'listeSeries'  => $listeSeries
    );

     
    $result = json_encode($result);

    $this->getResponse()->setHttpHeader("X-JSON", '()'); // set a header, (although it is empty, it is nicer than without a correct header. Filling the header with the result will not be parsed by extjs as far as I have seen).
//    sfConfig::set('sf_web_debug', false); // set to false for speed-up (done automatically for production-environment)
    return $this->renderText($result);  // so return the result in the content, but without using symfony-templates.
  
  }
  
  function executeJsonListeEditeurs() {
	$limit = $this->getRequestParameter('limit', 8);
	$start = $this->getRequestParameter('start', 0);
	$c = new Criteria();
	$c->setLimit($limit);
	$c->setOffset($start);
	if ($this->getRequestParameter('dir')== 'ASC') 
	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
	}
	else
	{
  		$c->addDescendingOrderByColumn($this->getRequestParameter('sort'));
	}
	
	$myEditeurs = EditeurPeer :: doSelect($c);
	// On crée un table avec les résultats
	$listeEditeurs = array();
	$i=0;
	foreach ($myEditeurs as $editeur) {
	    $listeEditeurs[$i]['id']=$editeur->getId();
	    $listeEditeurs[$i]['nom']=$editeur->getNom();
	    $listeEditeurs[$i]['adresse1']=$editeur->getAdresse1();
	    $listeEditeurs[$i]['adresse2']=$editeur->getAdresse2();
	    $listeEditeurs[$i]['cp']=$editeur->getCp();
	    $listeEditeurs[$i]['pays']=$editeur->getPaysId();
	    $listeEditeurs[$i]['photo1']=$editeur->getPhoto1();
	    $listeEditeurs[$i]['imgPhoto1']=($editeur->getPhoto1()==' ' || $editeur->getPhoto1()=='')?' ':UPLOAD_EDITEUR_DIR_REL.'/'.$editeur->getPhoto1();
	    $listeEditeurs[$i]['photo2']=$editeur->getPhoto2();
	    $listeEditeurs[$i]['imgPhoto2']=($editeur->getPhoto2()==' ' || $editeur->getPhoto2()=='')?' ':UPLOAD_EDITEUR_DIR_REL.'/'.$editeur->getPhoto2();
	    $listeEditeurs[$i]['site']=$editeur->getSite();
	    $listeEditeurs[$i]['tel']=$editeur->getTel();
	    $listeEditeurs[$i]['ville']=$editeur->getVille();
	    $listeEditeurs[$i]['proprietaire']=($editeur->getUtilisateurId()==$this->getUser()->getAttribute('id'))?true:false;
	    $i++;
	}

    $result = array(
      'totalListeEditeurs' => EditeurPeer :: doCount(new Criteria()),
      'listeEditeurs'  => $listeEditeurs
    );

     
    $result = json_encode($result);

    $this->getResponse()->setHttpHeader("X-JSON", '()'); // set a header, (although it is empty, it is nicer than without a correct header. Filling the header with the result will not be parsed by extjs as far as I have seen).
//    sfConfig::set('sf_web_debug', false); // set to false for speed-up (done automatically for production-environment)
    return $this->renderText($result);  // so return the result in the content, but without using symfony-templates.
  
  }

  function executeJsonListeAuteurs() {
	$limit = $this->getRequestParameter('limit', 8);
	$start = $this->getRequestParameter('start', 0);
	$c = new Criteria();
	$c->setLimit($limit);
	$c->setOffset($start);
	if ($this->getRequestParameter('dir')== 'ASC') 
	{
  		$c->addAscendingOrderByColumn($this->getRequestParameter('sort'));
	}
	else
	{
  		$c->addDescendingOrderByColumn($this->getRequestParameter('sort'));
	}
	
	$myAuteurs = AuteurPeer :: doSelect($c);
	// On crée un table avec les résultats
	$listeAuteurs = array();
	$i=0;
	foreach ($myAuteurs as $auteur) {
	    $listeAuteurs[$i]['id']=$auteur->getId();
	    $listeAuteurs[$i]['nom']=$auteur->getNom();
	    $listeAuteurs[$i]['prenom']=$auteur->getPrenom();
	    $listeAuteurs[$i]['surnom']=$auteur->getSurnom();
	    $listeAuteurs[$i]['commentaire']=$auteur->getCommentaire();
	    $listeAuteurs[$i]['lieuNaissance']=$auteur->getLieuNaissance();
	    $listeAuteurs[$i]['dateNaissance']=$auteur->getDateNaissance();
	    $listeAuteurs[$i]['pays']=$auteur->getPaysId();
	    $listeAuteurs[$i]['scenariste']=$auteur->getScenariste();
	    $listeAuteurs[$i]['dessinateur']=$auteur->getDessinateur();
	    $listeAuteurs[$i]['coloriste']=$auteur->getColoriste();
	    $listeAuteurs[$i]['photo1']=$auteur->getPhoto1();
	    $listeAuteurs[$i]['imgPhoto1']=($auteur->getPhoto1()==' ' || $auteur->getPhoto1()=='')?' ':UPLOAD_AUTEUR_DIR_REL.'/'.$auteur->getPhoto1();
	    $listeAuteurs[$i]['photo2']=$auteur->getPhoto2();
	    $listeAuteurs[$i]['imgPhoto2']=($auteur->getPhoto2()==' ' || $auteur->getPhoto2()=='')?' ':UPLOAD_AUTEUR_DIR_REL.'/'.$auteur->getPhoto2();
	    $listeAuteurs[$i]['web1']=$auteur->getWeb1();
	    $listeAuteurs[$i]['web2']=$auteur->getWeb2();
	    $listeAuteurs[$i]['proprietaire']=($auteur->getUtilisateurId()==$this->getUser()->getAttribute('id'))?true:false;
	    $i++;
	}

    $result = array(
      'totalListeAuteurs' => AuteurPeer :: doCount(new Criteria()),
      'listeAuteurs'  => $listeAuteurs
    );

     
    $result = json_encode($result);

    $this->getResponse()->setHttpHeader("X-JSON", '()'); // set a header, (although it is empty, it is nicer than without a correct header. Filling the header with the result will not be parsed by extjs as far as I have seen).
//    sfConfig::set('sf_web_debug', false); // set to false for speed-up (done automatically for production-environment)
    return $this->renderText($result);  // so return the result in the content, but without using symfony-templates.
  
  }
  
public function executeCboListSerie() {
	$msg="";
	$c = new Criteria();
	$limit = $this->getRequestParameter('limit', 5);
	$start = $this->getRequestParameter('start', 0);
	$query = $this->getRequestParameter('query');
	$c->setLimit($limit);
	$c->setOffset($start);

	$phrase = stripslashes(trim($query));		//on récupere de l'utf8
	$phrase=str_replace(","," ", $phrase);		//on remplace les ponctiations par des espaces
	$phrase=str_replace("."," ", $phrase);
	$phrase=str_replace("!"," ", $phrase);
	$phrase=str_replace("?"," ", $phrase);
	$phrase=str_replace(":"," ", $phrase);
	$phrase=str_replace("\"","", $phrase);
	$phrase=str_replace("'","", $phrase);
	$phrase=str_replace("$"," ", $phrase);
	$phrase=str_replace("%"," ", $phrase);
	$phrase = trim($phrase);
	$mots=split(" ",$phrase);		//on sépare la phrase dans un tableau de mots
	
	$nombre_mots=count($mots)-1;
	$z=0;
	$criterion = $c->getNewCriterion(SeriePeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE);
	while($z<$nombre_mots)
	{
  		$criterion->addOr($c->getNewCriterion(SeriePeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE));
		$z++;
	}

  	$c->add($criterion);
	
	$mySeries = SeriePeer :: doSelect($c);
	$premiere_virgule=0;
	foreach ($mySeries as $serie) {
		$id = $serie->getId();
		$nom = $serie->getNom();
		
		if ($premiere_virgule != 0) $msg.=",";
		$msg.='{
		search_idSerie:"'.$id.'",
		search_nomSerie:"'.$nom.'"
		}';
		$premiere_virgule++;
	}
	$total=SeriePeer :: doCount($c);
	$msg = '{"totalCount":"'.$total.'","series":['.$msg.']}';
	die ($msg);
}

public function executeCboListGenre() {
	$msg="";
	$c = new Criteria();
	$limit = $this->getRequestParameter('limit', 5);
	$start = $this->getRequestParameter('start', 0);
	$query = $this->getRequestParameter('query');
	$c->setLimit($limit);
	$c->setOffset($start);

	$phrase = stripslashes(trim($query));		//on récupere de l'utf8
	$phrase=str_replace(","," ", $phrase);		//on remplace les ponctiations par des espaces
	$phrase=str_replace("."," ", $phrase);
	$phrase=str_replace("!"," ", $phrase);
	$phrase=str_replace("?"," ", $phrase);
	$phrase=str_replace(":"," ", $phrase);
	$phrase=str_replace("\"","", $phrase);
	$phrase=str_replace("'","", $phrase);
	$phrase=str_replace("$"," ", $phrase);
	$phrase=str_replace("%"," ", $phrase);
	$phrase = trim($phrase);
	$mots=split(" ",$phrase);		//on sépare la phrase dans un tableau de mots
	
	$nombre_mots=count($mots)-1;
	$z=0;
	$criterion = $c->getNewCriterion(GenrePeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE);
	while($z<$nombre_mots)
	{
  		$criterion->addOr($c->getNewCriterion(GenrePeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE));
		$z++;
	}

  	$c->add($criterion);
	
	$myGenres = GenrePeer :: doSelect($c);
	$premiere_virgule=0;
	foreach ($myGenres as $genre) {
		$id = $genre->getId();
		$nom = $genre->getNom();
		
		if ($premiere_virgule != 0) $msg.=",";
		$msg.='{
		search_idGenre:"'.$id.'",
		search_nomGenre:"'.$nom.'"
		}';
		$premiere_virgule++;
	}
	$total=GenrePeer :: doCount($c);
	$msg = '{"totalCount":"'.$total.'","genres":['.$msg.']}';
	die ($msg);
}

public function executeCboListEditeur() {
	$msg="";
	$c = new Criteria();
	$limit = $this->getRequestParameter('limit', 5);
	$start = $this->getRequestParameter('start', 0);
	$query = $this->getRequestParameter('query');
	$c->setLimit($limit);
	$c->setOffset($start);

	$phrase = stripslashes(trim($query));		//on récupere de l'utf8
	$phrase=str_replace(","," ", $phrase);		//on remplace les ponctiations par des espaces
	$phrase=str_replace("."," ", $phrase);
	$phrase=str_replace("!"," ", $phrase);
	$phrase=str_replace("?"," ", $phrase);
	$phrase=str_replace(":"," ", $phrase);
	$phrase=str_replace("\"","", $phrase);
	$phrase=str_replace("'","", $phrase);
	$phrase=str_replace("$"," ", $phrase);
	$phrase=str_replace("%"," ", $phrase);
	$phrase = trim($phrase);
	$mots=split(" ",$phrase);		//on sépare la phrase dans un tableau de mots
	
	$nombre_mots=count($mots)-1;
	$z=0;
	$criterion = $c->getNewCriterion(EditeurPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE);
	while($z<$nombre_mots)
	{
  		$criterion->addOr($c->getNewCriterion(EditeurPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE));
		$z++;
	}

  	$c->add($criterion);
	
	$myEditeurs = EditeurPeer :: doSelect($c);
	$premiere_virgule=0;
	foreach ($myEditeurs as $editeur) {
		$id = $editeur->getId();
		$nom = $editeur->getNom();
		
		if ($premiere_virgule != 0) $msg.=",";
		$msg.='{
		search_idEditeur:"'.$id.'",
		search_nomEditeur:"'.$nom.'"
		}';
		$premiere_virgule++;
	}
	$total=EditeurPeer :: doCount($c);
	$msg = '{"totalCount":"'.$total.'","editeurs":['.$msg.']}';
	die ($msg);
}

public function executeCboListAuteur() {
	$msg="";
	$c = new Criteria();
	$limit = $this->getRequestParameter('limit', 5);
	$start = $this->getRequestParameter('start', 0);
	$query = $this->getRequestParameter('query');
	$c->setLimit($limit);
	$c->setOffset($start);

	$phrase = stripslashes(trim($query));		//on récupere de l'utf8
	$phrase=str_replace(","," ", $phrase);		//on remplace les ponctiations par des espaces
	$phrase=str_replace("."," ", $phrase);
	$phrase=str_replace("!"," ", $phrase);
	$phrase=str_replace("?"," ", $phrase);
	$phrase=str_replace(":"," ", $phrase);
	$phrase=str_replace("\"","", $phrase);
	$phrase=str_replace("'","", $phrase);
	$phrase=str_replace("$"," ", $phrase);
	$phrase=str_replace("%"," ", $phrase);
	$phrase = trim($phrase);
	$mots=split(" ",$phrase);		//on sépare la phrase dans un tableau de mots
	
	$nombre_mots=count($mots)-1;
	$z=0;
	$criterion = $c->getNewCriterion(AuteurPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE);
	while($z<$nombre_mots)
	{
  		$criterion->addOr($c->getNewCriterion(AuteurPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE));
		$z++;
	}

  	$c->add($criterion);
	
	$myAuteurs = AuteurPeer :: doSelect($c);
	$premiere_virgule=0;
	foreach ($myAuteurs as $auteur) {
		$id = $auteur->getId();
		$nom = $auteur->getNom();
		$scenariste = $auteur->getScenariste();
		$coloriste = $auteur->getColoriste();
		$dessinateur = $auteur->getDessinateur();
		
		if ($premiere_virgule != 0) $msg.=",";
		$msg.='{
		"search_idAuteur":"'.$id.'",
		"search_nomAuteur":"'.$nom.'",
		"search_scenariste":"'.$scenariste.'",
		"search_coloriste":"'.$coloriste.'",
		"search_dessinateur":"'.$dessinateur.'"
	}';
		$premiere_virgule++;
	}
	$total=AuteurPeer :: doCount($c);
	$msg = '{"totalCount":"'.$total.'","auteurs":['.$msg.']}';
	die ($msg);
}


public function executeCboListPays() {
	$msg="";
	$c = new Criteria();
	$limit = $this->getRequestParameter('limit', 5);
	$start = $this->getRequestParameter('start', 0);
	$query = $this->getRequestParameter('query');
	$c->setLimit($limit);
	$c->setOffset($start);

	$phrase = stripslashes(trim($query));		//on récupere de l'utf8
	$phrase=str_replace(","," ", $phrase);		//on remplace les ponctiations par des espaces
	$phrase=str_replace("."," ", $phrase);
	$phrase=str_replace("!"," ", $phrase);
	$phrase=str_replace("?"," ", $phrase);
	$phrase=str_replace(":"," ", $phrase);
	$phrase=str_replace("\"","", $phrase);
	$phrase=str_replace("'","", $phrase);
	$phrase=str_replace("$"," ", $phrase);
	$phrase=str_replace("%"," ", $phrase);
	$phrase = trim($phrase);
	$mots=split(" ",$phrase);		//on sépare la phrase dans un tableau de mots
	
	$nombre_mots=count($mots)-1;
	$z=0;
	$criterion = $c->getNewCriterion(PaysPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE);
	while($z<$nombre_mots)
	{
  		$criterion->addOr($c->getNewCriterion(PaysPeer::NOM, '%'.$mots[$z].'%', Criteria::LIKE));
		$z++;
	}

  	$c->add($criterion);
	
	$myPays = PaysPeer :: doSelect($c);
	$premiere_virgule=0;
	foreach ($myPays as $pays) {
		$id = $pays->getId();
		$nom = $pays->getNom();
		
		if ($premiere_virgule != 0) $msg.=",";
		$msg.='{
		"search_idPays":"'.$id.'",
		"search_nomPays":"'.$nom.'"
		}';
		$premiere_virgule++;
	}
	$total=PaysPeer :: doCount($c);
	$msg = '{"totalCount":"'.$total.'","pays":['.$msg.']}';
	die ($msg);
}
/*
  public function executeCreateSerie()
  {
    $this->serie = new Serie();
	$this->setFlash('actionOrigine','createSerie');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_CREATE_OK);
    $this->setTemplate('editSerie');
  }

      
   public function executeCreateEditeur()
  {
    $this->editeur = new Editeur();
	$this->setFlash('actionOrigine','createEditeur');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_CREATE_OK);
    $this->setTemplate('editEditeur');
  }
*/  
  public function executeUpdateBd()
  {
	    if (!$this->getRequestParameter('id'))
	    {
	      $bd = new Album();
	      $bd->setUtilisateurId($this->getUser()->getAttribute('id'));
	    }
	    else
	    {
	      $bd = AlbumPeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($bd);
	    }

	    $bd->fromArray($this->getRequest()->getParameterHolder()->getAll(),BasePeer::TYPE_FIELDNAME);
    	
	    if ($this->getRequestParameter('depotLegal'))
	    {
	      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('depotLegal'), $this->getUser()->getCulture());
	      $bd->setDepotLegal("$y-$m-$d");
	    }
	    if ($this->getRequestParameter('dateParu'))
	    {
	      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('dateParu'), $this->getUser()->getCulture());
	      $bd->setDateParu("$y-$m-$d");
	    }
	    
  		$pos = strrpos($this->getRequestParameter('photo1'), "\\");
  		if ($pos) { 
		    $ph1Tokens = explode("\\",$this->getRequestParameter('photo1'));
		    $bd->setPhoto1($bd->getId().end($ph1Tokens));
  		}
  			    
  		$pos = strrpos($this->getRequestParameter('photo2'), "\\");
  		if ($pos) { 
  			$ph1Tokens = explode("\\",$this->getRequestParameter('photo2'));
		    $bd->setPhoto2($bd->getId().end($ph1Tokens));
  		}	    
	    
	    foreach ($this->getRequest()->getFileNames() as $uploadedFile) {
            $fileName = $bd->getId().$this->getRequest()->getFileName($uploadedFile); 
            $this->getRequest()->moveFile($uploadedFile, UPLOAD_BD_DIR.'\\'.$fileName);
        }
	    
	    $bd->save();
	    
	    if (!$this->getRequestParameter('id'))
	    {
	      $possede = new Possede();
	      $possede->setAlbumId($bd->getId());
	      $possede->setUtilisateurId($this->getUser()->getAttribute('id'));
	      $possede->save();
	    }

	    $cScenariste = new Criteria();
	  	$cScenariste->add(AuteuralbumPeer::SCENARISTE, 1);
		$cColoriste = new Criteria();
	  	$cColoriste->add(AuteuralbumPeer::COLORISTE, 1);
	  	$cDessinateur = new Criteria();
	  	$cDessinateur->add(AuteuralbumPeer::DESSINATEUR, 1);
	  	
	  	$rScenariste=$bd->getAuteuralbums($cScenariste);
	  	foreach ($rScenariste as $scenariste) {
	  		if ($this->getRequestParameter('scenariste')) {
	  			$scenariste->setAuteurId($this->getRequestParameter('scenariste'));
	  			$scenariste->save();
	  		}
	  	}
	  	if (!isset($scenariste)) {
	  		if ($this->getRequestParameter('scenariste')) {
	  			$scenariste=new Auteuralbum();
	  			$scenariste->setAuteurId($this->getRequestParameter('scenariste'));
	  			$scenariste->setAlbumId($bd->getId());
	  			$scenariste->setScenariste(1);
	  			$scenariste->setDessinateur(0);
	  			$scenariste->setColoriste(0);
	  			$scenariste->save();
	  		}
	  	}
	  	
	  	$rColoriste=$bd->getAuteuralbums($cColoriste);
	  	foreach ($rColoriste as $coloriste) {
	  		if ($this->getRequestParameter('coloriste')) {
	  			$coloriste->setAuteurId($this->getRequestParameter('coloriste'));
	  			$coloriste->save();
	  		}
	  	}
	  	if (!isset($coloriste)) {
	  		if ($this->getRequestParameter('coloriste')) {
	  			$coloriste=new Auteuralbum();
	  			$coloriste->setAuteurId($this->getRequestParameter('coloriste'));
	  			$coloriste->setAlbumId($bd->getId());
	  			$coloriste->setScenariste(0);
	  			$coloriste->setDessinateur(0);
	  			$coloriste->setColoriste(1);
	  			$coloriste->save();
	  		}
	  	}
	  		  	
	  	$rDessinateur=$bd->getAuteuralbums($cDessinateur);
	  	foreach ($rColoriste as $dessinateur) {
	  		if ($this->getRequestParameter('dessinateur')) {
	  			$dessinateur->setAuteurId($this->getRequestParameter('dessinateur'));
	  			$dessinateur->save();
	  		}
	  	}
	  	if (!isset($dessinateur)) {
	  		if ($this->getRequestParameter('dessinateur')) {
	  			$dessinateur=new Auteuralbum();
	  			$dessinateur->setAuteurId($this->getRequestParameter('dessinateur'));
	  			$dessinateur->setAlbumId($bd->getId());
	  			$dessinateur->setScenariste(0);
	  			$dessinateur->setDessinateur(1);
	  			$dessinateur->setColoriste(0);
	  			$dessinateur->save();
	  		}
	  	}
	  	$message="";
	  	foreach ($this->getRequest()->getParameterHolder()->getAll() as $param) {
	  			$message=$message.$param;
	  	}
	  	
	 	$msg = utf8_encode(addslashes("album ".$bd->getId()." modifié"));
		die("{success: true, msg:{reason:'".$msg."'}}");
  }


public function executeUpdateSerie()
  {
	    if (!$this->getRequestParameter('id'))
	    {
	      $serie = new Serie();
	      $serie->setUtilisateurId($this->getUser()->getAttribute('id'));
	    }
	    else
	    {
	      $serie = SeriePeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($serie);
	    }
	    $serie->fromArray($this->getRequest()->getParameterHolder()->getAll(),BasePeer::TYPE_FIELDNAME);
	    
  		$pos = strrpos($this->getRequestParameter('photo1'), "\\");
  		if ($pos) { 
		    $ph1Tokens = explode("\\",$this->getRequestParameter('photo1'));
		    $serie->setPhoto1($serie->getId().end($ph1Tokens));
  		}
  			    
  		$pos = strrpos($this->getRequestParameter('photo2'), "\\");
  		if ($pos) { 
  			$ph1Tokens = explode("\\",$this->getRequestParameter('photo2'));
		    $serie->setPhoto2($serie->getId().end($ph1Tokens));
  		}	    
	    
	    foreach ($this->getRequest()->getFileNames() as $uploadedFile) {
            $fileName = $serie->getId().$this->getRequest()->getFileName($uploadedFile); 
            $this->getRequest()->moveFile($uploadedFile, UPLOAD_SERIE_DIR.'\\'.$fileName);
        }
        
	    $serie->save();
	 	$msg = utf8_encode(addslashes("serie ".$serie->getId()." modifié"));
		die("{success: true, msg:{reason:'".$msg."'}}");
	      }

  public function executeUpdateEditeur()
  {
  		if (!$this->getRequestParameter('id'))
	    {
	      $editeur = new Editeur();
	      $editeur->setUtilisateurId($this->getUser()->getAttribute('id'));
	    }
	    else
	    {
	      $editeur = EditeurPeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($editeur);
	    }

	    $editeur->fromArray($this->getRequest()->getParameterHolder()->getAll(),BasePeer::TYPE_FIELDNAME);
	    
  		$pos = strrpos($this->getRequestParameter('photo1'), "\\");
  		if ($pos) { 
		    $ph1Tokens = explode("\\",$this->getRequestParameter('photo1'));
		    $editeur->setPhoto1($editeur->getId().end($ph1Tokens));
  		}
  			    
  		$pos = strrpos($this->getRequestParameter('photo2'), "\\");
  		if ($pos) { 
  			$ph1Tokens = explode("\\",$this->getRequestParameter('photo2'));
		    $editeur->setPhoto2($editeur->getId().end($ph1Tokens));
  		}	    
	    
	    foreach ($this->getRequest()->getFileNames() as $uploadedFile) {
            $fileName = $editeur->getId().$this->getRequest()->getFileName($uploadedFile); 
            $this->getRequest()->moveFile($uploadedFile, UPLOAD_EDITEUR_DIR.'\\'.$fileName);
        }
	    
        $editeur->save();
	 	$msg = utf8_encode(addslashes("editeur ".$editeur->getId()." modifié"));
		die("{success: true, msg:{reason:'".$msg."'}}");
  }

  public function executeUpdateAuteur()
  {
  		if (!$this->getRequestParameter('id'))
	    {
	      $auteur = new Auteur();
	      $auteur->setUtilisateurId($this->getUser()->getAttribute('id'));
	    }
	    else
	    {
	      $auteur = AuteurPeer::retrieveByPk($this->getRequestParameter('id'));
	      $this->forward404Unless($auteur);
	    }

	    $auteur->fromArray($this->getRequest()->getParameterHolder()->getAll(),BasePeer::TYPE_FIELDNAME);
  		
	    if ($this->getRequestParameter('dateNaissance'))
	    {
	      list($d, $m, $Y) = sfI18N::getDateForCulture($this->getRequestParameter('dateNaissance'), $this->getUser()->getCulture());
	      $auteur->setDateNaissance("$Y-$m-$d");
	    }
	    
	    $pos = strrpos($this->getRequestParameter('photo1'), "\\");
  		if ($pos) { 
		    $ph1Tokens = explode("\\",$this->getRequestParameter('photo1'));
		    $auteur->setPhoto1($auteur->getId().end($ph1Tokens));
  		}
  			    
  		$pos = strrpos($this->getRequestParameter('photo2'), "\\");
  		if ($pos) { 
  			$ph1Tokens = explode("\\",$this->getRequestParameter('photo2'));
		    $auteur->setPhoto2($auteur->getId().end($ph1Tokens));
  		}	    
	    
	    foreach ($this->getRequest()->getFileNames() as $uploadedFile) {
            $fileName = $auteur->getId().$this->getRequest()->getFileName($uploadedFile); 
            $this->getRequest()->moveFile($uploadedFile, UPLOAD_AUTEUR_DIR.'\\'.$fileName);
        }
	    
	    $auteur->save();
	 	$msg = utf8_encode(addslashes("auteur ".$auteur->getId()." modifié"));
		die("{success: true, msg:{reason:'".$msg."'}}");
  }
  
  
  public function executeAjouterVitrine()
  {
		$possede = new Possede();
		$possede->setAlbumId($this->getRequestParameter('id'));
		$possede->setUtilisateurId($this->getUser()->getAttribute('id'));
		$possede->save();
	    $this->setFlash('messageFin',$this->getFlash('messageOrigine'));
//	    $this->redirect('gereBD/'.$this->getFlash('listeOrigine').'?id='.$this->getRequestParameter('id').'&sort='.$this->getRequestParameter('sort'));
  }

  public function executeRetirerVitrine()
  {
		$possede = PossedePeer::retrieveByPk($this->getRequestParameter('id'));
		$possede->delete();
	    $this->setFlash('messageFin',$this->getFlash('messageOrigine'));
	    $this->redirect('gereBD/'.$this->getFlash('listeOrigine').'?utilid='.$this->getUser()->getAttribute('id').'&sort='.$this->getRequestParameter('sort'));
  }
/*  
  public function executeEditSerie()
  {
  	$this->serie = SeriePeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->serie);
	$this->setFlash('actionOrigine','editSerie');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_EDIT_OK);
   }
  
  
  public function executeEditEditeur()
  {
  	$this->editeur = EditeurPeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->editeur);
	$this->setFlash('actionOrigine','editEditeur');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_EDIT_OK);
   }
*/   
  
  public function executeEdit()
  {
  	$this->bd = AlbumPeer::retrieveByPk($this->getRequestParameter('id'));
   	$this->forward404Unless($this->bd);
	$this->setFlash('actionOrigine','edit');
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('messageOrigine',MESSAGE_FIN_EDIT_OK);
   }
  

  public function executeDelete()
  {
    $bd = AlbumPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($bd);
    $bd->delete();
    $this->setFlash('messageFin',MESSAGE_FIN_DELETE_OK);
    return $this->redirect('gereBD/'.$this->getFlash('listeOrigine').'?sort='.$this->getRequestParameter('sort'));
  }
/*
  public function handleErrorUpdateSerie()
  {
    $this->serie = SeriePeer::retrieveByPk($this->getRequestParameter('id'));
  	if (!$this->serie)
  	{
  	 	    $this->serie = new Serie();
  	}
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('actionOrigine',$this->getFlash('actionOrigine'));
	$this->setFlash('messageOrigine',$this->getFlash('messageOrigine'));
  	
	$this->setTemplate('edit');
   	return sfView::SUCCESS;
  }

  public function handleErrorUpdateEditeur()
  {
    $this->editeur = EditeurPeer::retrieveByPk($this->getRequestParameter('id'));
  	if (!$this->editeur)
  	{
  	 	    $this->editeur = new Editeur();
  	}
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('actionOrigine',$this->getFlash('actionOrigine'));
	$this->setFlash('messageOrigine',$this->getFlash('messageOrigine'));
  	
	$this->setTemplate('edit');
   	return sfView::SUCCESS;
  }
*/  
  public function handleErrorUpdate()
  {
    $this->bd = AlbumPeer::retrieveByPk($this->getRequestParameter('id'));
  	if (!$this->bd)
  	{
  	 	    $this->bd = new Album();
  	}
	$this->setFlash('listeOrigine',$this->getFlash('listeOrigine'));
	$this->setFlash('actionOrigine',$this->getFlash('actionOrigine'));
	$this->setFlash('messageOrigine',$this->getFlash('messageOrigine'));
  	
	$this->setTemplate('edit');
   	return sfView::SUCCESS;
  }
}
?>