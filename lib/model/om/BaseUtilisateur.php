<?php


abstract class BaseUtilisateur extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nom;


	
	protected $prenom;


	
	protected $login;


	
	protected $mdp;


	
	protected $rue2;


	
	protected $rue3;


	
	protected $rue4;


	
	protected $cp;


	
	protected $ville;


	
	protected $lon;


	
	protected $lat;


	
	protected $email;


	
	protected $question;


	
	protected $reponse;


	
	protected $nbvisiteur;


	
	protected $nbutilisateur;


	
	protected $derniereconnexion;


	
	protected $userid;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collAlbums;

	
	protected $lastAlbumCriteria = null;

	
	protected $collAuteurs;

	
	protected $lastAuteurCriteria = null;

	
	protected $collEditeurs;

	
	protected $lastEditeurCriteria = null;

	
	protected $collPossedes;

	
	protected $lastPossedeCriteria = null;

	
	protected $collSeries;

	
	protected $lastSerieCriteria = null;

	
	protected $collUtilisateurcibles;

	
	protected $lastUtilisateurcibleCriteria = null;

	
	protected $collUtilisateursources;

	
	protected $lastUtilisateursourceCriteria = null;

	
	protected $collCommunautes;

	
	protected $lastCommunauteCriteria = null;

	
	protected $collMembres;

	
	protected $lastMembreCriteria = null;

	
	protected $collCommentairealbums;

	
	protected $lastCommentairealbumCriteria = null;

	
	protected $collNewss;

	
	protected $lastNewsCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNom()
	{

		return $this->nom;
	}

	
	public function getPrenom()
	{

		return $this->prenom;
	}

	
	public function getLogin()
	{

		return $this->login;
	}

	
	public function getMdp()
	{

		return $this->mdp;
	}

	
	public function getRue2()
	{

		return $this->rue2;
	}

	
	public function getRue3()
	{

		return $this->rue3;
	}

	
	public function getRue4()
	{

		return $this->rue4;
	}

	
	public function getCp()
	{

		return $this->cp;
	}

	
	public function getVille()
	{

		return $this->ville;
	}

	
	public function getLon()
	{

		return $this->lon;
	}

	
	public function getLat()
	{

		return $this->lat;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getQuestion()
	{

		return $this->question;
	}

	
	public function getReponse()
	{

		return $this->reponse;
	}

	
	public function getNbvisiteur()
	{

		return $this->nbvisiteur;
	}

	
	public function getNbutilisateur()
	{

		return $this->nbutilisateur;
	}

	
	public function getDerniereconnexion($format = 'Y-m-d H:i:s')
	{

		if ($this->derniereconnexion === null || $this->derniereconnexion === '') {
			return null;
		} elseif (!is_int($this->derniereconnexion)) {
						$ts = strtotime($this->derniereconnexion);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [derniereconnexion] as date/time value: " . var_export($this->derniereconnexion, true));
			}
		} else {
			$ts = $this->derniereconnexion;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUserid()
	{

		return $this->userid;
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
			$this->modifiedColumns[] = UtilisateurPeer::ID;
		}

	} 
	
	public function setNom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v) {
			$this->nom = $v;
			$this->modifiedColumns[] = UtilisateurPeer::NOM;
		}

	} 
	
	public function setPrenom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prenom !== $v) {
			$this->prenom = $v;
			$this->modifiedColumns[] = UtilisateurPeer::PRENOM;
		}

	} 
	
	public function setLogin($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->login !== $v) {
			$this->login = $v;
			$this->modifiedColumns[] = UtilisateurPeer::LOGIN;
		}

	} 
	
	public function setMdp($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mdp !== $v) {
			$this->mdp = $v;
			$this->modifiedColumns[] = UtilisateurPeer::MDP;
		}

	} 
	
	public function setRue2($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rue2 !== $v) {
			$this->rue2 = $v;
			$this->modifiedColumns[] = UtilisateurPeer::RUE2;
		}

	} 
	
	public function setRue3($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rue3 !== $v) {
			$this->rue3 = $v;
			$this->modifiedColumns[] = UtilisateurPeer::RUE3;
		}

	} 
	
	public function setRue4($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rue4 !== $v) {
			$this->rue4 = $v;
			$this->modifiedColumns[] = UtilisateurPeer::RUE4;
		}

	} 
	
	public function setCp($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cp !== $v) {
			$this->cp = $v;
			$this->modifiedColumns[] = UtilisateurPeer::CP;
		}

	} 
	
	public function setVille($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ville !== $v) {
			$this->ville = $v;
			$this->modifiedColumns[] = UtilisateurPeer::VILLE;
		}

	} 
	
	public function setLon($v)
	{

		if ($this->lon !== $v) {
			$this->lon = $v;
			$this->modifiedColumns[] = UtilisateurPeer::LON;
		}

	} 
	
	public function setLat($v)
	{

		if ($this->lat !== $v) {
			$this->lat = $v;
			$this->modifiedColumns[] = UtilisateurPeer::LAT;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UtilisateurPeer::EMAIL;
		}

	} 
	
	public function setQuestion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->question !== $v) {
			$this->question = $v;
			$this->modifiedColumns[] = UtilisateurPeer::QUESTION;
		}

	} 
	
	public function setReponse($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reponse !== $v) {
			$this->reponse = $v;
			$this->modifiedColumns[] = UtilisateurPeer::REPONSE;
		}

	} 
	
	public function setNbvisiteur($v)
	{

		if ($this->nbvisiteur !== $v) {
			$this->nbvisiteur = $v;
			$this->modifiedColumns[] = UtilisateurPeer::NBVISITEUR;
		}

	} 
	
	public function setNbutilisateur($v)
	{

		if ($this->nbutilisateur !== $v) {
			$this->nbutilisateur = $v;
			$this->modifiedColumns[] = UtilisateurPeer::NBUTILISATEUR;
		}

	} 
	
	public function setDerniereconnexion($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [derniereconnexion] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->derniereconnexion !== $ts) {
			$this->derniereconnexion = $ts;
			$this->modifiedColumns[] = UtilisateurPeer::DERNIERECONNEXION;
		}

	} 
	
	public function setUserid($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->userid !== $v) {
			$this->userid = $v;
			$this->modifiedColumns[] = UtilisateurPeer::USERID;
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
			$this->modifiedColumns[] = UtilisateurPeer::CREATED_AT;
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
			$this->modifiedColumns[] = UtilisateurPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nom = $rs->getString($startcol + 1);

			$this->prenom = $rs->getString($startcol + 2);

			$this->login = $rs->getString($startcol + 3);

			$this->mdp = $rs->getString($startcol + 4);

			$this->rue2 = $rs->getString($startcol + 5);

			$this->rue3 = $rs->getString($startcol + 6);

			$this->rue4 = $rs->getString($startcol + 7);

			$this->cp = $rs->getString($startcol + 8);

			$this->ville = $rs->getString($startcol + 9);

			$this->lon = $rs->getFloat($startcol + 10);

			$this->lat = $rs->getFloat($startcol + 11);

			$this->email = $rs->getString($startcol + 12);

			$this->question = $rs->getString($startcol + 13);

			$this->reponse = $rs->getString($startcol + 14);

			$this->nbvisiteur = $rs->getFloat($startcol + 15);

			$this->nbutilisateur = $rs->getFloat($startcol + 16);

			$this->derniereconnexion = $rs->getTimestamp($startcol + 17, null);

			$this->userid = $rs->getInt($startcol + 18);

			$this->created_at = $rs->getTimestamp($startcol + 19, null);

			$this->updated_at = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Utilisateur object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UtilisateurPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UtilisateurPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UtilisateurPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(UtilisateurPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UtilisateurPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UtilisateurPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UtilisateurPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collAlbums !== null) {
				foreach($this->collAlbums as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAuteurs !== null) {
				foreach($this->collAuteurs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collEditeurs !== null) {
				foreach($this->collEditeurs as $referrerFK) {
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

			if ($this->collSeries !== null) {
				foreach($this->collSeries as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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

			if ($this->collCommunautes !== null) {
				foreach($this->collCommunautes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMembres !== null) {
				foreach($this->collMembres as $referrerFK) {
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

			if ($this->collNewss !== null) {
				foreach($this->collNewss as $referrerFK) {
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


			if (($retval = UtilisateurPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAlbums !== null) {
					foreach($this->collAlbums as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAuteurs !== null) {
					foreach($this->collAuteurs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collEditeurs !== null) {
					foreach($this->collEditeurs as $referrerFK) {
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

				if ($this->collSeries !== null) {
					foreach($this->collSeries as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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

				if ($this->collCommunautes !== null) {
					foreach($this->collCommunautes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMembres !== null) {
					foreach($this->collMembres as $referrerFK) {
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

				if ($this->collNewss !== null) {
					foreach($this->collNewss as $referrerFK) {
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
		$pos = UtilisateurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNom();
				break;
			case 2:
				return $this->getPrenom();
				break;
			case 3:
				return $this->getLogin();
				break;
			case 4:
				return $this->getMdp();
				break;
			case 5:
				return $this->getRue2();
				break;
			case 6:
				return $this->getRue3();
				break;
			case 7:
				return $this->getRue4();
				break;
			case 8:
				return $this->getCp();
				break;
			case 9:
				return $this->getVille();
				break;
			case 10:
				return $this->getLon();
				break;
			case 11:
				return $this->getLat();
				break;
			case 12:
				return $this->getEmail();
				break;
			case 13:
				return $this->getQuestion();
				break;
			case 14:
				return $this->getReponse();
				break;
			case 15:
				return $this->getNbvisiteur();
				break;
			case 16:
				return $this->getNbutilisateur();
				break;
			case 17:
				return $this->getDerniereconnexion();
				break;
			case 18:
				return $this->getUserid();
				break;
			case 19:
				return $this->getCreatedAt();
				break;
			case 20:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UtilisateurPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNom(),
			$keys[2] => $this->getPrenom(),
			$keys[3] => $this->getLogin(),
			$keys[4] => $this->getMdp(),
			$keys[5] => $this->getRue2(),
			$keys[6] => $this->getRue3(),
			$keys[7] => $this->getRue4(),
			$keys[8] => $this->getCp(),
			$keys[9] => $this->getVille(),
			$keys[10] => $this->getLon(),
			$keys[11] => $this->getLat(),
			$keys[12] => $this->getEmail(),
			$keys[13] => $this->getQuestion(),
			$keys[14] => $this->getReponse(),
			$keys[15] => $this->getNbvisiteur(),
			$keys[16] => $this->getNbutilisateur(),
			$keys[17] => $this->getDerniereconnexion(),
			$keys[18] => $this->getUserid(),
			$keys[19] => $this->getCreatedAt(),
			$keys[20] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UtilisateurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNom($value);
				break;
			case 2:
				$this->setPrenom($value);
				break;
			case 3:
				$this->setLogin($value);
				break;
			case 4:
				$this->setMdp($value);
				break;
			case 5:
				$this->setRue2($value);
				break;
			case 6:
				$this->setRue3($value);
				break;
			case 7:
				$this->setRue4($value);
				break;
			case 8:
				$this->setCp($value);
				break;
			case 9:
				$this->setVille($value);
				break;
			case 10:
				$this->setLon($value);
				break;
			case 11:
				$this->setLat($value);
				break;
			case 12:
				$this->setEmail($value);
				break;
			case 13:
				$this->setQuestion($value);
				break;
			case 14:
				$this->setReponse($value);
				break;
			case 15:
				$this->setNbvisiteur($value);
				break;
			case 16:
				$this->setNbutilisateur($value);
				break;
			case 17:
				$this->setDerniereconnexion($value);
				break;
			case 18:
				$this->setUserid($value);
				break;
			case 19:
				$this->setCreatedAt($value);
				break;
			case 20:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UtilisateurPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNom($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPrenom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLogin($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMdp($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRue2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRue3($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRue4($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCp($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setVille($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLon($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setLat($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEmail($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setQuestion($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setReponse($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNbvisiteur($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNbutilisateur($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDerniereconnexion($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUserid($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCreatedAt($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUpdatedAt($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UtilisateurPeer::DATABASE_NAME);

		if ($this->isColumnModified(UtilisateurPeer::ID)) $criteria->add(UtilisateurPeer::ID, $this->id);
		if ($this->isColumnModified(UtilisateurPeer::NOM)) $criteria->add(UtilisateurPeer::NOM, $this->nom);
		if ($this->isColumnModified(UtilisateurPeer::PRENOM)) $criteria->add(UtilisateurPeer::PRENOM, $this->prenom);
		if ($this->isColumnModified(UtilisateurPeer::LOGIN)) $criteria->add(UtilisateurPeer::LOGIN, $this->login);
		if ($this->isColumnModified(UtilisateurPeer::MDP)) $criteria->add(UtilisateurPeer::MDP, $this->mdp);
		if ($this->isColumnModified(UtilisateurPeer::RUE2)) $criteria->add(UtilisateurPeer::RUE2, $this->rue2);
		if ($this->isColumnModified(UtilisateurPeer::RUE3)) $criteria->add(UtilisateurPeer::RUE3, $this->rue3);
		if ($this->isColumnModified(UtilisateurPeer::RUE4)) $criteria->add(UtilisateurPeer::RUE4, $this->rue4);
		if ($this->isColumnModified(UtilisateurPeer::CP)) $criteria->add(UtilisateurPeer::CP, $this->cp);
		if ($this->isColumnModified(UtilisateurPeer::VILLE)) $criteria->add(UtilisateurPeer::VILLE, $this->ville);
		if ($this->isColumnModified(UtilisateurPeer::LON)) $criteria->add(UtilisateurPeer::LON, $this->lon);
		if ($this->isColumnModified(UtilisateurPeer::LAT)) $criteria->add(UtilisateurPeer::LAT, $this->lat);
		if ($this->isColumnModified(UtilisateurPeer::EMAIL)) $criteria->add(UtilisateurPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UtilisateurPeer::QUESTION)) $criteria->add(UtilisateurPeer::QUESTION, $this->question);
		if ($this->isColumnModified(UtilisateurPeer::REPONSE)) $criteria->add(UtilisateurPeer::REPONSE, $this->reponse);
		if ($this->isColumnModified(UtilisateurPeer::NBVISITEUR)) $criteria->add(UtilisateurPeer::NBVISITEUR, $this->nbvisiteur);
		if ($this->isColumnModified(UtilisateurPeer::NBUTILISATEUR)) $criteria->add(UtilisateurPeer::NBUTILISATEUR, $this->nbutilisateur);
		if ($this->isColumnModified(UtilisateurPeer::DERNIERECONNEXION)) $criteria->add(UtilisateurPeer::DERNIERECONNEXION, $this->derniereconnexion);
		if ($this->isColumnModified(UtilisateurPeer::USERID)) $criteria->add(UtilisateurPeer::USERID, $this->userid);
		if ($this->isColumnModified(UtilisateurPeer::CREATED_AT)) $criteria->add(UtilisateurPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(UtilisateurPeer::UPDATED_AT)) $criteria->add(UtilisateurPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UtilisateurPeer::DATABASE_NAME);

		$criteria->add(UtilisateurPeer::ID, $this->id);

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

		$copyObj->setNom($this->nom);

		$copyObj->setPrenom($this->prenom);

		$copyObj->setLogin($this->login);

		$copyObj->setMdp($this->mdp);

		$copyObj->setRue2($this->rue2);

		$copyObj->setRue3($this->rue3);

		$copyObj->setRue4($this->rue4);

		$copyObj->setCp($this->cp);

		$copyObj->setVille($this->ville);

		$copyObj->setLon($this->lon);

		$copyObj->setLat($this->lat);

		$copyObj->setEmail($this->email);

		$copyObj->setQuestion($this->question);

		$copyObj->setReponse($this->reponse);

		$copyObj->setNbvisiteur($this->nbvisiteur);

		$copyObj->setNbutilisateur($this->nbutilisateur);

		$copyObj->setDerniereconnexion($this->derniereconnexion);

		$copyObj->setUserid($this->userid);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAlbums() as $relObj) {
				$copyObj->addAlbum($relObj->copy($deepCopy));
			}

			foreach($this->getAuteurs() as $relObj) {
				$copyObj->addAuteur($relObj->copy($deepCopy));
			}

			foreach($this->getEditeurs() as $relObj) {
				$copyObj->addEditeur($relObj->copy($deepCopy));
			}

			foreach($this->getPossedes() as $relObj) {
				$copyObj->addPossede($relObj->copy($deepCopy));
			}

			foreach($this->getSeries() as $relObj) {
				$copyObj->addSerie($relObj->copy($deepCopy));
			}

			foreach($this->getUtilisateurcibles() as $relObj) {
				$copyObj->addUtilisateurcible($relObj->copy($deepCopy));
			}

			foreach($this->getUtilisateursources() as $relObj) {
				$copyObj->addUtilisateursource($relObj->copy($deepCopy));
			}

			foreach($this->getCommunautes() as $relObj) {
				$copyObj->addCommunaute($relObj->copy($deepCopy));
			}

			foreach($this->getMembres() as $relObj) {
				$copyObj->addMembre($relObj->copy($deepCopy));
			}

			foreach($this->getCommentairealbums() as $relObj) {
				$copyObj->addCommentairealbum($relObj->copy($deepCopy));
			}

			foreach($this->getNewss() as $relObj) {
				$copyObj->addNews($relObj->copy($deepCopy));
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
			self::$peer = new UtilisateurPeer();
		}
		return self::$peer;
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

				$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

				AlbumPeer::addSelectColumns($criteria);
				$this->collAlbums = AlbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

		return AlbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAlbum(Album $l)
	{
		$this->collAlbums[] = $l;
		$l->setUtilisateur($this);
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

				$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinEditeur($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

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

				$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinGenre($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}


	
	public function getAlbumsJoinSerie($criteria = null, $con = null)
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

				$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

				$this->collAlbums = AlbumPeer::doSelectJoinSerie($criteria, $con);
			}
		} else {
									
			$criteria->add(AlbumPeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastAlbumCriteria) || !$this->lastAlbumCriteria->equals($criteria)) {
				$this->collAlbums = AlbumPeer::doSelectJoinSerie($criteria, $con);
			}
		}
		$this->lastAlbumCriteria = $criteria;

		return $this->collAlbums;
	}

	
	public function initAuteurs()
	{
		if ($this->collAuteurs === null) {
			$this->collAuteurs = array();
		}
	}

	
	public function getAuteurs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteurs === null) {
			if ($this->isNew()) {
			   $this->collAuteurs = array();
			} else {

				$criteria->add(AuteurPeer::UTILISATEUR_ID, $this->getId());

				AuteurPeer::addSelectColumns($criteria);
				$this->collAuteurs = AuteurPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AuteurPeer::UTILISATEUR_ID, $this->getId());

				AuteurPeer::addSelectColumns($criteria);
				if (!isset($this->lastAuteurCriteria) || !$this->lastAuteurCriteria->equals($criteria)) {
					$this->collAuteurs = AuteurPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAuteurCriteria = $criteria;
		return $this->collAuteurs;
	}

	
	public function countAuteurs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseAuteurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(AuteurPeer::UTILISATEUR_ID, $this->getId());

		return AuteurPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAuteur(Auteur $l)
	{
		$this->collAuteurs[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getAuteursJoinPays($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseAuteurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAuteurs === null) {
			if ($this->isNew()) {
				$this->collAuteurs = array();
			} else {

				$criteria->add(AuteurPeer::UTILISATEUR_ID, $this->getId());

				$this->collAuteurs = AuteurPeer::doSelectJoinPays($criteria, $con);
			}
		} else {
									
			$criteria->add(AuteurPeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastAuteurCriteria) || !$this->lastAuteurCriteria->equals($criteria)) {
				$this->collAuteurs = AuteurPeer::doSelectJoinPays($criteria, $con);
			}
		}
		$this->lastAuteurCriteria = $criteria;

		return $this->collAuteurs;
	}

	
	public function initEditeurs()
	{
		if ($this->collEditeurs === null) {
			$this->collEditeurs = array();
		}
	}

	
	public function getEditeurs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseEditeurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collEditeurs === null) {
			if ($this->isNew()) {
			   $this->collEditeurs = array();
			} else {

				$criteria->add(EditeurPeer::UTILISATEUR_ID, $this->getId());

				EditeurPeer::addSelectColumns($criteria);
				$this->collEditeurs = EditeurPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(EditeurPeer::UTILISATEUR_ID, $this->getId());

				EditeurPeer::addSelectColumns($criteria);
				if (!isset($this->lastEditeurCriteria) || !$this->lastEditeurCriteria->equals($criteria)) {
					$this->collEditeurs = EditeurPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastEditeurCriteria = $criteria;
		return $this->collEditeurs;
	}

	
	public function countEditeurs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseEditeurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(EditeurPeer::UTILISATEUR_ID, $this->getId());

		return EditeurPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addEditeur(Editeur $l)
	{
		$this->collEditeurs[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getEditeursJoinPays($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseEditeurPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collEditeurs === null) {
			if ($this->isNew()) {
				$this->collEditeurs = array();
			} else {

				$criteria->add(EditeurPeer::UTILISATEUR_ID, $this->getId());

				$this->collEditeurs = EditeurPeer::doSelectJoinPays($criteria, $con);
			}
		} else {
									
			$criteria->add(EditeurPeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastEditeurCriteria) || !$this->lastEditeurCriteria->equals($criteria)) {
				$this->collEditeurs = EditeurPeer::doSelectJoinPays($criteria, $con);
			}
		}
		$this->lastEditeurCriteria = $criteria;

		return $this->collEditeurs;
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

				$criteria->add(PossedePeer::UTILISATEUR_ID, $this->getId());

				PossedePeer::addSelectColumns($criteria);
				$this->collPossedes = PossedePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PossedePeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(PossedePeer::UTILISATEUR_ID, $this->getId());

		return PossedePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPossede(Possede $l)
	{
		$this->collPossedes[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getPossedesJoinAlbum($criteria = null, $con = null)
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

				$criteria->add(PossedePeer::UTILISATEUR_ID, $this->getId());

				$this->collPossedes = PossedePeer::doSelectJoinAlbum($criteria, $con);
			}
		} else {
									
			$criteria->add(PossedePeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastPossedeCriteria) || !$this->lastPossedeCriteria->equals($criteria)) {
				$this->collPossedes = PossedePeer::doSelectJoinAlbum($criteria, $con);
			}
		}
		$this->lastPossedeCriteria = $criteria;

		return $this->collPossedes;
	}

	
	public function initSeries()
	{
		if ($this->collSeries === null) {
			$this->collSeries = array();
		}
	}

	
	public function getSeries($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSeriePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSeries === null) {
			if ($this->isNew()) {
			   $this->collSeries = array();
			} else {

				$criteria->add(SeriePeer::UTILISATEUR_ID, $this->getId());

				SeriePeer::addSelectColumns($criteria);
				$this->collSeries = SeriePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SeriePeer::UTILISATEUR_ID, $this->getId());

				SeriePeer::addSelectColumns($criteria);
				if (!isset($this->lastSerieCriteria) || !$this->lastSerieCriteria->equals($criteria)) {
					$this->collSeries = SeriePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSerieCriteria = $criteria;
		return $this->collSeries;
	}

	
	public function countSeries($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSeriePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SeriePeer::UTILISATEUR_ID, $this->getId());

		return SeriePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSerie(Serie $l)
	{
		$this->collSeries[] = $l;
		$l->setUtilisateur($this);
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

				$criteria->add(UtilisateurciblePeer::UTILISATEUR_ID, $this->getId());

				UtilisateurciblePeer::addSelectColumns($criteria);
				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UtilisateurciblePeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(UtilisateurciblePeer::UTILISATEUR_ID, $this->getId());

		return UtilisateurciblePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUtilisateurcible(Utilisateurcible $l)
	{
		$this->collUtilisateurcibles[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getUtilisateurciblesJoinTroc($criteria = null, $con = null)
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

				$criteria->add(UtilisateurciblePeer::UTILISATEUR_ID, $this->getId());

				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelectJoinTroc($criteria, $con);
			}
		} else {
									
			$criteria->add(UtilisateurciblePeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastUtilisateurcibleCriteria) || !$this->lastUtilisateurcibleCriteria->equals($criteria)) {
				$this->collUtilisateurcibles = UtilisateurciblePeer::doSelectJoinTroc($criteria, $con);
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

				$criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->getId());

				UtilisateursourcePeer::addSelectColumns($criteria);
				$this->collUtilisateursources = UtilisateursourcePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->getId());

		return UtilisateursourcePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUtilisateursource(Utilisateursource $l)
	{
		$this->collUtilisateursources[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getUtilisateursourcesJoinTroc($criteria = null, $con = null)
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

				$criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->getId());

				$this->collUtilisateursources = UtilisateursourcePeer::doSelectJoinTroc($criteria, $con);
			}
		} else {
									
			$criteria->add(UtilisateursourcePeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastUtilisateursourceCriteria) || !$this->lastUtilisateursourceCriteria->equals($criteria)) {
				$this->collUtilisateursources = UtilisateursourcePeer::doSelectJoinTroc($criteria, $con);
			}
		}
		$this->lastUtilisateursourceCriteria = $criteria;

		return $this->collUtilisateursources;
	}

	
	public function initCommunautes()
	{
		if ($this->collCommunautes === null) {
			$this->collCommunautes = array();
		}
	}

	
	public function getCommunautes($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommunautePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommunautes === null) {
			if ($this->isNew()) {
			   $this->collCommunautes = array();
			} else {

				$criteria->add(CommunautePeer::UTILISATEUR_ID, $this->getId());

				CommunautePeer::addSelectColumns($criteria);
				$this->collCommunautes = CommunautePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommunautePeer::UTILISATEUR_ID, $this->getId());

				CommunautePeer::addSelectColumns($criteria);
				if (!isset($this->lastCommunauteCriteria) || !$this->lastCommunauteCriteria->equals($criteria)) {
					$this->collCommunautes = CommunautePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommunauteCriteria = $criteria;
		return $this->collCommunautes;
	}

	
	public function countCommunautes($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCommunautePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommunautePeer::UTILISATEUR_ID, $this->getId());

		return CommunautePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommunaute(Communaute $l)
	{
		$this->collCommunautes[] = $l;
		$l->setUtilisateur($this);
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

				$criteria->add(MembrePeer::UTILISATEUR_ID, $this->getId());

				MembrePeer::addSelectColumns($criteria);
				$this->collMembres = MembrePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MembrePeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(MembrePeer::UTILISATEUR_ID, $this->getId());

		return MembrePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMembre(Membre $l)
	{
		$this->collMembres[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getMembresJoinCommunaute($criteria = null, $con = null)
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

				$criteria->add(MembrePeer::UTILISATEUR_ID, $this->getId());

				$this->collMembres = MembrePeer::doSelectJoinCommunaute($criteria, $con);
			}
		} else {
									
			$criteria->add(MembrePeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastMembreCriteria) || !$this->lastMembreCriteria->equals($criteria)) {
				$this->collMembres = MembrePeer::doSelectJoinCommunaute($criteria, $con);
			}
		}
		$this->lastMembreCriteria = $criteria;

		return $this->collMembres;
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

				$criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->getId());

				CommentairealbumPeer::addSelectColumns($criteria);
				$this->collCommentairealbums = CommentairealbumPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->getId());

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

		$criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->getId());

		return CommentairealbumPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentairealbum(Commentairealbum $l)
	{
		$this->collCommentairealbums[] = $l;
		$l->setUtilisateur($this);
	}


	
	public function getCommentairealbumsJoinAlbum($criteria = null, $con = null)
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

				$criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->getId());

				$this->collCommentairealbums = CommentairealbumPeer::doSelectJoinAlbum($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentairealbumPeer::UTILISATEUR_ID, $this->getId());

			if (!isset($this->lastCommentairealbumCriteria) || !$this->lastCommentairealbumCriteria->equals($criteria)) {
				$this->collCommentairealbums = CommentairealbumPeer::doSelectJoinAlbum($criteria, $con);
			}
		}
		$this->lastCommentairealbumCriteria = $criteria;

		return $this->collCommentairealbums;
	}

	
	public function initNewss()
	{
		if ($this->collNewss === null) {
			$this->collNewss = array();
		}
	}

	
	public function getNewss($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseNewsPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNewss === null) {
			if ($this->isNew()) {
			   $this->collNewss = array();
			} else {

				$criteria->add(NewsPeer::UTILISATEUR_ID, $this->getId());

				NewsPeer::addSelectColumns($criteria);
				$this->collNewss = NewsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(NewsPeer::UTILISATEUR_ID, $this->getId());

				NewsPeer::addSelectColumns($criteria);
				if (!isset($this->lastNewsCriteria) || !$this->lastNewsCriteria->equals($criteria)) {
					$this->collNewss = NewsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNewsCriteria = $criteria;
		return $this->collNewss;
	}

	
	public function countNewss($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseNewsPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(NewsPeer::UTILISATEUR_ID, $this->getId());

		return NewsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addNews(News $l)
	{
		$this->collNewss[] = $l;
		$l->setUtilisateur($this);
	}

} 