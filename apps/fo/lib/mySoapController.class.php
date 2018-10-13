<?php
 
class mySoapController extends sfController {
 
   public $request;
 
   public function __construct(){
      /**
       * Since we're bypassing Symfony's action dispatcher, we have to initialize manually.
       */
      $this->context = sfContext::getInstance();
      $this->request = $this->context->getRequest();
   }
 
   protected function soapAuth($domain,$password){
     try {
 
       $c = new Criteria();
       $c->add(UserPeer::USERNAME ,$domain);
       $c->add(UserPeer::PASSWORD ,$password);
 
       $check = UserPeer::doSelectOne($c);
 
       if($check){
         $user = $this->context->getUser();
         $user->addCredential($check->getCredential());
         $user->setAuthenticated(true);
       }else{
         throw new Exception('Soap Authentication failed');
       }
     }catch (Exception $e){       
       throw new SoapFault("1",$e->getMessage());
     }
   }
 
   function getFactorial($user, $password, $number){
 
//     $this->soapAuth($user, $password); //I call this at the start of each function call in the soap controller (You can choose not to do it)
     $this->request->setParameter('number',$number);
 
     $action = $this->getAction('soapapi','getFactorial');
     $result = $action->executeGetFactorial();
 
     return $result;
   }
 
   function getListUsers($sortTroqueurs, $filtreLonLat){
     $action = $this->getAction('soapapi','getListUsers');
     $result = $action->executeGetListUsers($sortTroqueurs, $filtreLonLat);
     return $result;
   }
 
   function setListUsersLonLat($listeTroqueurs){
     $action = $this->getAction('soapapi','setListUsersLonLat');
     $result = $action->executeSetListUsersLonLat($listeTroqueurs);
     return $result;
   }
}
?>