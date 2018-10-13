<?php


abstract class BaseUtilisateursource extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $utilisateur_id;


	
	protected $troc_id;


	
	protected $note;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aUtilisateur;

	
	protected $aTroc;

	
	protected $collOffresources;

	
	protected $lastOffresourceCriteria = null;

	
	protected $collTrocs;

	
	protected $lastTrocCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUtilisateurId()
	{

		return $this->utilisateur_id;
	}

	
	public function getTrocId()
	{

		return $this->troc_id;
	}

	
	public function getNote()
	{

		return $this->note;
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
			$this->modifiedColumns[] = UtilisateursourcePeer::ID;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = UtilisateursourcePeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function setTrocId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->troc_id !== $v) {
			$this->troc_id = $v;
			$this->modifiedColumns[] = UtilisateursourcePeer::TROC_ID;
		}

		if ($this->aTroc !== null && $this->aTroc->getId() !== $v) {
			$this->aTroc = null;
		}

	} 
	
	public function setNote($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = UtilisateursourcePeer::NOTE;
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
			$this->modifiedColumns[] = UtilisateursourcePeer::CREATED_AT;
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
			$this->modifiedColumns[] = UtilisateursourcePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->utilisateur_id = $rs->getInt($startcol + 1);

			$this->troc_id = $rs->getInt($startcol + 2);

			$this->note = $rs->getInt($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->updated_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Utilisateursource object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UtilisateursourcePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UtilisateursourcePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UtilisateursourcePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(UtilisateursourcePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UtilisateursourcePeer::DATABASE_NAME);
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

			if ($this->aTroc !== null) {
				if ($this->aTroc->isModified()) {
					$affectedRows += $this->aTroc->save($con);
				}
				$this->setTroc($this->aTroc);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UtilisateursourcePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UtilisateursourcePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collOffresources !== null) {
				foreach($this->collOffresources as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTrocs !== null) {
				foreach($this->collTrocs as $referrerFK) {
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

			if ($this->aTroc !== null) {
				if (!$this->aTroc->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTroc->getValidationFailures());
				}
			}


			if (($retval = UtilisateursourcePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collOffresources !== null) {
					foreach($this->collOffresources as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTrocs !== null) {
					foreach($this->collTrocs as $referrerFK) {
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
		$pos = UtilisateursourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUtilisateurId();
				break;
			case 2:
				return $this->getTrocId();
				break;
			case 3:
				return $this->getNote();
				break;
			case 4:
				return $this->getCreatedAt();
				break;
			case 5:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UtilisateursourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUtilisateurId(),
			$keys[2] => $this->getTrocId(),
			$keys[3] => $this->getNote(),
			$keys[4] => $this->getCreatedAt(),
			$keys[5] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UtilisateursourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUtilisateurId($value);
				break;
			case 2:
				$this->setTrocId($value);
				break;
			case 3:
				$this->setNote($value);
				break;
			case 4:
				$this->setCreatedAt($value);
				break;
			case 5:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UtilisateursourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUtilisateurId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTrocId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNote($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UtilisateursourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(UtilisateursourcePeer::ID)) $criteria->add(UtilisateursourcePeer::ID, $this->id);
		if ($this->isColumnModified(UtilisateursourcePeer::UTILISATEUR_ID)) $criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->utilisateur_id);
		if ($this->isColumnModified(UtilisateursourcePeer::TROC_ID)) $criteria->add(UtilisateursourcePeer::TROC_ID, $this->troc_id);
		if ($this->isColumnModified(UtilisateursourcePeer::NOTE)) $criteria->add(UtilisateursourcePeer::NOTE, $this->note);
		if ($this->isColumnModified(UtilisateursourcePeer::CREATED_AT)) $criteria->add(UtilisateursourcePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(UtilisateursourcePeer::UPDATED_AT)) $criteria->add(UtilisateursourcePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UtilisateursourcePeer::DATABASE_NAME);

		$criteria->add(UtilisateursourcePeer::ID, $this->id);

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

		$copyObj->setUtilisateurId($this->utilisateur_id);

		$copyObj->setTrocId($this->troc_id);

		$copyObj->setNote($this->note);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getOffresources() as $relObj) {
				$copyObj->addOffresource($relObj->copy($deepCopy));
			}

			foreach($this->getTrocs() as $relObj) {
				$copyObj->addTroc($relObj->copy($deepCopy));
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
			self::$peer = new UtilisateursourcePeer();
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

	
	public function setTroc($v)
	{


		if ($v === null) {
			$this->setTrocId(NULL);
		} else {
			$this->setTrocId($v->getId());
		}


		$this->aTroc = $v;
	}


	
	public function getTroc($con = null)
	{
		if ($this->aTroc === null && ($this->troc_id !== null)) {
						include_once 'lib/model/om/BaseTrocPeer.php';

			$this->aTroc = TrocPeer::retrieveByPK($this->troc_id, $con);

			
		}
		return $this->aTroc;
	}

	
	public function initOffresources()
	{
		if ($this->collOffresources === null) {
			$this->collOffresources = array();
		}
	}

	
	public function getOffresources($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseOffresourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collOffresources === null) {
			if ($this->isNew()) {
			   $this->collOffresources = array();
			} else {

				$criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->getId());

				OffresourcePeer::addSelectColumns($criteria);
				$this->collOffresources = OffresourcePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->getId());

				OffresourcePeer::addSelectColumns($criteria);
				if (!isset($this->lastOffresourceCriteria) || !$this->lastOffresourceCriteria->equals($criteria)) {
					$this->collOffresources = OffresourcePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastOffresourceCriteria = $criteria;
		return $this->collOffresources;
	}

	
	public function countOffresources($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseOffresourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->getId());

		return OffresourcePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addOffresource(Offresource $l)
	{
		$this->collOffresources[] = $l;
		$l->setUtilisateursource($this);
	}


	
	public function getOffresourcesJoinAlbum($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseOffresourcePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collOffresources === null) {
			if ($this->isNew()) {
				$this->collOffresources = array();
			} else {

				$criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->getId());

				$this->collOffresources = OffresourcePeer::doSelectJoinAlbum($criteria, $con);
			}
		} else {
									
			$criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->getId());

			if (!isset($this->lastOffresourceCriteria) || !$this->lastOffresourceCriteria->equals($criteria)) {
				$this->collOffresources = OffresourcePeer::doSelectJoinAlbum($criteria, $con);
			}
		}
		$this->lastOffresourceCriteria = $criteria;

		return $this->collOffresources;
	}

	
	public function initTrocs()
	{
		if ($this->collTrocs === null) {
			$this->collTrocs = array();
		}
	}

	
	public function getTrocs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseTrocPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTrocs === null) {
			if ($this->isNew()) {
			   $this->collTrocs = array();
			} else {

				$criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->getId());

				TrocPeer::addSelectColumns($criteria);
				$this->collTrocs = TrocPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->getId());

				TrocPeer::addSelectColumns($criteria);
				if (!isset($this->lastTrocCriteria) || !$this->lastTrocCriteria->equals($criteria)) {
					$this->collTrocs = TrocPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTrocCriteria = $criteria;
		return $this->collTrocs;
	}

	
	public function countTrocs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseTrocPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->getId());

		return TrocPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTroc(Troc $l)
	{
		$this->collTrocs[] = $l;
		$l->setUtilisateursource($this);
	}


	
	public function getTrocsJoinUtilisateurcible($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseTrocPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTrocs === null) {
			if ($this->isNew()) {
				$this->collTrocs = array();
			} else {

				$criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->getId());

				$this->collTrocs = TrocPeer::doSelectJoinUtilisateurcible($criteria, $con);
			}
		} else {
									
			$criteria->add(TrocPeer::UTILISATEURSOURCE_ID, $this->getId());

			if (!isset($this->lastTrocCriteria) || !$this->lastTrocCriteria->equals($criteria)) {
				$this->collTrocs = TrocPeer::doSelectJoinUtilisateurcible($criteria, $con);
			}
		}
		$this->lastTrocCriteria = $criteria;

		return $this->collTrocs;
	}

} 