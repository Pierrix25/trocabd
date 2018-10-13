<?php
 
class soapapiActions extends sfActions
{
  public function __construct(){
    if(SF_ENVIRONMENT == 'soap') $this->initialize(sfContext::getInstance());
  }
 
  public function executeIndex()
  {
    $this->forward('default', 'module');
  }
 
  public function executeGetFactorial(){
 
    $num = $this->getRequestParameter('number');
 
    $result = 1;
    for($i=1;$i<$num;$i++) $result = $result + ($result * $i);
 
    if(SF_ENVIRONMENT == 'soap') return $result; //you can return the view or just a number... usually for soap you want to return simple stuff ... so you need to do the check
 
    $this->result = $result;
  }
  
  public function executeGetListUsers($sortTroqueurs, $filtreLonLat){
 
    $c = new Criteria();
	$c->addAscendingOrderByColumn($sortTroqueurs);
	if ($filtreLonLat == 'O') {
	  	$c->add(UtilisateurPeer::LON, 0);
	}
	
	$this->utilisateurs = UtilisateurPeer::doSelect($c);
    $i=0;
	foreach ($this->utilisateurs as $obj): 
		$result [$i] = array('id' => $obj->getId(), 'login' => utf8_encode($obj->getLogin()), 'nom' => utf8_encode($obj->getNom()),'cp' => $obj->getCp(),'ville' => utf8_encode($obj->getVille()),'lon' => $obj->getLon(),'lat' => $obj->getLat());
		$i=$i+1;
	endforeach;
    if(SF_ENVIRONMENT == 'soap') return $result; //you can return the view or just a number... usually for soap you want to return simple stuff ... so you need to do the check
 
    $this->result = $result;
  }

  public function executeSetListUsersLonLat($listeTroqueurs){
 
    $i=0;
	foreach ($listeTroqueurs as $obj): 
		$this->utilisateurs = UtilisateurPeer::retrieveByPk($obj['id']);
	  	$this->utilisateurs->setLon($obj['lon']);
	  	$this->utilisateurs->setLat($obj['lat']);
	  	$this->utilisateurs->save();
	  	$i=$i+1;
	endforeach;
	$result = $i;
    if(SF_ENVIRONMENT == 'soap') return $result; //you can return the view or just a number... usually for soap you want to return simple stuff ... so you need to do the check
 
    $this->result = $result;
  }
  
}
 
?>