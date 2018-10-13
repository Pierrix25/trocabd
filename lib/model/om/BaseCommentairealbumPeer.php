<?php


abstract class BaseCommentairealbumPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'commentairealbum';

	
	const CLASS_DEFAULT = 'lib.model.Commentairealbum';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'commentairealbum.ID';

	
	const COMMENTAIRE = 'commentairealbum.COMMENTAIRE';

	
	const NOTE = 'commentairealbum.NOTE';

	
	const ALBUM_ID = 'commentairealbum.ALBUM_ID';

	
	const UTILISATEUR_ID = 'commentairealbum.UTILISATEUR_ID';

	
	const CREATED_AT = 'commentairealbum.CREATED_AT';

	
	const UPDATED_AT = 'commentairealbum.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Commentaire', 'Note', 'AlbumId', 'UtilisateurId', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (CommentairealbumPeer::ID, CommentairealbumPeer::COMMENTAIRE, CommentairealbumPeer::NOTE, CommentairealbumPeer::ALBUM_ID, CommentairealbumPeer::UTILISATEUR_ID, CommentairealbumPeer::CREATED_AT, CommentairealbumPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'commentaire', 'note', 'album_id', 'utilisateur_id', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Commentaire' => 1, 'Note' => 2, 'AlbumId' => 3, 'UtilisateurId' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
		BasePeer::TYPE_COLNAME => array (CommentairealbumPeer::ID => 0, CommentairealbumPeer::COMMENTAIRE => 1, CommentairealbumPeer::NOTE => 2, CommentairealbumPeer::ALBUM_ID => 3, CommentairealbumPeer::UTILISATEUR_ID => 4, CommentairealbumPeer::CREATED_AT => 5, CommentairealbumPeer::UPDATED_AT => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'commentaire' => 1, 'note' => 2, 'album_id' => 3, 'utilisateur_id' => 4, 'created_at' => 5, 'updated_at' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CommentairealbumMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CommentairealbumMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CommentairealbumPeer::getTableMap();
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
		return str_replace(CommentairealbumPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CommentairealbumPeer::ID);

		$criteria->addSelectColumn(CommentairealbumPeer::COMMENTAIRE);

		$criteria->addSelectColumn(CommentairealbumPeer::NOTE);

		$criteria->addSelectColumn(CommentairealbumPeer::ALBUM_ID);

		$criteria->addSelectColumn(CommentairealbumPeer::UTILISATEUR_ID);

		$criteria->addSelectColumn(CommentairealbumPeer::CREATED_AT);

		$criteria->addSelectColumn(CommentairealbumPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(commentairealbum.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT commentairealbum.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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
		$objects = CommentairealbumPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CommentairealbumPeer::populateObjects(CommentairealbumPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CommentairealbumPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CommentairealbumPeer::getOMClass();
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
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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

		CommentairealbumPeer::addSelectColumns($c);
		$startcol = (CommentairealbumPeer::NUM_COLUMNS - CommentairealbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AlbumPeer::addSelectColumns($c);

		$c->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentairealbumPeer::getOMClass();

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
										$temp_obj2->addCommentairealbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentairealbums();
				$obj2->addCommentairealbum($obj1); 			}
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

		CommentairealbumPeer::addSelectColumns($c);
		$startcol = (CommentairealbumPeer::NUM_COLUMNS - CommentairealbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UtilisateurPeer::addSelectColumns($c);

		$c->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentairealbumPeer::getOMClass();

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
										$temp_obj2->addCommentairealbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentairealbums();
				$obj2->addCommentairealbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);

		$criteria->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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

		CommentairealbumPeer::addSelectColumns($c);
		$startcol2 = (CommentairealbumPeer::NUM_COLUMNS - CommentairealbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AlbumPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AlbumPeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);

		$c->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentairealbumPeer::getOMClass();


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
					$temp_obj2->addCommentairealbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentairealbums();
				$obj2->addCommentairealbum($obj1);
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
					$temp_obj3->addCommentairealbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initCommentairealbums();
				$obj3->addCommentairealbum($obj1);
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
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentairealbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);

		$rs = CommentairealbumPeer::doSelectRS($criteria, $con);
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

		CommentairealbumPeer::addSelectColumns($c);
		$startcol2 = (CommentairealbumPeer::NUM_COLUMNS - CommentairealbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UtilisateurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(CommentairealbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentairealbumPeer::getOMClass();

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
					$temp_obj2->addCommentairealbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentairealbums();
				$obj2->addCommentairealbum($obj1);
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

		CommentairealbumPeer::addSelectColumns($c);
		$startcol2 = (CommentairealbumPeer::NUM_COLUMNS - CommentairealbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AlbumPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AlbumPeer::NUM_COLUMNS;

		$c->addJoin(CommentairealbumPeer::ALBUM_ID, AlbumPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentairealbumPeer::getOMClass();

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
					$temp_obj2->addCommentairealbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentairealbums();
				$obj2->addCommentairealbum($obj1);
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
		return CommentairealbumPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CommentairealbumPeer::ID); 

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
			$comparison = $criteria->getComparison(CommentairealbumPeer::ID);
			$selectCriteria->add(CommentairealbumPeer::ID, $criteria->remove(CommentairealbumPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CommentairealbumPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CommentairealbumPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Commentairealbum) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CommentairealbumPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Commentairealbum $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CommentairealbumPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CommentairealbumPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CommentairealbumPeer::DATABASE_NAME, CommentairealbumPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CommentairealbumPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CommentairealbumPeer::DATABASE_NAME);

		$criteria->add(CommentairealbumPeer::ID, $pk);


		$v = CommentairealbumPeer::doSelect($criteria, $con);

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
			$criteria->add(CommentairealbumPeer::ID, $pks, Criteria::IN);
			$objs = CommentairealbumPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCommentairealbumPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CommentairealbumMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CommentairealbumMapBuilder');
}
