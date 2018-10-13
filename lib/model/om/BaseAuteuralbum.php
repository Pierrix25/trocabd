<?php


abstract class BaseAuteuralbum extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $album_id;


	
	protected $auteur_id;


	
	protected $dessinateur;


	
	protected $scenariste;


	
	protected $coloriste;

	
	protected $aAlbum;

	
	protected $aAuteur;

	
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

	
	public function getAuteurId()
	{

		return $this->auteur_id;
	}

	
	public function getDessinateur()
	{

		return $this->dessinateur;
	}

	
	public function getScenariste()
	{

		return $this->scenariste;
	}

	
	public function getColoriste()
	{

		return $this->coloriste;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::ID;
		}

	} 
	
	public function setAlbumId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->album_id !== $v) {
			$this->album_id = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::ALBUM_ID;
		}

		if ($this->aAlbum !== null && $this->aAlbum->getId() !== $v) {
			$this->aAlbum = null;
		}

	} 
	
	public function setAuteurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->auteur_id !== $v) {
			$this->auteur_id = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::AUTEUR_ID;
		}

		if ($this->aAuteur !== null && $this->aAuteur->getId() !== $v) {
			$this->aAuteur = null;
		}

	} 
	
	public function setDessinateur($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dessinateur !== $v) {
			$this->dessinateur = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::DESSINATEUR;
		}

	} 
	
	public function setScenariste($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->scenariste !== $v) {
			$this->scenariste = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::SCENARISTE;
		}

	} 
	
	public function setColoriste($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->coloriste !== $v) {
			$this->coloriste = $v;
			$this->modifiedColumns[] = AuteuralbumPeer::COLORISTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->album_id = $rs->getInt($startcol + 1);

			$this->auteur_id = $rs->getInt($startcol + 2);

			$this->dessinateur = $rs->getInt($startcol + 3);

			$this->scenariste = $rs->getInt($startcol + 4);

			$this->coloriste = $rs->getInt($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Auteuralbum object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AuteuralbumPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AuteuralbumPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AuteuralbumPeer::DATABASE_NAME);
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

			if ($this->aAuteur !== null) {
				if ($this->aAuteur->isModified()) {
					$affectedRows += $this->aAuteur->save($con);
				}
				$this->setAuteur($this->aAuteur);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AuteuralbumPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AuteuralbumPeer::doUpdate($this, $con);
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

			if ($this->aAuteur !== null) {
				if (!$this->aAuteur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAuteur->getValidationFailures());
				}
			}


			if (($retval = AuteuralbumPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AuteuralbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAuteurId();
				break;
			case 3:
				return $this->getDessinateur();
				break;
			case 4:
				return $this->getScenariste();
				break;
			case 5:
				return $this->getColoriste();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AuteuralbumPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAlbumId(),
			$keys[2] => $this->getAuteurId(),
			$keys[3] => $this->getDessinateur(),
			$keys[4] => $this->getScenariste(),
			$keys[5] => $this->getColoriste(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AuteuralbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAuteurId($value);
				break;
			case 3:
				$this->setDessinateur($value);
				break;
			case 4:
				$this->setScenariste($value);
				break;
			case 5:
				$this->setColoriste($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AuteuralbumPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAlbumId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAuteurId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDessinateur($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setScenariste($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setColoriste($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AuteuralbumPeer::DATABASE_NAME);

		if ($this->isColumnModified(AuteuralbumPeer::ID)) $criteria->add(AuteuralbumPeer::ID, $this->id);
		if ($this->isColumnModified(AuteuralbumPeer::ALBUM_ID)) $criteria->add(AuteuralbumPeer::ALBUM_ID, $this->album_id);
		if ($this->isColumnModified(AuteuralbumPeer::AUTEUR_ID)) $criteria->add(AuteuralbumPeer::AUTEUR_ID, $this->auteur_id);
		if ($this->isColumnModified(AuteuralbumPeer::DESSINATEUR)) $criteria->add(AuteuralbumPeer::DESSINATEUR, $this->dessinateur);
		if ($this->isColumnModified(AuteuralbumPeer::SCENARISTE)) $criteria->add(AuteuralbumPeer::SCENARISTE, $this->scenariste);
		if ($this->isColumnModified(AuteuralbumPeer::COLORISTE)) $criteria->add(AuteuralbumPeer::COLORISTE, $this->coloriste);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AuteuralbumPeer::DATABASE_NAME);

		$criteria->add(AuteuralbumPeer::ID, $this->id);

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

		$copyObj->setAuteurId($this->auteur_id);

		$copyObj->setDessinateur($this->dessinateur);

		$copyObj->setScenariste($this->scenariste);

		$copyObj->setColoriste($this->coloriste);


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
			self::$peer = new AuteuralbumPeer();
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

	
	public function setAuteur($v)
	{


		if ($v === null) {
			$this->setAuteurId(NULL);
		} else {
			$this->setAuteurId($v->getId());
		}


		$this->aAuteur = $v;
	}


	
	public function getAuteur($con = null)
	{
		if ($this->aAuteur === null && ($this->auteur_id !== null)) {
						include_once 'lib/model/om/BaseAuteurPeer.php';

			$this->aAuteur = AuteurPeer::retrieveByPK($this->auteur_id, $con);

			
		}
		return $this->aAuteur;
	}

} 