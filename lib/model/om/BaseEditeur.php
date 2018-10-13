<?php


abstract class BaseEditeur extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nom;


	
	protected $adresse1;


	
	protected $adresse2;


	
	protected $cp;


	
	protected $pays_id;


	
	protected $photo1;


	
	protected $photo2;


	
	protected $site;


	
	protected $tel;


	
	protected $ville;


	
	protected $utilisateur_id;

	
	protected $aPays;

	
	protected $aUtilisateur;

	
	protected $collAlbums;

	
	protected $lastAlbumCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNom()
	{

		return $this->nom;
	}

	
	public function getAdresse1()
	{

		return $this->adresse1;
	}

	
	public function getAdresse2()
	{

		return $this->adresse2;
	}

	
	public function getCp()
	{

		return $this->cp;
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

	
	public function getSite()
	{

		return $this->site;
	}

	
	public function getTel()
	{

		return $this->tel;
	}

	
	public function getVille()
	{

		return $this->ville;
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
			$this->modifiedColumns[] = EditeurPeer::ID;
		}

	} 
	
	public function setNom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v) {
			$this->nom = $v;
			$this->modifiedColumns[] = EditeurPeer::NOM;
		}

	} 
	
	public function setAdresse1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adresse1 !== $v) {
			$this->adresse1 = $v;
			$this->modifiedColumns[] = EditeurPeer::ADRESSE1;
		}

	} 
	
	public function setAdresse2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->adresse2 !== $v) {
			$this->adresse2 = $v;
			$this->modifiedColumns[] = EditeurPeer::ADRESSE2;
		}

	} 
	
	public function setCp($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cp !== $v) {
			$this->cp = $v;
			$this->modifiedColumns[] = EditeurPeer::CP;
		}

	} 
	
	public function setPaysId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->pays_id !== $v) {
			$this->pays_id = $v;
			$this->modifiedColumns[] = EditeurPeer::PAYS_ID;
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
			$this->modifiedColumns[] = EditeurPeer::PHOTO1;
		}

	} 
	
	public function setPhoto2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo2 !== $v) {
			$this->photo2 = $v;
			$this->modifiedColumns[] = EditeurPeer::PHOTO2;
		}

	} 
	
	public function setSite($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->site !== $v) {
			$this->site = $v;
			$this->modifiedColumns[] = EditeurPeer::SITE;
		}

	} 
	
	public function setTel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tel !== $v) {
			$this->tel = $v;
			$this->modifiedColumns[] = EditeurPeer::TEL;
		}

	} 
	
	public function setVille($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ville !== $v) {
			$this->ville = $v;
			$this->modifiedColumns[] = EditeurPeer::VILLE;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = EditeurPeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nom = $rs->getString($startcol + 1);

			$this->adresse1 = $rs->getString($startcol + 2);

			$this->adresse2 = $rs->getString($startcol + 3);

			$this->cp = $rs->getString($startcol + 4);

			$this->pays_id = $rs->getInt($startcol + 5);

			$this->photo1 = $rs->getString($startcol + 6);

			$this->photo2 = $rs->getString($startcol + 7);

			$this->site = $rs->getString($startcol + 8);

			$this->tel = $rs->getString($startcol + 9);

			$this->ville = $rs->getString($startcol + 10);

			$this->utilisateur_id = $rs->getInt($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Editeur object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(EditeurPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			EditeurPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(EditeurPeer::DATABASE_NAME);
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
					$pk = EditeurPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += EditeurPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collAlbums !== null) {
				foreach($this->collAlbums as $referrerFK) {
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


			if (($retval = EditeurPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAlbums !== null) {
					foreach($this->collAlbums as $referrerFK) {
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
		$pos = EditeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNom();
				break;
			case 2:
				return $this->getAdresse1();
				break;
			case 3:
				return $this->getAdresse2();
				break;
			case 4:
				return $this->getCp();
				break;
			case 5:
				return $this->getPaysId();
				break;
			case 6:
				return $this->getPhoto1();
				break;
			case 7:
				return $this->getPhoto2();
				break;
			case 8:
				return $this->getSite();
				break;
			case 9:
				return $this->getTel();
				break;
			case 10:
				return $this->getVille();
				break;
			case 11:
				return $this->getUtilisateurId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EditeurPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNom(),
			$keys[2] => $this->getAdresse1(),
			$keys[3] => $this->getAdresse2(),
			$keys[4] => $this->getCp(),
			$keys[5] => $this->getPaysId(),
			$keys[6] => $this->getPhoto1(),
			$keys[7] => $this->getPhoto2(),
			$keys[8] => $this->getSite(),
			$keys[9] => $this->getTel(),
			$keys[10] => $this->getVille(),
			$keys[11] => $this->getUtilisateurId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = EditeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNom($value);
				break;
			case 2:
				$this->setAdresse1($value);
				break;
			case 3:
				$this->setAdresse2($value);
				break;
			case 4:
				$this->setCp($value);
				break;
			case 5:
				$this->setPaysId($value);
				break;
			case 6:
				$this->setPhoto1($value);
				break;
			case 7:
				$this->setPhoto2($value);
				break;
			case 8:
				$this->setSite($value);
				break;
			case 9:
				$this->setTel($value);
				break;
			case 10:
				$this->setVille($value);
				break;
			case 11:
				$this->setUtilisateurId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = EditeurPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNom($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAdresse1($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAdresse2($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCp($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPaysId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPhoto1($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPhoto2($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSite($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTel($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVille($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUtilisateurId($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(EditeurPeer::DATABASE_NAME);

		if ($this->isColumnModified(EditeurPeer::ID)) $criteria->add(EditeurPeer::ID, $this->id);
		if ($this->isColumnModified(EditeurPeer::NOM)) $criteria->add(EditeurPeer::NOM, $this->nom);
		if ($this->isColumnModified(EditeurPeer::ADRESSE1)) $criteria->add(EditeurPeer::ADRESSE1, $this->adresse1);
		if ($this->isColumnModified(EditeurPeer::ADRESSE2)) $criteria->add(EditeurPeer::ADRESSE2, $this->adresse2);
		if ($this->isColumnModified(EditeurPeer::CP)) $criteria->add(EditeurPeer::CP, $this->cp);
		if ($this->isColumnModified(EditeurPeer::PAYS_ID)) $criteria->add(EditeurPeer::PAYS_ID, $this->pays_id);
		if ($this->isColumnModified(EditeurPeer::PHOTO1)) $criteria->add(EditeurPeer::PHOTO1, $this->photo1);
		if ($this->isColumnModified(EditeurPeer::PHOTO2)) $criteria->add(EditeurPeer::PHOTO2, $this->photo2);
		if ($this->isColumnModified(EditeurPeer::SITE)) $criteria->add(EditeurPeer::SITE, $this->site);
		if ($this->isColumnModified(EditeurPeer::TEL)) $criteria->add(EditeurPeer::TEL, $this->tel);
		if ($this->isColumnModified(EditeurPeer::VILLE)) $criteria->add(EditeurPeer::VILLE, $this->ville);
		if ($this->isColumnModified(EditeurPeer::UTILISATEUR_ID)) $criteria->add(EditeurPeer::UTILISATEUR_ID, $this->utilisateur_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(EditeurPeer::DATABASE_NAME);

		$criteria->add(EditeurPeer::ID, $this->id);

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

		$copyObj->setNom($this->nom);

		$copyObj->setAdresse1($this->adresse1);

		$copyObj->setAdresse2($this->adresse2);

		$copyObj->setCp($this->cp);

		$copyObj->setPaysId($this->pays_id);

		$copyObj->setPhoto1($this->photo1);

		$copyObj->setPhoto2($this->photo2);

		$copyObj->setSite($this->site);

		$copyObj->setTel($this->tel);

		$copyObj->setVille($this->ville);

		$copyObj->setUtilisateurId($this->utilisateur_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAlbums() as $relObj) {
				$copyObj->addAlbum($relObj->copy($deepCopy));
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
			self::$peer = new EditeurPeer();
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

	
	public function initAlbums()
	{
		if ($this->collAlbums === null) {
			$this->collAlbums = array();
		}
	}

	
	public function getAlbums($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAlbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlbums === null) {
			if ($this->isNew()) {
			   $this->collAlbums = array();
			} else {

				$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

				AlbumPeer::addSelectColumns($criteria);
				$this->collAlbums = AlbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

				AlbumPeer::addSelectColumns($criteria);
				if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
					$this->collAlbums = AlbumPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAlbumCriteria = $criteria;
		return $this->collAlbums;
	}

	
	public function countAlbums($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAlbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

		return AlbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAlbum(Album $l)
	{
		$this->collAlbums[] = $l;
		$l->setEditeur($this);
	}


	
	public function getAlbumsJoinGenre($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAlbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlbums === null) {
			if ($this->isNew()) {
				$this->collAlbums = array();
			} else {

				$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}


	
	public function getAlbumsJoinSerie($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAlbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlbums === null) {
			if ($this->isNew()) {
				$this->collAlbums = array();
			} else {

				$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinSerie($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinSerie($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}


	
	public function getAlbumsJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAlbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlbums === null) {
			if ($this->isNew()) {
				$this->collAlbums = array();
			} else {

				$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::EDITEUR_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}

} 