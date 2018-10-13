<?php


abstract class BaseOffresource extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $album_id;


	
	protected $utilisateursource_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aAlbum;

	
	protected $aUtilisateursource;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getAlbumId()
	{

		return $this->album_id;
	}

	
	public function getUtilisateursourceId()
	{

		return $this->utilisateursource_id;
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
			$this->modifiedColumns[] = OffresourcePeer::ID;
		}

	} 
	
	public function setAlbumId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->album_id !== $v) {
			$this->album_id = $v;
			$this->modifiedColumns[] = OffresourcePeer::ALBUM_ID;
		}

		if ($this->aAlbum !== null && $this->aAlbum->getId() !== $v) {
			$this->aAlbum = null;
		}

	} 
	
	public function setUtilisateursourceId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateursource_id !== $v) {
			$this->utilisateursource_id = $v;
			$this->modifiedColumns[] = OffresourcePeer::UTILISATEURSOURCE_ID;
		}

		if ($this->aUtilisateursource !== null && $this->aUtilisateursource->getId() !== $v) {
			$this->aUtilisateursource = null;
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
			$this->modifiedColumns[] = OffresourcePeer::CREATED_AT;
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
			$this->modifiedColumns[] = OffresourcePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->album_id = $rs->getInt($startcol + 1);

			$this->utilisateursource_id = $rs->getInt($startcol + 2);

			$this->created_at = $rs->getTimestamp($startcol + 3, null);

			$this->updated_at = $rs->getTimestamp($startcol + 4, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Offresource object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OffresourcePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OffresourcePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(OffresourcePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(OffresourcePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OffresourcePeer::DATABASE_NAME);
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


												
			if ($this->aAlbum !== null) {
				if ($this->aAlbum->isModified()) {
					$affectedRows += $this->aAlbum->save($con);
				}
				$this->setAlbum($this->aAlbum);
			}

			if ($this->aUtilisateursource !== null) {
				if ($this->aUtilisateursource->isModified()) {
					$affectedRows += $this->aUtilisateursource->save($con);
				}
				$this->setUtilisateursource($this->aUtilisateursource);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = OffresourcePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += OffresourcePeer::doUpdate($this, $con);
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


												
			if ($this->aAlbum !== null) {
				if (!$this->aAlbum->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAlbum->getValidationFailures());
				}
			}

			if ($this->aUtilisateursource !== null) {
				if (!$this->aUtilisateursource->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateursource->getValidationFailures());
				}
			}


			if (($retval = OffresourcePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OffresourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getAlbumId();
				break;
			case 2:
				return $this->getUtilisateursourceId();
				break;
			case 3:
				return $this->getCreatedAt();
				break;
			case 4:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OffresourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAlbumId(),
			$keys[2] => $this->getUtilisateursourceId(),
			$keys[3] => $this->getCreatedAt(),
			$keys[4] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OffresourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setAlbumId($value);
				break;
			case 2:
				$this->setUtilisateursourceId($value);
				break;
			case 3:
				$this->setCreatedAt($value);
				break;
			case 4:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OffresourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAlbumId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUtilisateursourceId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUpdatedAt($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OffresourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(OffresourcePeer::ID)) $criteria->add(OffresourcePeer::ID, $this->id);
		if ($this->isColumnModified(OffresourcePeer::ALBUM_ID)) $criteria->add(OffresourcePeer::ALBUM_ID, $this->album_id);
		if ($this->isColumnModified(OffresourcePeer::UTILISATEURSOURCE_ID)) $criteria->add(OffresourcePeer::UTILISATEURSOURCE_ID, $this->utilisateursource_id);
		if ($this->isColumnModified(OffresourcePeer::CREATED_AT)) $criteria->add(OffresourcePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(OffresourcePeer::UPDATED_AT)) $criteria->add(OffresourcePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OffresourcePeer::DATABASE_NAME);

		$criteria->add(OffresourcePeer::ID, $this->id);

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

		$copyObj->setAlbumId($this->album_id);

		$copyObj->setUtilisateursourceId($this->utilisateursource_id);

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
			self::$peer = new OffresourcePeer();
		}
		return self::$peer;
	}

	
	public function setAlbum($v)
	{


		if ($v === null) {
			$this->setAlbumId(NULL);
		} else {
			$this->setAlbumId($v->getId());
		}


		$this->aAlbum = $v;
	}


	
	public function getAlbum($con = null)
	{
		if ($this->aAlbum === null && ($this->album_id !== null)) {
						include_once 'lib/model/om/BaseAlbumPeer.php';

			$this->aAlbum = AlbumPeer::retrieveByPK($this->album_id, $con);

			
		}
		return $this->aAlbum;
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

} 