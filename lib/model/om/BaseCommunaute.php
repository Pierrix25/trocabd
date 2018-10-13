<?php


abstract class BaseCommunaute extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $ncommunaute;


	
	protected $devise;


	
	protected $description;


	
	protected $utilisateur_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aUtilisateur;

	
	protected $collMembres;

	
	protected $lastMembreCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNcommunaute()
	{

		return $this->ncommunaute;
	}

	
	public function getDevise()
	{

		return $this->devise;
	}

	
	public function getDescription()
	{

		return $this->description;
	}

	
	public function getUtilisateurId()
	{

		return $this->utilisateur_id;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CommunautePeer::ID;
		}

	} 
	
	public function setNcommunaute($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ncommunaute !== $v) {
			$this->ncommunaute = $v;
			$this->modifiedColumns[] = CommunautePeer::NCOMMUNAUTE;
		}

	} 
	
	public function setDevise($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->devise !== $v) {
			$this->devise = $v;
			$this->modifiedColumns[] = CommunautePeer::DEVISE;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = CommunautePeer::DESCRIPTION;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = CommunautePeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = CommunautePeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = CommunautePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->ncommunaute = $rs->getString($startcol + 1);

			$this->devise = $rs->getString($startcol + 2);

			$this->description = $rs->getString($startcol + 3);

			$this->utilisateur_id = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Communaute object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommunautePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CommunautePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CommunautePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(CommunautePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommunautePeer::DATABASE_NAME);
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
					$pk = CommunautePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CommunautePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collMembres !== null) {
				foreach($this->collMembres as $referrerFK) {
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


			if (($retval = CommunautePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collMembres !== null) {
					foreach($this->collMembres as $referrerFK) {
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
		$pos = CommunautePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNcommunaute();
				break;
			case 2:
				return $this->getDevise();
				break;
			case 3:
				return $this->getDescription();
				break;
			case 4:
				return $this->getUtilisateurId();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommunautePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNcommunaute(),
			$keys[2] => $this->getDevise(),
			$keys[3] => $this->getDescription(),
			$keys[4] => $this->getUtilisateurId(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommunautePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNcommunaute($value);
				break;
			case 2:
				$this->setDevise($value);
				break;
			case 3:
				$this->setDescription($value);
				break;
			case 4:
				$this->setUtilisateurId($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommunautePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNcommunaute($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDevise($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUtilisateurId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CommunautePeer::DATABASE_NAME);

		if ($this->isColumnModified(CommunautePeer::ID)) $criteria->add(CommunautePeer::ID, $this->id);
		if ($this->isColumnModified(CommunautePeer::NCOMMUNAUTE)) $criteria->add(CommunautePeer::NCOMMUNAUTE, $this->ncommunaute);
		if ($this->isColumnModified(CommunautePeer::DEVISE)) $criteria->add(CommunautePeer::DEVISE, $this->devise);
		if ($this->isColumnModified(CommunautePeer::DESCRIPTION)) $criteria->add(CommunautePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(CommunautePeer::UTILISATEUR_ID)) $criteria->add(CommunautePeer::UTILISATEUR_ID, $this->utilisateur_id);
		if ($this->isColumnModified(CommunautePeer::CREATED_AT)) $criteria->add(CommunautePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CommunautePeer::UPDATED_AT)) $criteria->add(CommunautePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CommunautePeer::DATABASE_NAME);

		$criteria->add(CommunautePeer::ID, $this->id);

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

		$copyObj->setNcommunaute($this->ncommunaute);

		$copyObj->setDevise($this->devise);

		$copyObj->setDescription($this->description);

		$copyObj->setUtilisateurId($this->utilisateur_id);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getMembres() as $relObj) {
				$copyObj->addMembre($relObj->copy($deepCopy));
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
			self::$peer = new CommunautePeer();
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

	
	public function initMembres()
	{
		if ($this->collMembres === null) {
			$this->collMembres = array();
		}
	}

	
	public function getMembres($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMembrePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMembres === null) {
			if ($this->isNew()) {
			   $this->collMembres = array();
			} else {

				$criteria->add(MembrePeer::COMMUNAUTE_ID, $this->getId());

				MembrePeer::addSelectColumns($criteria);
				$this->collMembres = MembrePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MembrePeer::COMMUNAUTE_ID, $this->getId());

				MembrePeer::addSelectColumns($criteria);
				if (!isset($this->lastMembreCriteria) || !$this->lastMembreCriteria->equals($criteria)) {
					$this->collMembres = MembrePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMembreCriteria = $criteria;
		return $this->collMembres;
	}

	
	public function countMembres($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseMembrePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MembrePeer::COMMUNAUTE_ID, $this->getId());

		return MembrePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMembre(Membre $l)
	{
		$this->collMembres[] = $l;
		$l->setCommunaute($this);
	}


	
	public function getMembresJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMembrePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMembres === null) {
			if ($this->isNew()) {
				$this->collMembres = array();
			} else {

				$criteria->add(MembrePeer::COMMUNAUTE_ID, $this->getId());

				$this->collMembres = MembrePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(MembrePeer::COMMUNAUTE_ID, $this->getId());

			if (!isset($this->lastMembreCriteria) || !$this->lastMembreCriteria->equals($criteria)) {
				$this->collMembres = MembrePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastMembreCriteria = $criteria;

		return $this->collMembres;
	}

} 