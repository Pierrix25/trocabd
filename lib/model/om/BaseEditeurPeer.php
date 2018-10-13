<?php


abstract class BaseEditeurPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'editeur';

	
	const CLASS_DEFAULT = 'lib.model.Editeur';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'editeur.ID';

	
	const NOM = 'editeur.NOM';

	
	const ADRESSE1 = 'editeur.ADRESSE1';

	
	const ADRESSE2 = 'editeur.ADRESSE2';

	
	const CP = 'editeur.CP';

	
	const PAYS_ID = 'editeur.PAYS_ID';

	
	const PHOTO1 = 'editeur.PHOTO1';

	
	const PHOTO2 = 'editeur.PHOTO2';

	
	const SITE = 'editeur.SITE';

	
	const TEL = 'editeur.TEL';

	
	const VILLE = 'editeur.VILLE';

	
	const UTILISATEUR_ID = 'editeur.UTILISATEUR_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Nom', 'Adresse1', 'Adresse2', 'Cp', 'PaysId', 'Photo1', 'Photo2', 'Site', 'Tel', 'Ville', 'UtilisateurId', ),
		BasePeer::TYPE_COLNAME => array (EditeurPeer::ID, EditeurPeer::NOM, EditeurPeer::ADRESSE1, EditeurPeer::ADRESSE2, EditeurPeer::CP, EditeurPeer::PAYS_ID, EditeurPeer::PHOTO1, EditeurPeer::PHOTO2, EditeurPeer::SITE, EditeurPeer::TEL, EditeurPeer::VILLE, EditeurPeer::UTILISATEUR_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'nom', 'adresse1', 'adresse2', 'cp', 'pays_id', 'photo1', 'photo2', 'site', 'tel', 'ville', 'utilisateur_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Nom' => 1, 'Adresse1' => 2, 'Adresse2' => 3, 'Cp' => 4, 'PaysId' => 5, 'Photo1' => 6, 'Photo2' => 7, 'Site' => 8, 'Tel' => 9, 'Ville' => 10, 'UtilisateurId' => 11, ),
		BasePeer::TYPE_COLNAME => array (EditeurPeer::ID => 0, EditeurPeer::NOM => 1, EditeurPeer::ADRESSE1 => 2, EditeurPeer::ADRESSE2 => 3, EditeurPeer::CP => 4, EditeurPeer::PAYS_ID => 5, EditeurPeer::PHOTO1 => 6, EditeurPeer::PHOTO2 => 7, EditeurPeer::SITE => 8, EditeurPeer::TEL => 9, EditeurPeer::VILLE => 10, EditeurPeer::UTILISATEUR_ID => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'nom' => 1, 'adresse1' => 2, 'adresse2' => 3, 'cp' => 4, 'pays_id' => 5, 'photo1' => 6, 'photo2' => 7, 'site' => 8, 'tel' => 9, 'ville' => 10, 'utilisateur_id' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/EditeurMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.EditeurMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = EditeurPeer::getTableMap();
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
		return str_replace(EditeurPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(EditeurPeer::ID);

		$criteria->addSelectColumn(EditeurPeer::NOM);

		$criteria->addSelectColumn(EditeurPeer::ADRESSE1);

		$criteria->addSelectColumn(EditeurPeer::ADRESSE2);

		$criteria->addSelectColumn(EditeurPeer::CP);

		$criteria->addSelectColumn(EditeurPeer::PAYS_ID);

		$criteria->addSelectColumn(EditeurPeer::PHOTO1);

		$criteria->addSelectColumn(EditeurPeer::PHOTO2);

		$criteria->addSelectColumn(EditeurPeer::SITE);

		$criteria->addSelectColumn(EditeurPeer::TEL);

		$criteria->addSelectColumn(EditeurPeer::VILLE);

		$criteria->addSelectColumn(EditeurPeer::UTILISATEUR_ID);

	}

	const COUNT = 'COUNT(editeur.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT editeur.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = EditeurPeer::doSelectRS($criteria, $con);
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
		$objects = EditeurPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return EditeurPeer::populateObjects(EditeurPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			EditeurPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = EditeurPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinPays(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);

		$rs = EditeurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUtilisateur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = EditeurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinPays(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		EditeurPeer::addSelectColumns($c);
		$startcol = (EditeurPeer::NUM_COLUMNS - EditeurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PaysPeer::addSelectColumns($c);

		$c->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = EditeurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PaysPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getPays(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addEditeur($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initEditeurs();
				$obj2->addEditeur($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUtilisateur(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		EditeurPeer::addSelectColumns($c);
		$startcol = (EditeurPeer::NUM_COLUMNS - EditeurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UtilisateurPeer::addSelectColumns($c);

		$c->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = EditeurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UtilisateurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUtilisateur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addEditeur($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initEditeurs();
				$obj2->addEditeur($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);

		$criteria->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = EditeurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		EditeurPeer::addSelectColumns($c);
		$startcol2 = (EditeurPeer::NUM_COLUMNS - EditeurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PaysPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PaysPeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);

		$c->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = EditeurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = PaysPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getPays(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addEditeur($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initEditeurs();
				$obj2->addEditeur($obj1);
			}


					
			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUtilisateur(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addEditeur($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initEditeurs();
				$obj3->addEditeur($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptPays(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = EditeurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUtilisateur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(EditeurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(EditeurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);

		$rs = EditeurPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptPays(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		EditeurPeer::addSelectColumns($c);
		$startcol2 = (EditeurPeer::NUM_COLUMNS - EditeurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UtilisateurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(EditeurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = EditeurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getUtilisateur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addEditeur($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initEditeurs();
				$obj2->addEditeur($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUtilisateur(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		EditeurPeer::addSelectColumns($c);
		$startcol2 = (EditeurPeer::NUM_COLUMNS - EditeurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PaysPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PaysPeer::NUM_COLUMNS;

		$c->addJoin(EditeurPeer::PAYS_ID, PaysPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = EditeurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PaysPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getPays(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addEditeur($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initEditeurs();
				$obj2->addEditeur($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return EditeurPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(EditeurPeer::ID); 

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
			$comparison = $criteria->getComparison(EditeurPeer::ID);
			$selectCriteria->add(EditeurPeer::ID, $criteria->remove(EditeurPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(EditeurPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(EditeurPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Editeur) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(EditeurPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Editeur $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(EditeurPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(EditeurPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(EditeurPeer::DATABASE_NAME, EditeurPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = EditeurPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(EditeurPeer::DATABASE_NAME);

		$criteria->add(EditeurPeer::ID, $pk);


		$v = EditeurPeer::doSelect($criteria, $con);

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
			$criteria->add(EditeurPeer::ID, $pks, Criteria::IN);
			$objs = EditeurPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseEditeurPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/EditeurMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.EditeurMapBuilder');
}
