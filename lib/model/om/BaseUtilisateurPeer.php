<?php


abstract class BaseUtilisateurPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'utilisateur';

	
	const CLASS_DEFAULT = 'lib.model.Utilisateur';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'utilisateur.ID';

	
	const NOM = 'utilisateur.NOM';

	
	const PRENOM = 'utilisateur.PRENOM';

	
	const LOGIN = 'utilisateur.LOGIN';

	
	const MDP = 'utilisateur.MDP';

	
	const RUE2 = 'utilisateur.RUE2';

	
	const RUE3 = 'utilisateur.RUE3';

	
	const RUE4 = 'utilisateur.RUE4';

	
	const CP = 'utilisateur.CP';

	
	const VILLE = 'utilisateur.VILLE';

	
	const LON = 'utilisateur.LON';

	
	const LAT = 'utilisateur.LAT';

	
	const EMAIL = 'utilisateur.EMAIL';

	
	const QUESTION = 'utilisateur.QUESTION';

	
	const REPONSE = 'utilisateur.REPONSE';

	
	const NBVISITEUR = 'utilisateur.NBVISITEUR';

	
	const NBUTILISATEUR = 'utilisateur.NBUTILISATEUR';

	
	const DERNIERECONNEXION = 'utilisateur.DERNIERECONNEXION';

	
	const USERID = 'utilisateur.USERID';

	
	const CREATED_AT = 'utilisateur.CREATED_AT';

	
	const UPDATED_AT = 'utilisateur.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Nom', 'Prenom', 'Login', 'Mdp', 'Rue2', 'Rue3', 'Rue4', 'Cp', 'Ville', 'Lon', 'Lat', 'Email', 'Question', 'Reponse', 'Nbvisiteur', 'Nbutilisateur', 'Derniereconnexion', 'Userid', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (UtilisateurPeer::ID, UtilisateurPeer::NOM, UtilisateurPeer::PRENOM, UtilisateurPeer::LOGIN, UtilisateurPeer::MDP, UtilisateurPeer::RUE2, UtilisateurPeer::RUE3, UtilisateurPeer::RUE4, UtilisateurPeer::CP, UtilisateurPeer::VILLE, UtilisateurPeer::LON, UtilisateurPeer::LAT, UtilisateurPeer::EMAIL, UtilisateurPeer::QUESTION, UtilisateurPeer::REPONSE, UtilisateurPeer::NBVISITEUR, UtilisateurPeer::NBUTILISATEUR, UtilisateurPeer::DERNIERECONNEXION, UtilisateurPeer::USERID, UtilisateurPeer::CREATED_AT, UtilisateurPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'nom', 'prenom', 'login', 'mdp', 'rue2', 'rue3', 'rue4', 'cp', 'ville', 'lon', 'lat', 'email', 'question', 'reponse', 'nbVisiteur', 'nbUtilisateur', 'derniereConnexion', 'userid', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Nom' => 1, 'Prenom' => 2, 'Login' => 3, 'Mdp' => 4, 'Rue2' => 5, 'Rue3' => 6, 'Rue4' => 7, 'Cp' => 8, 'Ville' => 9, 'Lon' => 10, 'Lat' => 11, 'Email' => 12, 'Question' => 13, 'Reponse' => 14, 'Nbvisiteur' => 15, 'Nbutilisateur' => 16, 'Derniereconnexion' => 17, 'Userid' => 18, 'CreatedAt' => 19, 'UpdatedAt' => 20, ),
		BasePeer::TYPE_COLNAME => array (UtilisateurPeer::ID => 0, UtilisateurPeer::NOM => 1, UtilisateurPeer::PRENOM => 2, UtilisateurPeer::LOGIN => 3, UtilisateurPeer::MDP => 4, UtilisateurPeer::RUE2 => 5, UtilisateurPeer::RUE3 => 6, UtilisateurPeer::RUE4 => 7, UtilisateurPeer::CP => 8, UtilisateurPeer::VILLE => 9, UtilisateurPeer::LON => 10, UtilisateurPeer::LAT => 11, UtilisateurPeer::EMAIL => 12, UtilisateurPeer::QUESTION => 13, UtilisateurPeer::REPONSE => 14, UtilisateurPeer::NBVISITEUR => 15, UtilisateurPeer::NBUTILISATEUR => 16, UtilisateurPeer::DERNIERECONNEXION => 17, UtilisateurPeer::USERID => 18, UtilisateurPeer::CREATED_AT => 19, UtilisateurPeer::UPDATED_AT => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'nom' => 1, 'prenom' => 2, 'login' => 3, 'mdp' => 4, 'rue2' => 5, 'rue3' => 6, 'rue4' => 7, 'cp' => 8, 'ville' => 9, 'lon' => 10, 'lat' => 11, 'email' => 12, 'question' => 13, 'reponse' => 14, 'nbVisiteur' => 15, 'nbUtilisateur' => 16, 'derniereConnexion' => 17, 'userid' => 18, 'created_at' => 19, 'updated_at' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/UtilisateurMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.UtilisateurMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UtilisateurPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(UtilisateurPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UtilisateurPeer::ID);

		$criteria->addSelectColumn(UtilisateurPeer::NOM);

		$criteria->addSelectColumn(UtilisateurPeer::PRENOM);

		$criteria->addSelectColumn(UtilisateurPeer::LOGIN);

		$criteria->addSelectColumn(UtilisateurPeer::MDP);

		$criteria->addSelectColumn(UtilisateurPeer::RUE2);

		$criteria->addSelectColumn(UtilisateurPeer::RUE3);

		$criteria->addSelectColumn(UtilisateurPeer::RUE4);

		$criteria->addSelectColumn(UtilisateurPeer::CP);

		$criteria->addSelectColumn(UtilisateurPeer::VILLE);

		$criteria->addSelectColumn(UtilisateurPeer::LON);

		$criteria->addSelectColumn(UtilisateurPeer::LAT);

		$criteria->addSelectColumn(UtilisateurPeer::EMAIL);

		$criteria->addSelectColumn(UtilisateurPeer::QUESTION);

		$criteria->addSelectColumn(UtilisateurPeer::REPONSE);

		$criteria->addSelectColumn(UtilisateurPeer::NBVISITEUR);

		$criteria->addSelectColumn(UtilisateurPeer::NBUTILISATEUR);

		$criteria->addSelectColumn(UtilisateurPeer::DERNIERECONNEXION);

		$criteria->addSelectColumn(UtilisateurPeer::USERID);

		$criteria->addSelectColumn(UtilisateurPeer::CREATED_AT);

		$criteria->addSelectColumn(UtilisateurPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(utilisateur.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT utilisateur.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UtilisateurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UtilisateurPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UtilisateurPeer::populateObjects(UtilisateurPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UtilisateurPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = UtilisateurPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return UtilisateurPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(UtilisateurPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(UtilisateurPeer::ID);
			$selectCriteria->add(UtilisateurPeer::ID, $criteria->remove(UtilisateurPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(UtilisateurPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(UtilisateurPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Utilisateur) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UtilisateurPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Utilisateur $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UtilisateurPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UtilisateurPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(UtilisateurPeer::DATABASE_NAME, UtilisateurPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = UtilisateurPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(UtilisateurPeer::DATABASE_NAME);

		$criteria->add(UtilisateurPeer::ID, $pk);


		$v = UtilisateurPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(UtilisateurPeer::ID, $pks, Criteria::IN);
			$objs = UtilisateurPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseUtilisateurPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/UtilisateurMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.UtilisateurMapBuilder');
}
