<?php


abstract class BaseCommentairealbum extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $commentaire;


	
	protected $note;


	
	protected $album_id;


	
	protected $utilisateur_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aAlbum;

	
	protected $aUtilisateur;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCommentaire()
	{

		return $this->commentaire;
	}

	
	public function getNote()
	{

		return $this->note;
	}

	
	public function getAlbumId()
	{

		return $this->album_id;
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
			$this->modifiedColumns[] = CommentairealbumPeer::ID;
		}

	} 
	
	public function setCommentaire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->commentaire !== $v) {
			$this->commentaire = $v;
			$this->modifiedColumns[] = CommentairealbumPeer::COMMENTAIRE;
		}

	} 
	
	public function setNote($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = CommentairealbumPeer::NOTE;
		}

	} 
	
	public function setAlbumId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->album_id !== $v) {
			$this->album_id = $v;
			$this->modifiedColumns[] = CommentairealbumPeer::ALBUM_ID;
		}

		if ($this->aAlbum !== null && $this->aAlbum->getId() !== $v) {
			$this->aAlbum = null;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = CommentairealbumPeer::UTILISATEUR_ID;
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
			$this->modifiedColumns[] = CommentairealbumPeer::CREATED_AT;
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
			$this->modifiedColumns[] = CommentairealbumPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->commentaire = $rs->getString($startcol + 1);

			$this->note = $rs->getInt($startcol + 2);

			$this->album_id = $rs->getInt($startcol + 3);

			$this->utilisateur_id = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Commentairealbum object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentairealbumPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CommentairealbumPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CommentairealbumPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(CommentairealbumPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentairealbumPeer::DATABASE_NAME);
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

			if ($this->aUtilisateur !== null) {
				if ($this->aUtilisateur->isModified()) {
					$affectedRows += $this->aUtilisateur->save($con);
				}
				$this->setUtilisateur($this->aUtilisateur);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CommentairealbumPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CommentairealbumPeer::doUpdate($this, $con);
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

			if ($this->aUtilisateur !== null) {
				if (!$this->aUtilisateur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateur->getValidationFailures());
				}
			}


			if (($retval = CommentairealbumPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentairealbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCommentaire();
				break;
			case 2:
				return $this->getNote();
				break;
			case 3:
				return $this->getAlbumId();
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
		$keys = CommentairealbumPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCommentaire(),
			$keys[2] => $this->getNote(),
			$keys[3] => $this->getAlbumId(),
			$keys[4] => $this->getUtilisateurId(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentairealbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCommentaire($value);
				break;
			case 2:
				$this->setNote($value);
				break;
			case 3:
				$this->setAlbumId($value);
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
		$keys = CommentairealbumPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCommentaire($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNote($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAlbumId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUtilisateurId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CommentairealbumPeer::DATABASE_NAME);

		if ($this->isColumnModified(CommentairealbumPeer::ID)) $criteria->add(CommentairealbumPeer::ID, $this->id);
		if ($this->isColumnModified(CommentairealbumPeer::COMMENTAIRE)) $criteria->add(CommentairealbumPeer::COMMENTAIRE, $this->commentaire);
		if ($this->isColumnModified(CommentairealbumPeer::NOTE)) $criteria->add(CommentairealbumPeer::NOTE, $this->note);
		if ($this->isColumnModified(CommentairealbumPeer::ALBUM_ID)) $criteria->add(CommentairealbumPeer::ALBUM_ID, $this->album_id);
		if ($this->isColumnModified(CommentairealbumPeer::UTILISATEUR_ID)) $criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->utilisateur_id);
		if ($this->isColumnModified(CommentairealbumPeer::CREATED_AT)) $criteria->add(CommentairealbumPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CommentairealbumPeer::UPDATED_AT)) $criteria->add(CommentairealbumPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CommentairealbumPeer::DATABASE_NAME);

		$criteria->add(CommentairealbumPeer::ID, $this->id);

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

		$copyObj->setCommentaire($this->commentaire);

		$copyObj->setNote($this->note);

		$copyObj->setAlbumId($this->album_id);

		$copyObj->setUtilisateurId($this->utilisateur_id);

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
			self::$peer = new CommentairealbumPeer();
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

} 