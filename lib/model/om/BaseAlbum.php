<?php


abstract class BaseAlbum extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $talbum;


	
	protected $commentaire;


	
	protected $dateparu;


	
	protected $depotlegal;


	
	protected $histoire;


	
	protected $integrale;


	
	protected $isbn;


	
	protected $issn;


	
	protected $nbrepage;


	
	protected $editeur_id;


	
	protected $genre_id;


	
	protected $serie_id;


	
	protected $photo1;


	
	protected $photo2;


	
	protected $utilisateur_id;


	
	protected $note;

	
	protected $aEditeur;

	
	protected $aGenre;

	
	protected $aSerie;

	
	protected $aUtilisateur;

	
	protected $collAuteuralbums;

	
	protected $lastAuteuralbumCriteria = null;

	
	protected $collOffrecibles;

	
	protected $lastOffrecibleCriteria = null;

	
	protected $collOffresources;

	
	protected $lastOffresourceCriteria = null;

	
	protected $collPossedes;

	
	protected $lastPossedeCriteria = null;

	
	protected $collCommentairealbums;

	
	protected $lastCommentairealbumCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getTalbum()
	{

		return $this->talbum;
	}

	
	public function getCommentaire()
	{

		return $this->commentaire;
	}

	
	public function getDateparu()
	{

		return $this->dateparu;
	}

	
	public function getDepotlegal()
	{

		return $this->depotlegal;
	}

	
	public function getHistoire()
	{

		return $this->histoire;
	}

	
	public function getIntegrale()
	{

		return $this->integrale;
	}

	
	public function getIsbn()
	{

		return $this->isbn;
	}

	
	public function getIssn()
	{

		return $this->issn;
	}

	
	public function getNbrepage()
	{

		return $this->nbrepage;
	}

	
	public function getEditeurId()
	{

		return $this->editeur_id;
	}

	
	public function getGenreId()
	{

		return $this->genre_id;
	}

	
	public function getSerieId()
	{

		return $this->serie_id;
	}

	
	public function getPhoto1()
	{

		return $this->photo1;
	}

	
	public function getPhoto2()
	{

		return $this->photo2;
	}

	
	public function getUtilisateurId()
	{

		return $this->utilisateur_id;
	}

	
	public function getNote()
	{

		return $this->note;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AlbumPeer::ID;
		}

	} 
	
	public function setTalbum($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->talbum !== $v) {
			$this->talbum = $v;
			$this->modifiedColumns[] = AlbumPeer::TALBUM;
		}

	} 
	
	public function setCommentaire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->commentaire !== $v) {
			$this->commentaire = $v;
			$this->modifiedColumns[] = AlbumPeer::COMMENTAIRE;
		}

	} 
	
	public function setDateparu($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dateparu !== $v) {
			$this->dateparu = $v;
			$this->modifiedColumns[] = AlbumPeer::DATEPARU;
		}

	} 
	
	public function setDepotlegal($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->depotlegal !== $v) {
			$this->depotlegal = $v;
			$this->modifiedColumns[] = AlbumPeer::DEPOTLEGAL;
		}

	} 
	
	public function setHistoire($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->histoire !== $v) {
			$this->histoire = $v;
			$this->modifiedColumns[] = AlbumPeer::HISTOIRE;
		}

	} 
	
	public function setIntegrale($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->integrale !== $v) {
			$this->integrale = $v;
			$this->modifiedColumns[] = AlbumPeer::INTEGRALE;
		}

	} 
	
	public function setIsbn($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->isbn !== $v) {
			$this->isbn = $v;
			$this->modifiedColumns[] = AlbumPeer::ISBN;
		}

	} 
	
	public function setIssn($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->issn !== $v) {
			$this->issn = $v;
			$this->modifiedColumns[] = AlbumPeer::ISSN;
		}

	} 
	
	public function setNbrepage($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nbrepage !== $v) {
			$this->nbrepage = $v;
			$this->modifiedColumns[] = AlbumPeer::NBREPAGE;
		}

	} 
	
	public function setEditeurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->editeur_id !== $v) {
			$this->editeur_id = $v;
			$this->modifiedColumns[] = AlbumPeer::EDITEUR_ID;
		}

		if ($this->aEditeur !== null && $this->aEditeur->getId() !== $v) {
			$this->aEditeur = null;
		}

	} 
	
	public function setGenreId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->genre_id !== $v) {
			$this->genre_id = $v;
			$this->modifiedColumns[] = AlbumPeer::GENRE_ID;
		}

		if ($this->aGenre !== null && $this->aGenre->getId() !== $v) {
			$this->aGenre = null;
		}

	} 
	
	public function setSerieId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->serie_id !== $v) {
			$this->serie_id = $v;
			$this->modifiedColumns[] = AlbumPeer::SERIE_ID;
		}

		if ($this->aSerie !== null && $this->aSerie->getId() !== $v) {
			$this->aSerie = null;
		}

	} 
	
	public function setPhoto1($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo1 !== $v) {
			$this->photo1 = $v;
			$this->modifiedColumns[] = AlbumPeer::PHOTO1;
		}

	} 
	
	public function setPhoto2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo2 !== $v) {
			$this->photo2 = $v;
			$this->modifiedColumns[] = AlbumPeer::PHOTO2;
		}

	} 
	
	public function setUtilisateurId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->utilisateur_id !== $v) {
			$this->utilisateur_id = $v;
			$this->modifiedColumns[] = AlbumPeer::UTILISATEUR_ID;
		}

		if ($this->aUtilisateur !== null && $this->aUtilisateur->getId() !== $v) {
			$this->aUtilisateur = null;
		}

	} 
	
	public function setNote($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = AlbumPeer::NOTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->talbum = $rs->getString($startcol + 1);

			$this->commentaire = $rs->getString($startcol + 2);

			$this->dateparu = $rs->getString($startcol + 3);

			$this->depotlegal = $rs->getString($startcol + 4);

			$this->histoire = $rs->getString($startcol + 5);

			$this->integrale = $rs->getInt($startcol + 6);

			$this->isbn = $rs->getString($startcol + 7);

			$this->issn = $rs->getString($startcol + 8);

			$this->nbrepage = $rs->getString($startcol + 9);

			$this->editeur_id = $rs->getInt($startcol + 10);

			$this->genre_id = $rs->getInt($startcol + 11);

			$this->serie_id = $rs->getInt($startcol + 12);

			$this->photo1 = $rs->getString($startcol + 13);

			$this->photo2 = $rs->getString($startcol + 14);

			$this->utilisateur_id = $rs->getInt($startcol + 15);

			$this->note = $rs->getInt($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Album object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AlbumPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AlbumPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AlbumPeer::DATABASE_NAME);
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


												
			if ($this->aEditeur !== null) {
				if ($this->aEditeur->isModified()) {
					$affectedRows += $this->aEditeur->save($con);
				}
				$this->setEditeur($this->aEditeur);
			}

			if ($this->aGenre !== null) {
				if ($this->aGenre->isModified()) {
					$affectedRows += $this->aGenre->save($con);
				}
				$this->setGenre($this->aGenre);
			}

			if ($this->aSerie !== null) {
				if ($this->aSerie->isModified()) {
					$affectedRows += $this->aSerie->save($con);
				}
				$this->setSerie($this->aSerie);
			}

			if ($this->aUtilisateur !== null) {
				if ($this->aUtilisateur->isModified()) {
					$affectedRows += $this->aUtilisateur->save($con);
				}
				$this->setUtilisateur($this->aUtilisateur);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AlbumPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AlbumPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collAuteuralbums !== null) {
				foreach($this->collAuteuralbums as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collOffrecibles !== null) {
				foreach($this->collOffrecibles as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collOffresources !== null) {
				foreach($this->collOffresources as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPossedes !== null) {
				foreach($this->collPossedes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentairealbums !== null) {
				foreach($this->collCommentairealbums as $referrerFK) {
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


												
			if ($this->aEditeur !== null) {
				if (!$this->aEditeur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aEditeur->getValidationFailures());
				}
			}

			if ($this->aGenre !== null) {
				if (!$this->aGenre->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aGenre->getValidationFailures());
				}
			}

			if ($this->aSerie !== null) {
				if (!$this->aSerie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSerie->getValidationFailures());
				}
			}

			if ($this->aUtilisateur !== null) {
				if (!$this->aUtilisateur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUtilisateur->getValidationFailures());
				}
			}


			if (($retval = AlbumPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAuteuralbums !== null) {
					foreach($this->collAuteuralbums as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collOffrecibles !== null) {
					foreach($this->collOffrecibles as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collOffresources !== null) {
					foreach($this->collOffresources as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPossedes !== null) {
					foreach($this->collPossedes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentairealbums !== null) {
					foreach($this->collCommentairealbums as $referrerFK) {
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
		$pos = AlbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTalbum();
				break;
			case 2:
				return $this->getCommentaire();
				break;
			case 3:
				return $this->getDateparu();
				break;
			case 4:
				return $this->getDepotlegal();
				break;
			case 5:
				return $this->getHistoire();
				break;
			case 6:
				return $this->getIntegrale();
				break;
			case 7:
				return $this->getIsbn();
				break;
			case 8:
				return $this->getIssn();
				break;
			case 9:
				return $this->getNbrepage();
				break;
			case 10:
				return $this->getEditeurId();
				break;
			case 11:
				return $this->getGenreId();
				break;
			case 12:
				return $this->getSerieId();
				break;
			case 13:
				return $this->getPhoto1();
				break;
			case 14:
				return $this->getPhoto2();
				break;
			case 15:
				return $this->getUtilisateurId();
				break;
			case 16:
				return $this->getNote();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AlbumPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTalbum(),
			$keys[2] => $this->getCommentaire(),
			$keys[3] => $this->getDateparu(),
			$keys[4] => $this->getDepotlegal(),
			$keys[5] => $this->getHistoire(),
			$keys[6] => $this->getIntegrale(),
			$keys[7] => $this->getIsbn(),
			$keys[8] => $this->getIssn(),
			$keys[9] => $this->getNbrepage(),
			$keys[10] => $this->getEditeurId(),
			$keys[11] => $this->getGenreId(),
			$keys[12] => $this->getSerieId(),
			$keys[13] => $this->getPhoto1(),
			$keys[14] => $this->getPhoto2(),
			$keys[15] => $this->getUtilisateurId(),
			$keys[16] => $this->getNote(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AlbumPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTalbum($value);
				break;
			case 2:
				$this->setCommentaire($value);
				break;
			case 3:
				$this->setDateparu($value);
				break;
			case 4:
				$this->setDepotlegal($value);
				break;
			case 5:
				$this->setHistoire($value);
				break;
			case 6:
				$this->setIntegrale($value);
				break;
			case 7:
				$this->setIsbn($value);
				break;
			case 8:
				$this->setIssn($value);
				break;
			case 9:
				$this->setNbrepage($value);
				break;
			case 10:
				$this->setEditeurId($value);
				break;
			case 11:
				$this->setGenreId($value);
				break;
			case 12:
				$this->setSerieId($value);
				break;
			case 13:
				$this->setPhoto1($value);
				break;
			case 14:
				$this->setPhoto2($value);
				break;
			case 15:
				$this->setUtilisateurId($value);
				break;
			case 16:
				$this->setNote($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AlbumPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTalbum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCommentaire($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateparu($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepotlegal($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHistoire($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIntegrale($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIsbn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIssn($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNbrepage($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEditeurId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setGenreId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSerieId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPhoto1($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPhoto2($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUtilisateurId($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNote($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AlbumPeer::DATABASE_NAME);

		if ($this->isColumnModified(AlbumPeer::ID)) $criteria->add(AlbumPeer::ID, $this->id);
		if ($this->isColumnModified(AlbumPeer::TALBUM)) $criteria->add(AlbumPeer::TALBUM, $this->talbum);
		if ($this->isColumnModified(AlbumPeer::COMMENTAIRE)) $criteria->add(AlbumPeer::COMMENTAIRE, $this->commentaire);
		if ($this->isColumnModified(AlbumPeer::DATEPARU)) $criteria->add(AlbumPeer::DATEPARU, $this->dateparu);
		if ($this->isColumnModified(AlbumPeer::DEPOTLEGAL)) $criteria->add(AlbumPeer::DEPOTLEGAL, $this->depotlegal);
		if ($this->isColumnModified(AlbumPeer::HISTOIRE)) $criteria->add(AlbumPeer::HISTOIRE, $this->histoire);
		if ($this->isColumnModified(AlbumPeer::INTEGRALE)) $criteria->add(AlbumPeer::INTEGRALE, $this->integrale);
		if ($this->isColumnModified(AlbumPeer::ISBN)) $criteria->add(AlbumPeer::ISBN, $this->isbn);
		if ($this->isColumnModified(AlbumPeer::ISSN)) $criteria->add(AlbumPeer::ISSN, $this->issn);
		if ($this->isColumnModified(AlbumPeer::NBREPAGE)) $criteria->add(AlbumPeer::NBREPAGE, $this->nbrepage);
		if ($this->isColumnModified(AlbumPeer::EDITEUR_ID)) $criteria->add(AlbumPeer::EDITEUR_ID, $this->editeur_id);
		if ($this->isColumnModified(AlbumPeer::GENRE_ID)) $criteria->add(AlbumPeer::GENRE_ID, $this->genre_id);
		if ($this->isColumnModified(AlbumPeer::SERIE_ID)) $criteria->add(AlbumPeer::SERIE_ID, $this->serie_id);
		if ($this->isColumnModified(AlbumPeer::PHOTO1)) $criteria->add(AlbumPeer::PHOTO1, $this->photo1);
		if ($this->isColumnModified(AlbumPeer::PHOTO2)) $criteria->add(AlbumPeer::PHOTO2, $this->photo2);
		if ($this->isColumnModified(AlbumPeer::UTILISATEUR_ID)) $criteria->add(AlbumPeer::UTILISATEUR_ID, $this->utilisateur_id);
		if ($this->isColumnModified(AlbumPeer::NOTE)) $criteria->add(AlbumPeer::NOTE, $this->note);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AlbumPeer::DATABASE_NAME);

		$criteria->add(AlbumPeer::ID, $this->id);

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

		$copyObj->setTalbum($this->talbum);

		$copyObj->setCommentaire($this->commentaire);

		$copyObj->setDateparu($this->dateparu);

		$copyObj->setDepotlegal($this->depotlegal);

		$copyObj->setHistoire($this->histoire);

		$copyObj->setIntegrale($this->integrale);

		$copyObj->setIsbn($this->isbn);

		$copyObj->setIssn($this->issn);

		$copyObj->setNbrepage($this->nbrepage);

		$copyObj->setEditeurId($this->editeur_id);

		$copyObj->setGenreId($this->genre_id);

		$copyObj->setSerieId($this->serie_id);

		$copyObj->setPhoto1($this->photo1);

		$copyObj->setPhoto2($this->photo2);

		$copyObj->setUtilisateurId($this->utilisateur_id);

		$copyObj->setNote($this->note);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAuteuralbums() as $relObj) {
				$copyObj->addAuteuralbum($relObj->copy($deepCopy));
			}

			foreach($this->getOffrecibles() as $relObj) {
				$copyObj->addOffrecible($relObj->copy($deepCopy));
			}

			foreach($this->getOffresources() as $relObj) {
				$copyObj->addOffresource($relObj->copy($deepCopy));
			}

			foreach($this->getPossedes() as $relObj) {
				$copyObj->addPossede($relObj->copy($deepCopy));
			}

			foreach($this->getCommentairealbums() as $relObj) {
				$copyObj->addCommentairealbum($relObj->copy($deepCopy));
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
			self::$peer = new AlbumPeer();
		}
		return self::$peer;
	}

	
	public function setEditeur($v)
	{


		if ($v === null) {
			$this->setEditeurId(NULL);
		} else {
			$this->setEditeurId($v->getId());
		}


		$this->aEditeur = $v;
	}


	
	public function getEditeur($con = null)
	{
		if ($this->aEditeur === null && ($this->editeur_id !== null)) {
						include_once 'lib/model/om/BaseEditeurPeer.php';

			$this->aEditeur = EditeurPeer::retrieveByPK($this->editeur_id, $con);

			
		}
		return $this->aEditeur;
	}

	
	public function setGenre($v)
	{


		if ($v === null) {
			$this->setGenreId(NULL);
		} else {
			$this->setGenreId($v->getId());
		}


		$this->aGenre = $v;
	}


	
	public function getGenre($con = null)
	{
		if ($this->aGenre === null && ($this->genre_id !== null)) {
						include_once 'lib/model/om/BaseGenrePeer.php';

			$this->aGenre = GenrePeer::retrieveByPK($this->genre_id, $con);

			
		}
		return $this->aGenre;
	}

	
	public function setSerie($v)
	{


		if ($v === null) {
			$this->setSerieId(NULL);
		} else {
			$this->setSerieId($v->getId());
		}


		$this->aSerie = $v;
	}


	
	public function getSerie($con = null)
	{
		if ($this->aSerie === null && ($this->serie_id !== null)) {
						include_once 'lib/model/om/BaseSeriePeer.php';

			$this->aSerie = SeriePeer::retrieveByPK($this->serie_id, $con);

			
		}
		return $this->aSerie;
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

	
	public function initAuteuralbums()
	{
		if ($this->collAuteuralbums === null) {
			$this->collAuteuralbums = array();
		}
	}

	
	public function getAuteuralbums($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteuralbums === null) {
			if ($this->isNew()) {
			   $this->collAuteuralbums = array();
			} else {

				$criteria->add(AuteuralbumPeer::ALBUM_ID, $this->getId());

				AuteuralbumPeer::addSelectColumns($criteria);
				$this->collAuteuralbums = AuteuralbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AuteuralbumPeer::ALBUM_ID, $this->getId());

				AuteuralbumPeer::addSelectColumns($criteria);
				if (!isset($this->lastAuteuralbumCriteria) || !$this->lastAuteuralbumCriteria->equals($criteria)) {
					$this->collAuteuralbums = AuteuralbumPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAuteuralbumCriteria = $criteria;
		return $this->collAuteuralbums;
	}

	
	public function countAuteuralbums($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AuteuralbumPeer::ALBUM_ID, $this->getId());

		return AuteuralbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAuteuralbum(Auteuralbum $l)
	{
		$this->collAuteuralbums[] = $l;
		$l->setAlbum($this);
	}


	
	public function getAuteuralbumsJoinAuteur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteuralbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteuralbums === null) {
			if ($this->isNew()) {
				$this->collAuteuralbums = array();
			} else {

				$criteria->add(AuteuralbumPeer::ALBUM_ID, $this->getId());

				$this->collAuteuralbums = AuteuralbumPeer::doSelectJoinAuteur($criteria, $con);
			}
		} else {
									
			$criteria->add(AuteuralbumPeer::ALBUM_ID, $this->getId());

			if (!isset($this->lastAuteuralbumCriteria) || !$this->lastAuteuralbumCriteria->equals($criteria)) {
				$this->collAuteuralbums = AuteuralbumPeer::doSelectJoinAuteur($criteria, $con);
			}
		}
		$this->lastAuteuralbumCriteria = $criteria;

		return $this->collAuteuralbums;
	}

	
	public function initOffrecibles()
	{
		if ($this->collOffrecibles === null) {
			$this->collOffrecibles = array();
		}
	}

	
	public function getOffrecibles($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseOffreciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collOffrecibles === null) {
			if ($this->isNew()) {
			   $this->collOffrecibles = array();
			} else {

				$criteria->add(OffreciblePeer::ALBUM_ID, $this->getId());

				OffreciblePeer::addSelectColumns($criteria);
				$this->collOffrecibles = OffreciblePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(OffreciblePeer::ALBUM_ID, $this->getId());

				OffreciblePeer::addSelectColumns($criteria);
				if (!isset($this->lastOffrecibleCriteria) || !$this->lastOffrecibleCriteria->equals($criteria)) {
					$this->collOffrecibles = OffreciblePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastOffrecibleCriteria = $criteria;
		return $this->collOffrecibles;
	}

	
	public function countOffrecibles($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseOffreciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(OffreciblePeer::ALBUM_ID, $this->getId());

		return OffreciblePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addOffrecible(Offrecible $l)
	{
		$this->collOffrecibles[] = $l;
		$l->setAlbum($this);
	}


	
	public function getOffreciblesJoinUtilisateurcible($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseOffreciblePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collOffrecibles === null) {
			if ($this->isNew()) {
				$this->collOffrecibles = array();
			} else {

				$criteria->add(OffreciblePeer::ALBUM_ID, $this->getId());

				$this->collOffrecibles = OffreciblePeer::doSelectJoinUtilisateurcible($criteria, $con);
			}
		} else {
									
			$criteria->add(OffreciblePeer::ALBUM_ID, $this->getId());

			if (!isset($this->lastOffrecibleCriteria) || !$this->lastOffrecibleCriteria->equals($criteria)) {
				$this->collOffrecibles = OffreciblePeer::doSelectJoinUtilisateurcible($criteria, $con);
			}
		}
		$this->lastOffrecibleCriteria = $criteria;

		return $this->collOffrecibles;
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

				$criteria->add(OffresourcePeer::ALBUM_ID, $this->getId());

				OffresourcePeer::addSelectColumns($criteria);
				$this->collOffresources = OffresourcePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(OffresourcePeer::ALBUM_ID, $this->getId());

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

		$criteria->add(OffresourcePeer::ALBUM_ID, $this->getId());

		return OffresourcePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addOffresource(Offresource $l)
	{
		$this->collOffresources[] = $l;
		$l->setAlbum($this);
	}


	
	public function getOffresourcesJoinUtilisateursource($criteria = null, $con = null)
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

				$criteria->add(OffresourcePeer::ALBUM_ID, $this->getId());

				$this->collOffresources = OffresourcePeer::doSelectJoinUtilisateursource($criteria, $con);
			}
		} else {
									
			$criteria->add(OffresourcePeer::ALBUM_ID, $this->getId());

			if (!isset($this->lastOffresourceCriteria) || !$this->lastOffresourceCriteria->equals($criteria)) {
				$this->collOffresources = OffresourcePeer::doSelectJoinUtilisateursource($criteria, $con);
			}
		}
		$this->lastOffresourceCriteria = $criteria;

		return $this->collOffresources;
	}

	
	public function initPossedes()
	{
		if ($this->collPossedes === null) {
			$this->collPossedes = array();
		}
	}

	
	public function getPossedes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePossedePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPossedes === null) {
			if ($this->isNew()) {
			   $this->collPossedes = array();
			} else {

				$criteria->add(PossedePeer::ALBUM_ID, $this->getId());

				PossedePeer::addSelectColumns($criteria);
				$this->collPossedes = PossedePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PossedePeer::ALBUM_ID, $this->getId());

				PossedePeer::addSelectColumns($criteria);
				if (!isset($this->lastPossedeCriteria) || !$this->lastPossedeCriteria->equals($criteria)) {
					$this->collPossedes = PossedePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPossedeCriteria = $criteria;
		return $this->collPossedes;
	}

	
	public function countPossedes($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BasePossedePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PossedePeer::ALBUM_ID, $this->getId());

		return PossedePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPossede(Possede $l)
	{
		$this->collPossedes[] = $l;
		$l->setAlbum($this);
	}


	
	public function getPossedesJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BasePossedePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPossedes === null) {
			if ($this->isNew()) {
				$this->collPossedes = array();
			} else {

				$criteria->add(PossedePeer::ALBUM_ID, $this->getId());

				$this->collPossedes = PossedePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(PossedePeer::ALBUM_ID, $this->getId());

			if (!isset($this->lastPossedeCriteria) || !$this->lastPossedeCriteria->equals($criteria)) {
				$this->collPossedes = PossedePeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastPossedeCriteria = $criteria;

		return $this->collPossedes;
	}

	
	public function initCommentairealbums()
	{
		if ($this->collCommentairealbums === null) {
			$this->collCommentairealbums = array();
		}
	}

	
	public function getCommentairealbums($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommentairealbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentairealbums === null) {
			if ($this->isNew()) {
			   $this->collCommentairealbums = array();
			} else {

				$criteria->add(CommentairealbumPeer::ALBUM_ID, $this->getId());

				CommentairealbumPeer::addSelectColumns($criteria);
				$this->collCommentairealbums = CommentairealbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentairealbumPeer::ALBUM_ID, $this->getId());

				CommentairealbumPeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentairealbumCriteria) || !$this->lastCommentairealbumCriteria->equals($criteria)) {
					$this->collCommentairealbums = CommentairealbumPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentairealbumCriteria = $criteria;
		return $this->collCommentairealbums;
	}

	
	public function countCommentairealbums($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCommentairealbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentairealbumPeer::ALBUM_ID, $this->getId());

		return CommentairealbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentairealbum(Commentairealbum $l)
	{
		$this->collCommentairealbums[] = $l;
		$l->setAlbum($this);
	}


	
	public function getCommentairealbumsJoinUtilisateur($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommentairealbumPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentairealbums === null) {
			if ($this->isNew()) {
				$this->collCommentairealbums = array();
			} else {

				$criteria->add(CommentairealbumPeer::ALBUM_ID, $this->getId());

				$this->collCommentairealbums = CommentairealbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentairealbumPeer::ALBUM_ID, $this->getId());

			if (!isset($this->lastCommentairealbumCriteria) || !$this->lastCommentairealbumCriteria->equals($criteria)) {
				$this->collCommentairealbums = CommentairealbumPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastCommentairealbumCriteria = $criteria;

		return $this->collCommentairealbums;
	}

} 