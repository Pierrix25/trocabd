<?php


abstract class BaseSerie extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $histoire;


	
	protected $nom;


	
	protected $commentaire;


	
	protected $photo1;


	
	protected $photo2;


	
	protected $siteweb1;


	
	protected $siteweb2;


	
	protected $utilisateur_id;

	
	protected $aUtilisateur;

	
	protected $collAlbums;

	
	protected $lastAlbumCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getHistoire()
	{

		return $this->histoire;
	}

	
	public function getNom()
	{

		return $this->nom;
	}

	
	public function getCommentaire()
	{

		return $this->commentaire;
	}

	
	public function getPhoto1()
	{

		return $this->photo1;
	}

	
	public function getPhoto2()
	{

		return $this->photo2;
	}

	
	public function getSiteweb1()
	{

		return $this->siteweb1;
	}

	
	public function getSiteweb2()
	{

		return $this->siteweb2;
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
			$this->modifiedColumns[] = SeriePeer::ID;
		}

	} 
	
	public function setHistoire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->histoire !== $v) {
			$this->histoire = $v;
			$this->modifiedColumns[] = SeriePeer::HISTOIRE;
		}

	} 
	
	public function setNom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v) {
			$this->nom = $v;
			$this->modifiedColumns[] = SeriePeer::NOM;
		}

	} 
	
	public function setCommentaire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->commentaire !== $v) {
			$this->commentaire = $v;
			$this->modifiedColumns[] = SeriePeer::COMMENTAIRE;
		}

	} 
	
	public function setPhoto1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo1 !== $v) {
			$this->photo1 = $v;
			$this->modifiedColumns[] = SeriePeer::PHOTO1;
		}

	} 
	
	public function setPhoto2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo2 !== $v) {
			$this->photo2 = $v;
			$this->modifiedColumns[] = SeriePeer::PHOTO2;
		}

	} 
	
	public function setSiteweb1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->siteweb1 !== $v) {
			$this->siteweb1 = $v;
			$this->modifiedColumns[] = SeriePeer::SITEWEB1;
		}

	} 
	
	public function setSiteweb2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->siteweb2 !== $v) {
			$this->siteweb2 = $v;
			$this->modifiedColumns[] = SeriePeer::SITEWEB2;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = SeriePeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->histoire = $rs->getString($startcol + 1);

			$this->nom = $rs->getString($startcol + 2);

			$this->commentaire = $rs->getString($startcol + 3);

			$this->photo1 = $rs->getString($startcol + 4);

			$this->photo2 = $rs->getString($startcol + 5);

			$this->siteweb1 = $rs->getString($startcol + 6);

			$this->siteweb2 = $rs->getString($startcol + 7);

			$this->utilisateur_id = $rs->getInt($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Serie object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeriePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeriePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeriePeer::DATABASE_NAME);
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


												
			if ($this->aUtilisateur !== null) {
				if ($this->aUtilisateur->isModified()) {
					$affectedRows += $this->aUtilisateur->save($con);
				}
				$this->setUtilisateur($this->aUtilisateur);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SeriePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeriePeer::doUpdate($this, $con);
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


												
			if ($this->aUtilisateur !== null) {
				if (!$this->aUtilisateur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateur->getValidationFailures());
				}
			}


			if (($retval = SeriePeer::doValidate($this, $columns)) !== true) {
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
		$pos = SeriePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getHistoire();
				break;
			case 2:
				return $this->getNom();
				break;
			case 3:
				return $this->getCommentaire();
				break;
			case 4:
				return $this->getPhoto1();
				break;
			case 5:
				return $this->getPhoto2();
				break;
			case 6:
				return $this->getSiteweb1();
				break;
			case 7:
				return $this->getSiteweb2();
				break;
			case 8:
				return $this->getUtilisateurId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeriePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHistoire(),
			$keys[2] => $this->getNom(),
			$keys[3] => $this->getCommentaire(),
			$keys[4] => $this->getPhoto1(),
			$keys[5] => $this->getPhoto2(),
			$keys[6] => $this->getSiteweb1(),
			$keys[7] => $this->getSiteweb2(),
			$keys[8] => $this->getUtilisateurId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeriePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setHistoire($value);
				break;
			case 2:
				$this->setNom($value);
				break;
			case 3:
				$this->setCommentaire($value);
				break;
			case 4:
				$this->setPhoto1($value);
				break;
			case 5:
				$this->setPhoto2($value);
				break;
			case 6:
				$this->setSiteweb1($value);
				break;
			case 7:
				$this->setSiteweb2($value);
				break;
			case 8:
				$this->setUtilisateurId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeriePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHistoire($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCommentaire($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPhoto1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPhoto2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSiteweb1($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSiteweb2($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUtilisateurId($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeriePeer::DATABASE_NAME);

		if ($this->isColumnModified(SeriePeer::ID)) $criteria->add(SeriePeer::ID, $this->id);
		if ($this->isColumnModified(SeriePeer::HISTOIRE)) $criteria->add(SeriePeer::HISTOIRE, $this->histoire);
		if ($this->isColumnModified(SeriePeer::NOM)) $criteria->add(SeriePeer::NOM, $this->nom);
		if ($this->isColumnModified(SeriePeer::COMMENTAIRE)) $criteria->add(SeriePeer::COMMENTAIRE, $this->commentaire);
		if ($this->isColumnModified(SeriePeer::PHOTO1)) $criteria->add(SeriePeer::PHOTO1, $this->photo1);
		if ($this->isColumnModified(SeriePeer::PHOTO2)) $criteria->add(SeriePeer::PHOTO2, $this->photo2);
		if ($this->isColumnModified(SeriePeer::SITEWEB1)) $criteria->add(SeriePeer::SITEWEB1, $this->siteweb1);
		if ($this->isColumnModified(SeriePeer::SITEWEB2)) $criteria->add(SeriePeer::SITEWEB2, $this->siteweb2);
		if ($this->isColumnModified(SeriePeer::UTILISATEUR_ID)) $criteria->add(SeriePeer::UTILISATEUR_ID, $this->utilisateur_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeriePeer::DATABASE_NAME);

		$criteria->add(SeriePeer::ID, $this->id);

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

		$copyObj->setHistoire($this->histoire);

		$copyObj->setNom($this->nom);

		$copyObj->setCommentaire($this->commentaire);

		$copyObj->setPhoto1($this->photo1);

		$copyObj->setPhoto2($this->photo2);

		$copyObj->setSiteweb1($this->siteweb1);

		$copyObj->setSiteweb2($this->siteweb2);

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
			self::$peer = new SeriePeer();
		}
		return self::$peer;
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

				$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

				AlbumPeer::addSelectColumns($criteria);
				$this->collAlbums = AlbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

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

		$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

		return AlbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAlbum(Album $l)
	{
		$this->collAlbums[] = $l;
		$l->setSerie($this);
	}


	
	public function getAlbumsJoinEditeur($criteria = null, $con = null)
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

				$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinEditeur($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinEditeur($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
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

				$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
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

				$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::SERIE_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}

} 