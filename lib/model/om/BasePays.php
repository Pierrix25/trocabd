<?php


abstract class BasePays extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $nom = 'null';

	
	protected $collAuteurs;

	
	protected $lastAuteurCriteria = null;

	
	protected $collEditeurs;

	
	protected $lastEditeurCriteria = null;

	
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PaysPeer::ID;
		}

	} 
	
	public function setNom($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nom !== $v || $v === 'null') {
			$this->nom = $v;
			$this->modifiedColumns[] = PaysPeer::NOM;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->nom = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pays object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PaysPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PaysPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PaysPeer::DATABASE_NAME);
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
					$pk = PaysPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PaysPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


			if (($retval = PaysPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PaysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PaysPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNom(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PaysPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PaysPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNom($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PaysPeer::DATABASE_NAME);

		if ($this->isColumnModified(PaysPeer::ID)) $criteria->add(PaysPeer::ID, $this->id);
		if ($this->isColumnModified(PaysPeer::NOM)) $criteria->add(PaysPeer::NOM, $this->nom);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PaysPeer::DATABASE_NAME);

		$criteria->add(PaysPeer::ID, $this->id);

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


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getAuteurs() as $relObj) {
				$copyObj->addAuteur($relObj->copy($deepCopy));
			}

			foreach($this->getEditeurs() as $relObj) {
				$copyObj->addEditeur($relObj->copy($deepCopy));
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
			self::$peer = new PaysPeer();
		}
		return self::$peer;
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

				$criteria->add(AuteurPeer::PAYS_ID, $this->getId());

				AuteurPeer::addSelectColumns($criteria);
				$this->collAuteurs = AuteurPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AuteurPeer::PAYS_ID, $this->getId());

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

		$criteria->add(AuteurPeer::PAYS_ID, $this->getId());

		return AuteurPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addAuteur(Auteur $l)
	{
		$this->collAuteurs[] = $l;
		$l->setPays($this);
	}


	
	public function getAuteursJoinUtilisateur($criteria = null, $con = null)
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

				$criteria->add(AuteurPeer::PAYS_ID, $this->getId());

				$this->collAuteurs = AuteurPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(AuteurPeer::PAYS_ID, $this->getId());

			if (!isset($this->lastAuteurCriteria) || !$this->lastAuteurCriteria->equals($criteria)) {
				$this->collAuteurs = AuteurPeer::doSelectJoinUtilisateur($criteria, $con);
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

				$criteria->add(EditeurPeer::PAYS_ID, $this->getId());

				EditeurPeer::addSelectColumns($criteria);
				$this->collEditeurs = EditeurPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(EditeurPeer::PAYS_ID, $this->getId());

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

		$criteria->add(EditeurPeer::PAYS_ID, $this->getId());

		return EditeurPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addEditeur(Editeur $l)
	{
		$this->collEditeurs[] = $l;
		$l->setPays($this);
	}


	
	public function getEditeursJoinUtilisateur($criteria = null, $con = null)
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

				$criteria->add(EditeurPeer::PAYS_ID, $this->getId());

				$this->collEditeurs = EditeurPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		} else {
									
			$criteria->add(EditeurPeer::PAYS_ID, $this->getId());

			if (!isset($this->lastEditeurCriteria) || !$this->lastEditeurCriteria->equals($criteria)) {
				$this->collEditeurs = EditeurPeer::doSelectJoinUtilisateur($criteria, $con);
			}
		}
		$this->lastEditeurCriteria = $criteria;

		return $this->collEditeurs;
	}

} 