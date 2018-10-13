<?php


abstract class BaseUtilisateursourcePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'utilisateursource';

	
	const CLASS_DEFAULT = 'lib.model.Utilisateursource';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'utilisateursource.ID';

	
	const UTILISATEUR_ID = 'utilisateursource.UTILISATEUR_ID';

	
	const TROC_ID = 'utilisateursource.TROC_ID';

	
	const NOTE = 'utilisateursource.NOTE';

	
	const CREATED_AT = 'utilisateursource.CREATED_AT';

	
	const UPDATED_AT = 'utilisateursource.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UtilisateurId', 'TrocId', 'Note', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (UtilisateursourcePeer::ID, UtilisateursourcePeer::UTILISATEUR_ID, UtilisateursourcePeer::TROC_ID, UtilisateursourcePeer::NOTE, UtilisateursourcePeer::CREATED_AT, UtilisateursourcePeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'utilisateur_id', 'troc_id', 'note', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UtilisateurId' => 1, 'TrocId' => 2, 'Note' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ),
		BasePeer::TYPE_COLNAME => array (UtilisateursourcePeer::ID => 0, UtilisateursourcePeer::UTILISATEUR_ID => 1, UtilisateursourcePeer::TROC_ID => 2, UtilisateursourcePeer::NOTE => 3, UtilisateursourcePeer::CREATED_AT => 4, UtilisateursourcePeer::UPDATED_AT => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'utilisateur_id' => 1, 'troc_id' => 2, 'note' => 3, 'created_at' => 4, 'updated_at' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/UtilisateursourceMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.UtilisateursourceMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UtilisateursourcePeer::getTableMap();
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
		return str_replace(UtilisateursourcePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UtilisateursourcePeer::ID);

		$criteria->addSelectColumn(UtilisateursourcePeer::UTILISATEUR_ID);

		$criteria->addSelectColumn(UtilisateursourcePeer::TROC_ID);

		$criteria->addSelectColumn(UtilisateursourcePeer::NOTE);

		$criteria->addSelectColumn(UtilisateursourcePeer::CREATED_AT);

		$criteria->addSelectColumn(UtilisateursourcePeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(utilisateursource.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT utilisateursource.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
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
		$objects = UtilisateursourcePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UtilisateursourcePeer::populateObjects(UtilisateursourcePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UtilisateursourcePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = UtilisateursourcePeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinUtilisateur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTroc(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinUtilisateur(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		UtilisateursourcePeer::addSelectColumns($c);
		$startcol = (UtilisateursourcePeer::NUM_COLUMNS - UtilisateursourcePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UtilisateurPeer::addSelectColumns($c);

		$c->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = UtilisateursourcePeer::getOMClass();

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
										$temp_obj2->addUtilisateursource($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initUtilisateursources();
				$obj2->addUtilisateursource($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTroc(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		UtilisateursourcePeer::addSelectColumns($c);
		$startcol = (UtilisateursourcePeer::NUM_COLUMNS - UtilisateursourcePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TrocPeer::addSelectColumns($c);

		$c->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = UtilisateursourcePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TrocPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTroc(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addUtilisateursource($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initUtilisateursources();
				$obj2->addUtilisateursource($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$criteria->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
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

		UtilisateursourcePeer::addSelectColumns($c);
		$startcol2 = (UtilisateursourcePeer::NUM_COLUMNS - UtilisateursourcePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UtilisateurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UtilisateurPeer::NUM_COLUMNS;

		TrocPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TrocPeer::NUM_COLUMNS;

		$c->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$c->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = UtilisateursourcePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getUtilisateur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addUtilisateursource($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initUtilisateursources();
				$obj2->addUtilisateursource($obj1);
			}


					
			$omClass = TrocPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTroc(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addUtilisateursource($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initUtilisateursources();
				$obj3->addUtilisateursource($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptUtilisateur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTroc(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UtilisateursourcePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = UtilisateursourcePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptUtilisateur(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		UtilisateursourcePeer::addSelectColumns($c);
		$startcol2 = (UtilisateursourcePeer::NUM_COLUMNS - UtilisateursourcePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TrocPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TrocPeer::NUM_COLUMNS;

		$c->addJoin(UtilisateursourcePeer::TROC_ID, TrocPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = UtilisateursourcePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TrocPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTroc(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addUtilisateursource($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initUtilisateursources();
				$obj2->addUtilisateursource($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTroc(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		UtilisateursourcePeer::addSelectColumns($c);
		$startcol2 = (UtilisateursourcePeer::NUM_COLUMNS - UtilisateursourcePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UtilisateurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(UtilisateursourcePeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = UtilisateursourcePeer::getOMClass();

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
					$temp_obj2->addUtilisateursource($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initUtilisateursources();
				$obj2->addUtilisateursource($obj1);
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
		return UtilisateursourcePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(UtilisateursourcePeer::ID); 

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
			$comparison = $criteria->getComparison(UtilisateursourcePeer::ID);
			$selectCriteria->add(UtilisateursourcePeer::ID, $criteria->remove(UtilisateursourcePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(UtilisateursourcePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(UtilisateursourcePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Utilisateursource) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UtilisateursourcePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Utilisateursource $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UtilisateursourcePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UtilisateursourcePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(UtilisateursourcePeer::DATABASE_NAME, UtilisateursourcePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = UtilisateursourcePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(UtilisateursourcePeer::DATABASE_NAME);

		$criteria->add(UtilisateursourcePeer::ID, $pk);


		$v = UtilisateursourcePeer::doSelect($criteria, $con);

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
			$criteria->add(UtilisateursourcePeer::ID, $pks, Criteria::IN);
			$objs = UtilisateursourcePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseUtilisateursourcePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/UtilisateursourceMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.UtilisateursourceMapBuilder');
}
