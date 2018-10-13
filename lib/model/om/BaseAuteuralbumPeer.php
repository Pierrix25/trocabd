<?php


abstract class BaseAuteuralbumPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'auteuralbum';

	
	const CLASS_DEFAULT = 'lib.model.Auteuralbum';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'auteuralbum.ID';

	
	const ALBUM_ID = 'auteuralbum.ALBUM_ID';

	
	const AUTEUR_ID = 'auteuralbum.AUTEUR_ID';

	
	const DESSINATEUR = 'auteuralbum.DESSINATEUR';

	
	const SCENARISTE = 'auteuralbum.SCENARISTE';

	
	const COLORISTE = 'auteuralbum.COLORISTE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'AlbumId', 'AuteurId', 'Dessinateur', 'Scenariste', 'Coloriste', ),
		BasePeer::TYPE_COLNAME => array (AuteuralbumPeer::ID, AuteuralbumPeer::ALBUM_ID, AuteuralbumPeer::AUTEUR_ID, AuteuralbumPeer::DESSINATEUR, AuteuralbumPeer::SCENARISTE, AuteuralbumPeer::COLORISTE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'album_id', 'auteur_id', 'dessinateur', 'scenariste', 'coloriste', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'AlbumId' => 1, 'AuteurId' => 2, 'Dessinateur' => 3, 'Scenariste' => 4, 'Coloriste' => 5, ),
		BasePeer::TYPE_COLNAME => array (AuteuralbumPeer::ID => 0, AuteuralbumPeer::ALBUM_ID => 1, AuteuralbumPeer::AUTEUR_ID => 2, AuteuralbumPeer::DESSINATEUR => 3, AuteuralbumPeer::SCENARISTE => 4, AuteuralbumPeer::COLORISTE => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'album_id' => 1, 'auteur_id' => 2, 'dessinateur' => 3, 'scenariste' => 4, 'coloriste' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/AuteuralbumMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.AuteuralbumMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AuteuralbumPeer::getTableMap();
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
		return str_replace(AuteuralbumPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AuteuralbumPeer::ID);

		$criteria->addSelectColumn(AuteuralbumPeer::ALBUM_ID);

		$criteria->addSelectColumn(AuteuralbumPeer::AUTEUR_ID);

		$criteria->addSelectColumn(AuteuralbumPeer::DESSINATEUR);

		$criteria->addSelectColumn(AuteuralbumPeer::SCENARISTE);

		$criteria->addSelectColumn(AuteuralbumPeer::COLORISTE);

	}

	const COUNT = 'COUNT(auteuralbum.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT auteuralbum.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
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
		$objects = AuteuralbumPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AuteuralbumPeer::populateObjects(AuteuralbumPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AuteuralbumPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AuteuralbumPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinAlbum(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAuteur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAlbum(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AuteuralbumPeer::addSelectColumns($c);
		$startcol = (AuteuralbumPeer::NUM_COLUMNS - AuteuralbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlbumPeer::addSelectColumns($c);

		$c->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteuralbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getAlbum(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addAuteuralbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAuteuralbums();
				$obj2->addAuteuralbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAuteur(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AuteuralbumPeer::addSelectColumns($c);
		$startcol = (AuteuralbumPeer::NUM_COLUMNS - AuteuralbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AuteurPeer::addSelectColumns($c);

		$c->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteuralbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AuteurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getAuteur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addAuteuralbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAuteuralbums();
				$obj2->addAuteuralbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);

		$criteria->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
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

		AuteuralbumPeer::addSelectColumns($c);
		$startcol2 = (AuteuralbumPeer::NUM_COLUMNS - AuteuralbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AlbumPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AlbumPeer::NUM_COLUMNS;

		AuteurPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AuteurPeer::NUM_COLUMNS;

		$c->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);

		$c->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteuralbumPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = AlbumPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getAlbum(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAuteuralbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteuralbums();
				$obj2->addAuteuralbum($obj1);
			}


					
			$omClass = AuteurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getAuteur(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAuteuralbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initAuteuralbums();
				$obj3->addAuteuralbum($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptAlbum(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptAuteur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteuralbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);

		$rs = AuteuralbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptAlbum(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AuteuralbumPeer::addSelectColumns($c);
		$startcol2 = (AuteuralbumPeer::NUM_COLUMNS - AuteuralbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AuteurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AuteurPeer::NUM_COLUMNS;

		$c->addJoin(AuteuralbumPeer::AUTEUR_ID, AuteurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteuralbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AuteurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getAuteur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAuteuralbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteuralbums();
				$obj2->addAuteuralbum($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptAuteur(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AuteuralbumPeer::addSelectColumns($c);
		$startcol2 = (AuteuralbumPeer::NUM_COLUMNS - AuteuralbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AlbumPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AlbumPeer::NUM_COLUMNS;

		$c->addJoin(AuteuralbumPeer::ALBUM_ID, AlbumPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteuralbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AlbumPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getAlbum(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAuteuralbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteuralbums();
				$obj2->addAuteuralbum($obj1);
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
		return AuteuralbumPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AuteuralbumPeer::ID); 

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
			$comparison = $criteria->getComparison(AuteuralbumPeer::ID);
			$selectCriteria->add(AuteuralbumPeer::ID, $criteria->remove(AuteuralbumPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AuteuralbumPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AuteuralbumPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Auteuralbum) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AuteuralbumPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Auteuralbum $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AuteuralbumPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AuteuralbumPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AuteuralbumPeer::DATABASE_NAME, AuteuralbumPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AuteuralbumPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AuteuralbumPeer::DATABASE_NAME);

		$criteria->add(AuteuralbumPeer::ID, $pk);


		$v = AuteuralbumPeer::doSelect($criteria, $con);

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
			$criteria->add(AuteuralbumPeer::ID, $pks, Criteria::IN);
			$objs = AuteuralbumPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAuteuralbumPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/AuteuralbumMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.AuteuralbumMapBuilder');
}
