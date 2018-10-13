<?php


abstract class BaseAuteur extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $coloriste;


	
	protected $commentaire;


	
	protected $datenaissance;


	
	protected $dessinateur;


	
	protected $lieunaissance;


	
	protected $nom;


	
	protected $pays_id;


	
	protected $photo1;


	
	protected $photo2;


	
	protected $prenom;


	
	protected $scenariste;


	
	protected $surnom;


	
	protected $web1;


	
	protected $web2;


	
	protected $utilisateur_id;

	
	protected $aPays;

	
	protected $aUtilisateur;

	
	protected $collAuteuralbums;

	
	protected $lastAuteuralbumCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getColoriste()
	{

		return $this->coloriste;
	}

	
	public function getCommentaire()
	{

		return $this->commentaire;
	}

	
	public function getDatenaissance($format = 'Y-m-d')
	{

		if ($this->datenaissance === null || $this->datenaissance === '') {
			return null;
		} elseif (!is_int($this->datenaissance)) {
						$ts = strtotime($this->datenaissance);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [datenaissance] as date/time value: " . var_export($this->datenaissance, true));
			}
		} else {
			$ts = $this->datenaissance;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDessinateur()
	{

		return $this->dessinateur;
	}

	
	public function getLieunaissance()
	{

		return $this->lieunaissance;
	}

	
	public function getNom()
	{

		return $this->nom;
	}

	
	public function getPaysId()
	{

		return $this->pays_id;
	}

	
	public function getPhoto1()
	{

		return $this->photo1;
	}

	
	public function getPhoto2()
	{

		return $this->photo2;
	}

	
	public function getPrenom()
	{

		return $this->prenom;
	}

	
	public function getScenariste()
	{

		return $this->scenariste;
	}

	
	public function getSurnom()
	{

		return $this->surnom;
	}

	
	public function getWeb1()
	{

		return $this->web1;
	}

	
	public function getWeb2()
	{

		return $this->web2;
	}

	
	public function getUtilisateurId()
	{

		return $this->utilisateur_id;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AuteurPeer::ID;
		}

	} 
	
	public function setColoriste($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->coloriste !== $v) {
			$this->coloriste = $v;
			$this->modifiedColumns[] = AuteurPeer::COLORISTE;
		}

	} 
	
	public function setCommentaire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->commentaire !== $v) {
			$this->commentaire = $v;
			$this->modifiedColumns[] = AuteurPeer::COMMENTAIRE;
		}

	} 
	
	public function setDatenaissance($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [datenaissance] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->datenaissance !== $ts) {
			$this->datenaissance = $ts;
			$this->modifiedColumns[] = AuteurPeer::DATENAISSANCE;
		}

	} 
	
	public function setDessinateur($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dessinateur !== $v) {
			$this->dessinateur = $v;
			$this->modifiedColumns[] = AuteurPeer::DESSINATEUR;
		}

	} 
	
	public function setLieunaissance($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lieunaissance !== $v) {
			$this->lieunaissance = $v;
			$this->modifiedColumns[] = AuteurPeer::LIEUNAISSANCE;
		}

	} 
	
	public function setNom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v) {
			$this->nom = $v;
			$this->modifiedColumns[] = AuteurPeer::NOM;
		}

	} 
	
	public function setPaysId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pays_id !== $v) {
			$this->pays_id = $v;
			$this->modifiedColumns[] = AuteurPeer::PAYS_ID;
		}

		if ($this->aPays !== null && $this->aPays->getId() !== $v) {
			$this->aPays = null;
		}

	} 
	
	public function setPhoto1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo1 !== $v) {
			$this->photo1 = $v;
			$this->modifiedColumns[] = AuteurPeer::PHOTO1;
		}

	} 
	
	public function setPhoto2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo2 !== $v) {
			$this->photo2 = $v;
			$this->modifiedColumns[] = AuteurPeer::PHOTO2;
		}

	} 
	
	public function setPrenom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prenom !== $v) {
			$this->prenom = $v;
			$this->modifiedColumns[] = AuteurPeer::PRENOM;
		}

	} 
	
	public function setScenariste($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->scenariste !== $v) {
			$this->scenariste = $v;
			$this->modifiedColumns[] = AuteurPeer::SCENARISTE;
		}

	} 
	
	public function setSurnom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->surnom !== $v) {
			$this->surnom = $v;
			$this->modifiedColumns[] = AuteurPeer::SURNOM;
		}

	} 
	
	public function setWeb1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->web1 !== $v) {
			$this->web1 = $v;
			$this->modifiedColumns[] = AuteurPeer::WEB1;
		}

	} 
	
	public function setWeb2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->web2 !== $v) {
			$this->web2 = $v;
			$this->modifiedColumns[] = AuteurPeer::WEB2;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = AuteurPeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->coloriste = $rs->getInt($startcol + 1);

			$this->commentaire = $rs->getString($startcol + 2);

			$this->datenaissance = $rs->getDate($startcol + 3, null);

			$this->dessinateur = $rs->getInt($startcol + 4);

			$this->lieunaissance = $rs->getString($startcol + 5);

			$this->nom = $rs->getString($startcol + 6);

			$this->pays_id = $rs->getInt($startcol + 7);

			$this->photo1 = $rs->getString($startcol + 8);

			$this->photo2 = $rs->getString($startcol + 9);

			$this->prenom = $rs->getString($startcol + 10);

			$this->scenariste = $rs->getInt($startcol + 11);

			$this->surnom = $rs->getString($startcol + 12);

			$this->web1 = $rs->getString($startcol + 13);

			$this->web2 = $rs->getString($startcol + 14);

			$this->utilisateur_id = $rs->getInt($startcol + 15);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Auteur object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AuteurPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AuteurPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AuteurPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aPays !== null) {
				if ($this->aPays->isModified()) {
					$affectedRows += $this->aPays->save($con);
				}
				$this->setPays($this->aPays);
			}

			if ($this->aUtilisateur !== null) {
				if ($this->aUtilisateur->isModified()) {
					$affectedRows += $this->aUtilisateur->save($con);
				}
				$this->setUtilisateur($this->aUtilisateur);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AuteurPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AuteurPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collAuteuralbums !== null) {
				foreach($this->collAuteuralbums as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aPays !== null) {
				if (!$this->aPays->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPays->getValidationFailures());
				}
			}

			if ($this->aUtilisateur !== null) {
				if (!$this->aUtilisateur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateur->getValidationFailures());
				}
			}


			if (($retval = AuteurPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAuteuralbums !== null) {
					foreach($this->collAuteuralbums as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AuteurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getColoriste();
				break;
			case 2:
				return $this->getCommentaire();
				break;
			case 3:
				return $this->getDatenaissance();
				break;
			case 4:
				return $this->getDessinateur();
				break;
			case 5:
				return $this->getLieunaissance();
				break;
			case 6:
				return $this->getNom();
				break;
			case 7:
				return $this->getPaysId();
				break;
			case 8:
				return $this->getPhoto1();
				break;
			case 9:
				return $this->getPhoto2();
				break;
			case 10:
				return $this->getPrenom();
				break;
			case 11:
				return $this->getScenariste();
				break;
			case 12:
				return $this->getSurnom();
				break;
			case 13:
				return $this->getWeb1();
				break;
			case 14:
				return $this->getWeb2();
				break;
			case 15:
				return $this->getUtilisateurId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AuteurPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getColoriste(),
			$keys[2] => $this->getCommentaire(),
			$keys[3] => $this->getDatenaissance(),
			$keys[4] => $this->getDessinateur(),
			$keys[5] => $this->getLieunaissance(),
			$keys[6] => $this->getNom(),
			$keys[7] => $this->getPaysId(),
			$keys[8] => $this->getPhoto1(),
			$keys[9] => $this->getPhoto2(),
			$keys[10] => $this->getPrenom(),
			$keys[11] => $this->getScenariste(),
			$keys[12] => $this->getSurnom(),
			$keys[13] => $this->getWeb1(),
			$keys[14] => $this->getWeb2(),
			$keys[15] => $this->getUtilisateurId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AuteurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setColoriste($value);
				break;
			case 2:
				$this->setCommentaire($value);
				break;
			case 3:
				$this->setDatenaissance($value);
				break;
			case 4:
				$this->setDessinateur($value);
				break;
			case 5:
				$this->setLieunaissance($value);
				break;
			case 6:
				$this->setNom($value);
				break;
			case 7:
				$this->setPaysId($value);
				break;
			case 8:
				$this->setPhoto1($value);
				break;
			case 9:
				$this->setPhoto2($value);
				break;
			case 10:
				$this->setPrenom($value);
				break;
			case 11:
				$this->setScenariste($value);
				break;
			case 12:
				$this->setSurnom($value);
				break;
			case 13:
				$this->setWeb1($value);
				break;
			case 14:
				$this->setWeb2($value);
				break;
			case 15:
				$this->setUtilisateurId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AuteurPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setColoriste($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCommentaire($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDatenaissance($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDessinateur($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLieunaissance($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNom($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPaysId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPhoto1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPhoto2($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPrenom($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setScenariste($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSurnom($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setWeb1($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setWeb2($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUtilisateurId($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AuteurPeer::DATABASE_NAME);

		if ($this->isColumnModified(AuteurPeer::ID)) $criteria->add(AuteurPeer::ID, $this->id);
		if ($this->isColumnModified(AuteurPeer::COLORISTE)) $criteria->add(AuteurPeer::COLORISTE, $this->coloriste);
		if ($this->isColumnModified(AuteurPeer::COMMENTAIRE)) $criteria->add(AuteurPeer::COMMENTAIRE, $this->commentaire);
		if ($this->isColumnModified(AuteurPeer::DATENAISSANCE)) $criteria->add(AuteurPeer::DATENAISSANCE, $this->datenaissance);
		if ($this->isColumnModified(AuteurPeer::DESSINATEUR)) $criteria->add(AuteurPeer::DESSINATEUR, $this->dessinateur);
		if ($this->isColumnModified(AuteurPeer::LIEUNAISSANCE)) $criteria->add(AuteurPeer::LIEUNAISSANCE, $this->lieunaissance);
		if ($this->isColumnModified(AuteurPeer::NOM)) $criteria->add(AuteurPeer::NOM, $this->nom);
		if ($this->isColumnModified(AuteurPeer::PAYS_ID)) $criteria->add(AuteurPeer::PAYS_ID, $this->pays_id);
		if ($this->isColumnModified(AuteurPeer::PHOTO1)) $criteria->add(AuteurPeer::PHOTO1, $this->photo1);
		if ($this->isColumnModified(AuteurPeer::PHOTO2)) $criteria->add(AuteurPeer::PHOTO2, $this->photo2);
		if ($this->isColumnModified(AuteurPeer::PRENOM)) $criteria->add(AuteurPeer::PRENOM, $this->prenom);
		if ($this->isColumnModified(AuteurPeer::SCENARISTE)) $criteria->add(AuteurPeer::SCENARISTE, $this->scenariste);
		if ($this->isColumnModified(AuteurPeer::SURNOM)) $criteria->add(AuteurPeer::SURNOM, $this->surnom);
		if ($this->isColumnModified(AuteurPeer::WEB1)) $criteria->add(AuteurPeer::WEB1, $this->web1);
		if ($this->isColumnModified(AuteurPeer::WEB2)) $criteria->add(AuteurPeer::WEB2, $this->web2);
		if ($this->isColumnModified(AuteurPeer::UTILISATEUR_ID)) $criteria->add(AuteurPeer::UTILISATEUR_ID, $this->utilisateur_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AuteurPeer::DATABASE_NAME);

		$criteria->add(AuteurPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setColoriste($this->coloriste);

		$copyObj->setCommentaire($this->commentaire);

		$copyObj->setDatenaissance($this->datenaissance);

		$copyObj->setDessinateur($this->dessinateur);

		$copyObj->setLieunaissance($this->lieunaissance);

		$copyObj->setNom($this->nom);

		$copyObj->setPaysId($this->pays_id);

		$copyObj->setPhoto1($this->photo1);

		$copyObj->setPhoto2($this->photo2);

		$copyObj->setPrenom($this->prenom);

		$copyObj->setScenariste($this->scenariste);

		$copyObj->setSurnom($this->surnom);

		$copyObj->setWeb1($this->web1);

		$copyObj->setWeb2($this->web2);

		$copyObj->setUtilisateurId($this->utilisateur_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAuteuralbums() as $relObj) {
				$copyObj->addAuteuralbum($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AuteurPeer();
		}
		return self::$peer;
	}

	
	public function setPays($v)
	{


		if ($v === null) {
			$this->setPaysId(NULL);
		} else {
			$this->setPaysId($v->getId());
		}


		$this->aPays = $v;
	}


	
	public function getPays($con = null)
	{
		if ($this->aPays === null && ($this->pays_id !== null)) {
						include_once 'lib/model/om/BasePaysPeer.php';

			$this->aPays = PaysPeer::retrieveByPK($this->pays_id, $con);

			
		}
		return $this->aPays;
	}

	
	public function setUtilisateur($v)
	{


		if ($v === null) {
			$this->setUtilisateurId(NULL);
		} else {
			$this->setUtilisateurId($v->getId());
		}


		$this->aUtilisateur = $v;
	}


	
	public function getUtilisateur($con = null)
	{
		if ($this->aUtilisateur === null && ($this->utilisateur_id !== null)) {
						include_once 'lib/model/om/BaseUtilisateurPeer.php';

			$this->aUtilisateur = UtilisateurPeer::retrieveByPK($this->utilisateur_id, $con);

			
		}
		return $this->aUtilisateur;
	}

	
	public function initAuteuralbums()
	{
		if ($this->collAuteuralbums === null) {
			$this->collAuteuralbums = array();
		}
	}

	
	public function getAuteuralbums($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteuralbums === null) {
			if ($this->isNew()) {
			   $this->collAuteuralbums = array();
			} else {

				$criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->getId());

				AuteuralbumPeer::addSelectColumns($criteria);
				$this->collAuteuralbums = AuteuralbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->getId());

				AuteuralbumPeer::addSelectColumns($criteria);
				if (!isset($this->lastAuteuralbumCriteria) || !$this->lastAuteuralbumCriteria->equals($criteria)) {
					$this->collAuteuralbums = AuteuralbumPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAuteuralbumCriteria = $criteria;
		return $this->collAuteuralbums;
	}

	
	public function countAuteuralbums($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->getId());

		return AuteuralbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAuteuralbum(Auteuralbum $l)
	{
		$this->collAuteuralbums[] = $l;
		$l->setAuteur($this);
	}


	
	public function getAuteuralbumsJoinAlbum($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteuralbums === null) {
			if ($this->isNew()) {
				$this->collAuteuralbums = array();
			} else {

				$criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->getId());

				$this->collAuteuralbums = AuteuralbumPeer::doSelectJoinAlbum($criteria, $con);
			}
		} else {
									
			$criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->getId());

			if (!isset($this->lastAuteuralbumCriteria) || !$this->lastAuteuralbumCriteria->equals($criteria)) {
				$this->collAuteuralbums = AuteuralbumPeer::doSelectJoinAlbum($criteria, $con);
			}
		}
		$this->lastAuteuralbumCriteria = $criteria;

		return $this->collAuteuralbums;
	}

} 