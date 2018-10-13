<?php


abstract class BaseAuteurPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'auteur';

	
	const CLASS_DEFAULT = 'lib.model.Auteur';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'auteur.ID';

	
	const COLORISTE = 'auteur.COLORISTE';

	
	const COMMENTAIRE = 'auteur.COMMENTAIRE';

	
	const DATENAISSANCE = 'auteur.DATENAISSANCE';

	
	const DESSINATEUR = 'auteur.DESSINATEUR';

	
	const LIEUNAISSANCE = 'auteur.LIEUNAISSANCE';

	
	const NOM = 'auteur.NOM';

	
	const PAYS_ID = 'auteur.PAYS_ID';

	
	const PHOTO1 = 'auteur.PHOTO1';

	
	const PHOTO2 = 'auteur.PHOTO2';

	
	const PRENOM = 'auteur.PRENOM';

	
	const SCENARISTE = 'auteur.SCENARISTE';

	
	const SURNOM = 'auteur.SURNOM';

	
	const WEB1 = 'auteur.WEB1';

	
	const WEB2 = 'auteur.WEB2';

	
	const UTILISATEUR_ID = 'auteur.UTILISATEUR_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Coloriste', 'Commentaire', 'Datenaissance', 'Dessinateur', 'Lieunaissance', 'Nom', 'PaysId', 'Photo1', 'Photo2', 'Prenom', 'Scenariste', 'Surnom', 'Web1', 'Web2', 'UtilisateurId', ),
		BasePeer::TYPE_COLNAME => array (AuteurPeer::ID, AuteurPeer::COLORISTE, AuteurPeer::COMMENTAIRE, AuteurPeer::DATENAISSANCE, AuteurPeer::DESSINATEUR, AuteurPeer::LIEUNAISSANCE, AuteurPeer::NOM, AuteurPeer::PAYS_ID, AuteurPeer::PHOTO1, AuteurPeer::PHOTO2, AuteurPeer::PRENOM, AuteurPeer::SCENARISTE, AuteurPeer::SURNOM, AuteurPeer::WEB1, AuteurPeer::WEB2, AuteurPeer::UTILISATEUR_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'coloriste', 'commentaire', 'dateNaissance', 'dessinateur', 'lieuNaissance', 'nom', 'pays_id', 'photo1', 'photo2', 'prenom', 'scenariste', 'surnom', 'web1', 'web2', 'utilisateur_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Coloriste' => 1, 'Commentaire' => 2, 'Datenaissance' => 3, 'Dessinateur' => 4, 'Lieunaissance' => 5, 'Nom' => 6, 'PaysId' => 7, 'Photo1' => 8, 'Photo2' => 9, 'Prenom' => 10, 'Scenariste' => 11, 'Surnom' => 12, 'Web1' => 13, 'Web2' => 14, 'UtilisateurId' => 15, ),
		BasePeer::TYPE_COLNAME => array (AuteurPeer::ID => 0, AuteurPeer::COLORISTE => 1, AuteurPeer::COMMENTAIRE => 2, AuteurPeer::DATENAISSANCE => 3, AuteurPeer::DESSINATEUR => 4, AuteurPeer::LIEUNAISSANCE => 5, AuteurPeer::NOM => 6, AuteurPeer::PAYS_ID => 7, AuteurPeer::PHOTO1 => 8, AuteurPeer::PHOTO2 => 9, AuteurPeer::PRENOM => 10, AuteurPeer::SCENARISTE => 11, AuteurPeer::SURNOM => 12, AuteurPeer::WEB1 => 13, AuteurPeer::WEB2 => 14, AuteurPeer::UTILISATEUR_ID => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'coloriste' => 1, 'commentaire' => 2, 'dateNaissance' => 3, 'dessinateur' => 4, 'lieuNaissance' => 5, 'nom' => 6, 'pays_id' => 7, 'photo1' => 8, 'photo2' => 9, 'prenom' => 10, 'scenariste' => 11, 'surnom' => 12, 'web1' => 13, 'web2' => 14, 'utilisateur_id' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/AuteurMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.AuteurMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AuteurPeer::getTableMap();
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
		return str_replace(AuteurPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AuteurPeer::ID);

		$criteria->addSelectColumn(AuteurPeer::COLORISTE);

		$criteria->addSelectColumn(AuteurPeer::COMMENTAIRE);

		$criteria->addSelectColumn(AuteurPeer::DATENAISSANCE);

		$criteria->addSelectColumn(AuteurPeer::DESSINATEUR);

		$criteria->addSelectColumn(AuteurPeer::LIEUNAISSANCE);

		$criteria->addSelectColumn(AuteurPeer::NOM);

		$criteria->addSelectColumn(AuteurPeer::PAYS_ID);

		$criteria->addSelectColumn(AuteurPeer::PHOTO1);

		$criteria->addSelectColumn(AuteurPeer::PHOTO2);

		$criteria->addSelectColumn(AuteurPeer::PRENOM);

		$criteria->addSelectColumn(AuteurPeer::SCENARISTE);

		$criteria->addSelectColumn(AuteurPeer::SURNOM);

		$criteria->addSelectColumn(AuteurPeer::WEB1);

		$criteria->addSelectColumn(AuteurPeer::WEB2);

		$criteria->addSelectColumn(AuteurPeer::UTILISATEUR_ID);

	}

	const COUNT = 'COUNT(auteur.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT auteur.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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
		$objects = AuteurPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AuteurPeer::populateObjects(AuteurPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AuteurPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AuteurPeer::getOMClass();
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
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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

		AuteurPeer::addSelectColumns($c);
		$startcol = (AuteurPeer::NUM_COLUMNS - AuteurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PaysPeer::addSelectColumns($c);

		$c->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteurPeer::getOMClass();

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
										$temp_obj2->addAuteur($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAuteurs();
				$obj2->addAuteur($obj1); 			}
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

		AuteurPeer::addSelectColumns($c);
		$startcol = (AuteurPeer::NUM_COLUMNS - AuteurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UtilisateurPeer::addSelectColumns($c);

		$c->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteurPeer::getOMClass();

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
										$temp_obj2->addAuteur($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAuteurs();
				$obj2->addAuteur($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);

		$criteria->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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

		AuteurPeer::addSelectColumns($c);
		$startcol2 = (AuteurPeer::NUM_COLUMNS - AuteurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PaysPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PaysPeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);

		$c->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteurPeer::getOMClass();


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
					$temp_obj2->addAuteur($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteurs();
				$obj2->addAuteur($obj1);
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
					$temp_obj3->addAuteur($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initAuteurs();
				$obj3->addAuteur($obj1);
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
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(AuteurPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AuteurPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);

		$rs = AuteurPeer::doSelectRS($criteria, $con);
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

		AuteurPeer::addSelectColumns($c);
		$startcol2 = (AuteurPeer::NUM_COLUMNS - AuteurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UtilisateurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AuteurPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteurPeer::getOMClass();

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
					$temp_obj2->addAuteur($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteurs();
				$obj2->addAuteur($obj1);
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

		AuteurPeer::addSelectColumns($c);
		$startcol2 = (AuteurPeer::NUM_COLUMNS - AuteurPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PaysPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PaysPeer::NUM_COLUMNS;

		$c->addJoin(AuteurPeer::PAYS_ID, PaysPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AuteurPeer::getOMClass();

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
					$temp_obj2->addAuteur($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAuteurs();
				$obj2->addAuteur($obj1);
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
		return AuteurPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AuteurPeer::ID); 

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
			$comparison = $criteria->getComparison(AuteurPeer::ID);
			$selectCriteria->add(AuteurPeer::ID, $criteria->remove(AuteurPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AuteurPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AuteurPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Auteur) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AuteurPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Auteur $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AuteurPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AuteurPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AuteurPeer::DATABASE_NAME, AuteurPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AuteurPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AuteurPeer::DATABASE_NAME);

		$criteria->add(AuteurPeer::ID, $pk);


		$v = AuteurPeer::doSelect($criteria, $con);

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
			$criteria->add(AuteurPeer::ID, $pks, Criteria::IN);
			$objs = AuteurPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAuteurPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/AuteurMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.AuteurMapBuilder');
}
