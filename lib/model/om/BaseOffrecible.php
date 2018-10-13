<?php


abstract class BaseOffrecible extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $album_id;


	
	protected $utilisateurcible_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aAlbum;

	
	protected $aUtilisateurcible;

	
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = OffreciblePeer::ID;
		}

	} 
	
	public function setAlbumId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->album_id !== $v) {
			$this->album_id = $v;
			$this->modifiedColumns[] = OffreciblePeer::ALBUM_ID;
		}

		if ($this->aAlbum !== null && $this->aAlbum->getId() !== $v) {
			$this->aAlbum = null;
		}

	} 
	
	public function setUtilisateurcibleId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateurcible_id !== $v) {
			$this->utilisateurcible_id = $v;
			$this->modifiedColumns[] = OffreciblePeer::UTILISATEURCIBLE_ID;
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
			$this->modifiedColumns[] = OffreciblePeer::CREATED_AT;
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
			$this->modifiedColumns[] = OffreciblePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->album_id = $rs->getInt($startcol + 1);

			$this->utilisateurcible_id = $rs->getInt($startcol + 2);

			$this->created_at = $rs->getTimestamp($startcol + 3, null);

			$this->updated_at = $rs->getTimestamp($startcol + 4, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Offrecible object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OffreciblePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OffreciblePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(OffreciblePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(OffreciblePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OffreciblePeer::DATABASE_NAME);
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

			if ($this->aUtilisateurcible !== null) {
				if ($this->aUtilisateurcible->isModified()) {
					$affectedRows += $this->aUtilisateurcible->save($con);
				}
				$this->setUtilisateurcible($this->aUtilisateurcible);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = OffreciblePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += OffreciblePeer::doUpdate($this, $con);
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

			if ($this->aUtilisateurcible !== null) {
				if (!$this->aUtilisateurcible->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateurcible->getValidationFailures());
				}
			}


			if (($retval = OffreciblePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OffreciblePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUtilisateurcibleId();
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
		$keys = OffreciblePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAlbumId(),
			$keys[2] => $this->getUtilisateurcibleId(),
			$keys[3] => $this->getCreatedAt(),
			$keys[4] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OffreciblePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUtilisateurcibleId($value);
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
		$keys = OffreciblePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAlbumId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUtilisateurcibleId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCreatedAt($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUpdatedAt($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OffreciblePeer::DATABASE_NAME);

		if ($this->isColumnModified(OffreciblePeer::ID)) $criteria->add(OffreciblePeer::ID, $this->id);
		if ($this->isColumnModified(OffreciblePeer::ALBUM_ID)) $criteria->add(OffreciblePeer::ALBUM_ID, $this->album_id);
		if ($this->isColumnModified(OffreciblePeer::UTILISATEURCIBLE_ID)) $criteria->add(OffreciblePeer::UTILISATEURCIBLE_ID, $this->utilisateurcible_id);
		if ($this->isColumnModified(OffreciblePeer::CREATED_AT)) $criteria->add(OffreciblePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(OffreciblePeer::UPDATED_AT)) $criteria->add(OffreciblePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OffreciblePeer::DATABASE_NAME);

		$criteria->add(OffreciblePeer::ID, $this->id);

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

		$copyObj->setUtilisateurcibleId($this->utilisateurcible_id);

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
			self::$peer = new OffreciblePeer();
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

} 