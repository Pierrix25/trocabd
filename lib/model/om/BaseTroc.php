<?php


abstract class BaseTroc extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $utilisateursource_id;


	
	protected $utilisateurcible_id;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $etat_id;

	
	protected $aUtilisateursource;

	
	protected $aUtilisateurcible;

	
	protected $collUtilisateurcibles;

	
	protected $lastUtilisateurcibleCriteria = null;

	
	protected $collUtilisateursources;

	
	protected $lastUtilisateursourceCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUtilisateursourceId()
	{

		return $this->utilisateursource_id;
	}

	
	public function getUtilisateurcibleId()
	{

		return $this->utilisateurcible_id;
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

	
	public function getEtatId()
	{

		return $this->etat_id;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TrocPeer::ID;
		}

	} 
	
	public function setUtilisateursourceId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateursource_id !== $v) {
			$this->utilisateursource_id = $v;
			$this->modifiedColumns[] = TrocPeer::UTILISATEURSOURCE_ID;
		}

		if ($this->aUtilisateursource !== null && $this->aUtilisateursource->getId() !== $v) {
			$this->aUtilisateursource = null;
		}

	} 
	
	public function setUtilisateurcibleId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateurcible_id !== $v) {
			$this->utilisateurcible_id = $v;
			$this->modifiedColumns[] = TrocPeer::UTILISATEURCIBLE_ID;
		}

		if ($this->aUtilisateurcible !== null && $this->aUtilisateurcible->getId() !== $v) {
			$this->aUtilisateurcible = null;
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
			$this->modifiedColumns[] = TrocPeer::CREATED_AT;
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
			$this->modifiedColumns[] = TrocPeer::UPDATED_AT;
		}

	} 
	
	public function setEtatId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->etat_id !== $v) {
			$this->etat_id = $v;
			$this->modifiedColumns[] = TrocPeer::ETAT_ID;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->utilisateursource_id = $rs->getInt($startcol + 1);

			$this->utilisateurcible_id = $rs->getInt($startcol + 2);

			$this->created_at = $rs->getTimestamp($startcol + 3, null);

			$this->updated_at = $rs->getTimestamp($startcol + 4, null);

			$this->etat_id = $rs->getInt($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Troc object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TrocPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TrocPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TrocPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TrocPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TrocPeer::DATABASE_NAME);
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


												
			if ($this->aUtilisateursource !== null) {
				if ($this->aUtilisateursource->isModified()) {
					$affectedRows += $this->aUtilisateursource->save($con);
				}
				$this->setUtilisateursource($this->aUtilisateursource);
			}

			if ($this->aUtilisateurcible !== null) {
				if ($this->aUtilisateurcible->isModified()) {
					$affectedRows += $this->aUtilisateurcible->save($con);
				}
				$this->setUtilisateurcible($this->aUtilisateurcible);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TrocPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TrocPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collUtilisateurcibles !== null) {
				foreach($this->collUtilisateurcibles as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUtilisateursources !== null) {
				foreach($this->collUtilisateursources as $referrerFK) {
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


												
			if ($this->aUtilisateursource !== null) {
				if (!$this->aUtilisateursource->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateursource->getValidationFailures());
				}
			}

			if ($this->aUtilisateurcible !== null) {
				if (!$this->aUtilisateurcible->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateurcible->getValidationFailures());
				}
			}


			if (($retval = TrocPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collUtilisateurcibles !== null) {
					foreach($this->collUtilisateurcibles as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUtilisateursources !== null) {
					foreach($this->collUtilisateursources as $referrerFK) {
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
		$pos = TrocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUtilisateursourceId();
				break;
			case 2:
				return $this->getUtilisateurcibleId();
				break;
			case 3:
				return $this->getCreatedAt();
				break;
			case 4:
				return $this->getUpdatedAt();
				break;
			case 5:
				return $this->getEtatId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TrocPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUtilisateursourceId(),
			$keys[2] => $this->getUtilisateurcibleId(),
			$keys[3] => $this->getCreatedAt(),
			$keys[4] => $this->getUpdatedAt(),
			$keys[5] => $this->getEtatId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TrocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUtilisateursourceId($value);
				break;
			case 2:
				$this->setUtilisateurcibleId($value);
				break;
			case 3:
				$this->setCreatedAt($value);
				break;
			case 4:
				$this->setUpdatedAt($value);
				break;
			case 5:
				$this->setEtatId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TrocPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUtilisateursourceId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUtilisateurcibleId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUpdatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEtatId($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TrocPeer::DATABASE_NAME);

		if ($this->isColumnModified(TrocPeer::ID)) $criteria->add(TrocPeer::ID, $this->id);
		if ($this->isColumnModified(TrocPeer::UTILISATEURSOURCE_ID)) $criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->utilisateursource_id);
		if ($this->isColumnModified(TrocPeer::UTILISATEURCIBLE_ID)) $criteria->add(TrocPeer::UTILISATEURCIBLE_ID, $this->utilisateurcible_id);
		if ($this->isColumnModified(TrocPeer::CREATED_AT)) $criteria->add(TrocPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TrocPeer::UPDATED_AT)) $criteria->add(TrocPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(TrocPeer::ETAT_ID)) $criteria->add(TrocPeer::ETAT_ID, $this->etat_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TrocPeer::DATABASE_NAME);

		$criteria->add(TrocPeer::ID, $this->id);

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

		$copyObj->setUtilisateursourceId($this->utilisateursource_id);

		$copyObj->setUtilisateurcibleId($this->utilisateurcible_id);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);

		$copyObj->setEtatId($this->etat_id);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getUtilisateurcibles() as $relObj) {
				$copyObj->addUtilisateurcible($relObj->copy($deepCopy));
			}

			foreach($this->getUtilisateursources() as $relObj) {
				$copyObj->addUtilisateursource($relObj->copy($deepCopy));
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
			self::$peer = new TrocPeer();
		}
		return self::$peer;
	}

	
	public function setUtilisateursource($v)
	{


		if ($v === null) {
			$this->setUtilisateursourceId(NULL);
		} else {
			$this->setUtilisateursourceId($v->getId());
		}


		$this->aUtilisateursource = $v;
	}


	
	public function getUtilisateursource($con = null)
	{
		if ($this->aUtilisateursource === null && ($this->utilisateursource_id !== null)) {
						include_once 'lib/model/om/BaseUtilisateursourcePeer.php';

			$this->aUtilisateursource = UtilisateursourcePeer::retrieveByPK($this->utilisateursource_id, $con);

			
		}
		return $this->aUtilisateursource;
	}

	
	public function setUtilisateurcible($v)
	{


		if ($v === null) {
			$this->setUtilisateurcibleId(NULL);
		} else {
			$this->setUtilisateurcibleId($v->getId());
		}


		$this->aUtilisateurcible = $v;
	}


	
	public function getUtilisateurcible($con = null)
	{
		if ($this->aUtilisateurcible === null && ($this->utilisateurcible_id !== null)) {
						include_once 'lib/model/om/BaseUtilisateurciblePeer.php';

			$this->aUtilisateurcible = UtilisateurciblePeer::retrieveByPK($this->utilisateurcible_id, $con);

			
		}
		return $this->aUtilisateurcible;
	}

	
	public function initUtilisateurcibles()
	{
		if ($this->collUtilisateurcibles === null) {
			$this->collUtilisateurcibles = array();
		}
	}

	
	public function getUtilisateurcibles($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateurciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUtilisateurcibles === null) {
			if ($this->isNew()) {
			   $this->collUtilisateurcibles = array();
			} else {

				$criteria->add(UtilisateurciblePeer::TROC_ID, $this->getId());

				UtilisateurciblePeer::addSelectColumns($criteria);
				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UtilisateurciblePeer::TROC_ID, $this->getId());

				UtilisateurciblePeer::addSelectColumns($criteria);
				if (!isset($this->lastUtilisateurcibleCriteria) || !$this->lastUtilisateurcibleCriteria->equals($criteria)) {
					$this->collUtilisateurcibles = UtilisateurciblePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUtilisateurcibleCriteria = $criteria;
		return $this->collUtilisateurcibles;
	}

	
	public function countUtilisateurcibles($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateurciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UtilisateurciblePeer::TROC_ID, $this->getId());

		return UtilisateurciblePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUtilisateurcible(Utilisateurcible $l)
	{
		$this->collUtilisateurcibles[] = $l;
		$l->setTroc($this);
	}


	
	public function getUtilisateurciblesJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateurciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUtilisateurcibles === null) {
			if ($this->isNew()) {
				$this->collUtilisateurcibles = array();
			} else {

				$criteria->add(UtilisateurciblePeer::TROC_ID, $this->getId());

				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(UtilisateurciblePeer::TROC_ID, $this->getId());

			if (!isset($this->lastUtilisateurcibleCriteria) || !$this->lastUtilisateurcibleCriteria->equals($criteria)) {
				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastUtilisateurcibleCriteria = $criteria;

		return $this->collUtilisateurcibles;
	}

	
	public function initUtilisateursources()
	{
		if ($this->collUtilisateursources === null) {
			$this->collUtilisateursources = array();
		}
	}

	
	public function getUtilisateursources($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateursourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUtilisateursources === null) {
			if ($this->isNew()) {
			   $this->collUtilisateursources = array();
			} else {

				$criteria->add(UtilisateursourcePeer::TROC_ID, $this->getId());

				UtilisateursourcePeer::addSelectColumns($criteria);
				$this->collUtilisateursources = UtilisateursourcePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UtilisateursourcePeer::TROC_ID, $this->getId());

				UtilisateursourcePeer::addSelectColumns($criteria);
				if (!isset($this->lastUtilisateursourceCriteria) || !$this->lastUtilisateursourceCriteria->equals($criteria)) {
					$this->collUtilisateursources = UtilisateursourcePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUtilisateursourceCriteria = $criteria;
		return $this->collUtilisateursources;
	}

	
	public function countUtilisateursources($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateursourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UtilisateursourcePeer::TROC_ID, $this->getId());

		return UtilisateursourcePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUtilisateursource(Utilisateursource $l)
	{
		$this->collUtilisateursources[] = $l;
		$l->setTroc($this);
	}


	
	public function getUtilisateursourcesJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUtilisateursourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUtilisateursources === null) {
			if ($this->isNew()) {
				$this->collUtilisateursources = array();
			} else {

				$criteria->add(UtilisateursourcePeer::TROC_ID, $this->getId());

				$this->collUtilisateursources = UtilisateursourcePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(UtilisateursourcePeer::TROC_ID, $this->getId());

			if (!isset($this->lastUtilisateursourceCriteria) || !$this->lastUtilisateursourceCriteria->equals($criteria)) {
				$this->collUtilisateursources = UtilisateursourcePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastUtilisateursourceCriteria = $criteria;

		return $this->collUtilisateursources;
	}

} 