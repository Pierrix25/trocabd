<?php


abstract class BaseMembre extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $utilisateur_id;


	
	protected $communaute_id;


	
	protected $membre;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aUtilisateur;

	
	protected $aCommunaute;

	
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

	
	public function getCommunauteId()
	{

		return $this->communaute_id;
	}

	
	public function getMembre()
	{

		return $this->membre;
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
			$this->modifiedColumns[] = MembrePeer::ID;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = MembrePeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function setCommunauteId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->communaute_id !== $v) {
			$this->communaute_id = $v;
			$this->modifiedColumns[] = MembrePeer::COMMUNAUTE_ID;
		}

		if ($this->aCommunaute !== null && $this->aCommunaute->getId() !== $v) {
			$this->aCommunaute = null;
		}

	} 
	
	public function setMembre($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->membre !== $v) {
			$this->membre = $v;
			$this->modifiedColumns[] = MembrePeer::MEMBRE;
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
			$this->modifiedColumns[] = MembrePeer::CREATED_AT;
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
			$this->modifiedColumns[] = MembrePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->utilisateur_id = $rs->getInt($startcol + 1);

			$this->communaute_id = $rs->getInt($startcol + 2);

			$this->membre = $rs->getInt($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->updated_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Membre object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MembrePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MembrePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MembrePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(MembrePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MembrePeer::DATABASE_NAME);
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

			if ($this->aCommunaute !== null) {
				if ($this->aCommunaute->isModified()) {
					$affectedRows += $this->aCommunaute->save($con);
				}
				$this->setCommunaute($this->aCommunaute);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = MembrePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MembrePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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

			if ($this->aCommunaute !== null) {
				if (!$this->aCommunaute->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCommunaute->getValidationFailures());
				}
			}


			if (($retval = MembrePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MembrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCommunauteId();
				break;
			case 3:
				return $this->getMembre();
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
		$keys = MembrePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUtilisateurId(),
			$keys[2] => $this->getCommunauteId(),
			$keys[3] => $this->getMembre(),
			$keys[4] => $this->getCreatedAt(),
			$keys[5] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MembrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCommunauteId($value);
				break;
			case 3:
				$this->setMembre($value);
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
		$keys = MembrePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUtilisateurId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCommunauteId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMembre($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MembrePeer::DATABASE_NAME);

		if ($this->isColumnModified(MembrePeer::ID)) $criteria->add(MembrePeer::ID, $this->id);
		if ($this->isColumnModified(MembrePeer::UTILISATEUR_ID)) $criteria->add(MembrePeer::UTILISATEUR_ID, $this->utilisateur_id);
		if ($this->isColumnModified(MembrePeer::COMMUNAUTE_ID)) $criteria->add(MembrePeer::COMMUNAUTE_ID, $this->communaute_id);
		if ($this->isColumnModified(MembrePeer::MEMBRE)) $criteria->add(MembrePeer::MEMBRE, $this->membre);
		if ($this->isColumnModified(MembrePeer::CREATED_AT)) $criteria->add(MembrePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(MembrePeer::UPDATED_AT)) $criteria->add(MembrePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MembrePeer::DATABASE_NAME);

		$criteria->add(MembrePeer::ID, $this->id);

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

		$copyObj->setCommunauteId($this->communaute_id);

		$copyObj->setMembre($this->membre);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new MembrePeer();
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

	
	public function setCommunaute($v)
	{


		if ($v === null) {
			$this->setCommunauteId(NULL);
		} else {
			$this->setCommunauteId($v->getId());
		}


		$this->aCommunaute = $v;
	}


	
	public function getCommunaute($con = null)
	{
		if ($this->aCommunaute === null && ($this->communaute_id !== null)) {
						include_once 'lib/model/om/BaseCommunautePeer.php';

			$this->aCommunaute = CommunautePeer::retrieveByPK($this->communaute_id, $con);

			
		}
		return $this->aCommunaute;
	}

} 