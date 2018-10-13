<?php

class process 
{
private static  $transitions=array();
private static  $etat=array();

public static function getTransitions($etatSource, $acteur)
  {
  	if (array_key_exists($acteur, self::$transitions[$etatSource]))
  	{
    	return self::$transitions[$etatSource][$acteur];
  	}
  	else
  	{
  		return null;
  	}
  }
  
public  static function getEtat($numEtat, $acteur)
  {
  	self::init();
    return self::$etat[$numEtat][$acteur];
  }
  
private static function init()
{
// Initial
	self::$transitions['1']= array('SOURCE' => array('Créer' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=2&')));
// En cours
	self::$transitions['2']= array('SOURCE' => array('Proposer' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=3&'), 'Modifier' => array('tag' => 'L', 'url' => 'gereTroc/edit?nextEtatId=2&'), 'Abandonner' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=10&')));
// Propose
	self::$transitions['3']= array('CIBLE' => array('Accepter' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=4&'), 'Refuser' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=11&'), 'Modifier' => array('tag' => 'L', 'url' =>'gereTroc/edit?nextEtatId=5&')));
// A Expédier
	self::$transitions['4']= array('SOURCE' => array('Expédier' => array('tag' => 'L', 'url' => 'gereTroc/expedier?nextEtatId=7&')));
// Attente
	self::$transitions['5']= array('CIBLE' => array('Modifier' => array('tag' => 'L', 'url' => 'gereTroc/edit?'), 'Abandonner' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=10&'), 'Proposer' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=6&')));
// A Evaluer
	self::$transitions['6']= array('SOURCE' => array('Refuser' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=11&'), 'Accepter' => array('tag' => 'L', 'url' => 'gereTroc/nextStep?nextEtatId=4&'), 'Modifier' => array('tag' => 'L', 'url' =>'gereTroc/edit?nextEtatId=2&')));
// Expédié
	self::$transitions['7']= array('CIBLE' => array('Expedier' => array('tag' => 'L', 'url' => 'gereTroc/expedier?nextEtatId=8&')));
// A Recevoir
	self::$transitions['8']= array('CIBLE' => array('Noter' => array('tag' => 'L', 'url' => 'gereTroc/noter?nextEtatId=9&')));
// A noter
	self::$transitions['9']= array('SOURCE' => array('Noter'=> array('tag' => 'L', 'url' => 'gereTroc/noter?nextEtatId=12&')), 'CIBLE' => array('Noter' => array('tag' => 'L', 'url' => 'gereTroc/noter?nextEtatId=9&')));
// 10 : Abandonné
	self::$transitions['10']= array('SOURCE' => '', 'CIBLE' => '');
// 11 : Refusé
	self::$transitions['11']= array('SOURCE' => '', 'CIBLE' => '');
// 12 : Noté
	self::$transitions['12']= array('SOURCE' => array('Noter'=> array('tag' => 'L', 'url' => 'gereTroc/noter?nextEtatId=12&')), 'CIBLE' => array('Noter' => array('tag' => 'L', 'url' => 'gereTroc/noter?nextEtatId=12&')));
// tableau des libellés d'état selon la source ou la cible, avec celui qui peut agir en cible
	self::$etat['1']=array('SOURCE' => 'Initial', 'CIBLE' => 'Initial');
	self::$etat['2']=array('SOURCE' => 'A Traiter', 'CIBLE' => 'Attente') ;
	self::$etat['3']=array('SOURCE' => 'Attente', 'CIBLE' => 'A Traiter') ;
	self::$etat['4']=array('SOURCE' => 'A Expédier', 'CIBLE' => 'A recevoir') ;
	self::$etat['5']=array('SOURCE' => 'Attente', 'CIBLE' => 'A Traiter') ;
	self::$etat['6']=array('SOURCE' => 'A Traiter', 'CIBLE' => 'Attente') ;
	self::$etat['7']=array('SOURCE' => 'Expédié', 'CIBLE' => 'A Expédier') ;
	self::$etat['8']=array('SOURCE' => 'A Recevoir', 'CIBLE' => 'Noter') ;
	self::$etat['9']=array('SOURCE' => 'Noter', 'CIBLE' => 'Terminé') ;
	self::$etat['10']=array('SOURCE' => 'Abandonné', 'CIBLE' => 'Abandonné') ;
	self::$etat['11']=array('SOURCE' => 'Refusé', 'CIBLE' => 'Refusé') ;
	self::$etat['12']=array('SOURCE' => 'Terminé', 'CIBLE' => 'Terminé') ;
}

}
