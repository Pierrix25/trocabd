<?php


abstract class BaseAlbumPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'album';

	
	const CLASS_DEFAULT = 'lib.model.Album';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'album.ID';

	
	const TALBUM = 'album.TALBUM';

	
	const COMMENTAIRE = 'album.COMMENTAIRE';

	
	const DATEPARU = 'album.DATEPARU';

	
	const DEPOTLEGAL = 'album.DEPOTLEGAL';

	
	const HISTOIRE = 'album.HISTOIRE';

	
	const INTEGRALE = 'album.INTEGRALE';

	
	const ISBN = 'album.ISBN';

	
	const ISSN = 'album.ISSN';

	
	const NBREPAGE = 'album.NBREPAGE';

	
	const EDITEUR_ID = 'album.EDITEUR_ID';

	
	const GENRE_ID = 'album.GENRE_ID';

	
	const SERIE_ID = 'album.SERIE_ID';

	
	const PHOTO1 = 'album.PHOTO1';

	
	const PHOTO2 = 'album.PHOTO2';

	
	const UTILISATEUR_ID = 'album.UTILISATEUR_ID';

	
	const NOTE = 'album.NOTE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Talbum', 'Commentaire', 'Dateparu', 'Depotlegal', 'Histoire', 'Integrale', 'Isbn', 'Issn', 'Nbrepage', 'EditeurId', 'GenreId', 'SerieId', 'Photo1', 'Photo2', 'UtilisateurId', 'Note', ),
		BasePeer::TYPE_COLNAME => array (AlbumPeer::ID, AlbumPeer::TALBUM, AlbumPeer::COMMENTAIRE, AlbumPeer::DATEPARU, AlbumPeer::DEPOTLEGAL, AlbumPeer::HISTOIRE, AlbumPeer::INTEGRALE, AlbumPeer::ISBN, AlbumPeer::ISSN, AlbumPeer::NBREPAGE, AlbumPeer::EDITEUR_ID, AlbumPeer::GENRE_ID, AlbumPeer::SERIE_ID, AlbumPeer::PHOTO1, AlbumPeer::PHOTO2, AlbumPeer::UTILISATEUR_ID, AlbumPeer::NOTE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'talbum', 'commentaire', 'dateparu', 'depotlegal', 'histoire', 'integrale', 'isbn', 'issn', 'nbrepage', 'editeur_id', 'genre_id', 'serie_id', 'photo1', 'photo2', 'utilisateur_id', 'note', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Talbum' => 1, 'Commentaire' => 2, 'Dateparu' => 3, 'Depotlegal' => 4, 'Histoire' => 5, 'Integrale' => 6, 'Isbn' => 7, 'Issn' => 8, 'Nbrepage' => 9, 'EditeurId' => 10, 'GenreId' => 11, 'SerieId' => 12, 'Photo1' => 13, 'Photo2' => 14, 'UtilisateurId' => 15, 'Note' => 16, ),
		BasePeer::TYPE_COLNAME => array (AlbumPeer::ID => 0, AlbumPeer::TALBUM => 1, AlbumPeer::COMMENTAIRE => 2, AlbumPeer::DATEPARU => 3, AlbumPeer::DEPOTLEGAL => 4, AlbumPeer::HISTOIRE => 5, AlbumPeer::INTEGRALE => 6, AlbumPeer::ISBN => 7, AlbumPeer::ISSN => 8, AlbumPeer::NBREPAGE => 9, AlbumPeer::EDITEUR_ID => 10, AlbumPeer::GENRE_ID => 11, AlbumPeer::SERIE_ID => 12, AlbumPeer::PHOTO1 => 13, AlbumPeer::PHOTO2 => 14, AlbumPeer::UTILISATEUR_ID => 15, AlbumPeer::NOTE => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'talbum' => 1, 'commentaire' => 2, 'dateparu' => 3, 'depotlegal' => 4, 'histoire' => 5, 'integrale' => 6, 'isbn' => 7, 'issn' => 8, 'nbrepage' => 9, 'editeur_id' => 10, 'genre_id' => 11, 'serie_id' => 12, 'photo1' => 13, 'photo2' => 14, 'utilisateur_id' => 15, 'note' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/AlbumMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.AlbumMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AlbumPeer::getTableMap();
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
		return str_replace(AlbumPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AlbumPeer::ID);

		$criteria->addSelectColumn(AlbumPeer::TALBUM);

		$criteria->addSelectColumn(AlbumPeer::COMMENTAIRE);

		$criteria->addSelectColumn(AlbumPeer::DATEPARU);

		$criteria->addSelectColumn(AlbumPeer::DEPOTLEGAL);

		$criteria->addSelectColumn(AlbumPeer::HISTOIRE);

		$criteria->addSelectColumn(AlbumPeer::INTEGRALE);

		$criteria->addSelectColumn(AlbumPeer::ISBN);

		$criteria->addSelectColumn(AlbumPeer::ISSN);

		$criteria->addSelectColumn(AlbumPeer::NBREPAGE);

		$criteria->addSelectColumn(AlbumPeer::EDITEUR_ID);

		$criteria->addSelectColumn(AlbumPeer::GENRE_ID);

		$criteria->addSelectColumn(AlbumPeer::SERIE_ID);

		$criteria->addSelectColumn(AlbumPeer::PHOTO1);

		$criteria->addSelectColumn(AlbumPeer::PHOTO2);

		$criteria->addSelectColumn(AlbumPeer::UTILISATEUR_ID);

		$criteria->addSelectColumn(AlbumPeer::NOTE);

	}

	const COUNT = 'COUNT(album.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT album.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AlbumPeer::doSelectRS($criteria, $con);
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
		$objects = AlbumPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AlbumPeer::populateObjects(AlbumPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AlbumPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AlbumPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinEditeur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinGenre(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinSerie(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinEditeur(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		EditeurPeer::addSelectColumns($c);

		$c->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = EditeurPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getEditeur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addAlbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinGenre(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		GenrePeer::addSelectColumns($c);

		$c->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = GenrePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getGenre(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addAlbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinSerie(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SeriePeer::addSelectColumns($c);

		$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SeriePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSerie(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addAlbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1); 			}
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

		AlbumPeer::addSelectColumns($c);
		$startcol = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UtilisateurPeer::addSelectColumns($c);

		$c->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

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
										$temp_obj2->addAlbum($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$criteria->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$criteria->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$criteria->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
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

		AlbumPeer::addSelectColumns($c);
		$startcol2 = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		EditeurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + EditeurPeer::NUM_COLUMNS;

		GenrePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + GenrePeer::NUM_COLUMNS;

		SeriePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SeriePeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$c->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$c->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = EditeurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getEditeur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAlbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1);
			}


					
			$omClass = GenrePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getGenre(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAlbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initAlbums();
				$obj3->addAlbum($obj1);
			}


					
			$omClass = SeriePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSerie(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addAlbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initAlbums();
				$obj4->addAlbum($obj1);
			}


					
			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getUtilisateur(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addAlbum($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initAlbums();
				$obj5->addAlbum($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptEditeur(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$criteria->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$criteria->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptGenre(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$criteria->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$criteria->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptSerie(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$criteria->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$criteria->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(AlbumPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AlbumPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$criteria->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$criteria->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$rs = AlbumPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptEditeur(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol2 = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		GenrePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + GenrePeer::NUM_COLUMNS;

		SeriePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SeriePeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$c->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = GenrePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getGenre(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1);
			}

			$omClass = SeriePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSerie(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initAlbums();
				$obj3->addAlbum($obj1);
			}

			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getUtilisateur(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initAlbums();
				$obj4->addAlbum($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptGenre(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol2 = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		EditeurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + EditeurPeer::NUM_COLUMNS;

		SeriePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SeriePeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);

		$c->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = EditeurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getEditeur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1);
			}

			$omClass = SeriePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSerie(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initAlbums();
				$obj3->addAlbum($obj1);
			}

			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getUtilisateur(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initAlbums();
				$obj4->addAlbum($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptSerie(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		AlbumPeer::addSelectColumns($c);
		$startcol2 = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		EditeurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + EditeurPeer::NUM_COLUMNS;

		GenrePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + GenrePeer::NUM_COLUMNS;

		UtilisateurPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + UtilisateurPeer::NUM_COLUMNS;

		$c->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$c->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$c->addJoin(AlbumPeer::UTILISATEUR_ID, UtilisateurPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = EditeurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getEditeur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1);
			}

			$omClass = GenrePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getGenre(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initAlbums();
				$obj3->addAlbum($obj1);
			}

			$omClass = UtilisateurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getUtilisateur(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initAlbums();
				$obj4->addAlbum($obj1);
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

		AlbumPeer::addSelectColumns($c);
		$startcol2 = (AlbumPeer::NUM_COLUMNS - AlbumPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		EditeurPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + EditeurPeer::NUM_COLUMNS;

		GenrePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + GenrePeer::NUM_COLUMNS;

		SeriePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + SeriePeer::NUM_COLUMNS;

		$c->addJoin(AlbumPeer::EDITEUR_ID, EditeurPeer::ID);

		$c->addJoin(AlbumPeer::GENRE_ID, GenrePeer::ID);

		$c->addJoin(AlbumPeer::SERIE_ID, SeriePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = AlbumPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = EditeurPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getEditeur(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initAlbums();
				$obj2->addAlbum($obj1);
			}

			$omClass = GenrePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getGenre(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initAlbums();
				$obj3->addAlbum($obj1);
			}

			$omClass = SeriePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getSerie(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addAlbum($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initAlbums();
				$obj4->addAlbum($obj1);
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
		return AlbumPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AlbumPeer::ID); 

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
			$comparison = $criteria->getComparison(AlbumPeer::ID);
			$selectCriteria->add(AlbumPeer::ID, $criteria->remove(AlbumPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AlbumPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AlbumPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Album) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AlbumPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Album $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AlbumPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AlbumPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AlbumPeer::DATABASE_NAME, AlbumPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AlbumPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AlbumPeer::DATABASE_NAME);

		$criteria->add(AlbumPeer::ID, $pk);


		$v = AlbumPeer::doSelect($criteria, $con);

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
			$criteria->add(AlbumPeer::ID, $pks, Criteria::IN);
			$objs = AlbumPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAlbumPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/AlbumMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.AlbumMapBuilder');
}
