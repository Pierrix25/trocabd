<?php



class AlbumMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AlbumMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('album');
		$tMap->setPhpName('Album');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TALBUM', 'Talbum', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('COMMENTAIRE', 'Commentaire', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DATEPARU', 'Dateparu', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DEPOTLEGAL', 'Depotlegal', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('HISTOIRE', 'Histoire', 'string', CreoleTypes::VARCHAR, false, 1592);

		$tMap->addColumn('INTEGRALE', 'Integrale', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ISBN', 'Isbn', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ISSN', 'Issn', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NBREPAGE', 'Nbrepage', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addForeignKey('EDITEUR_ID', 'EditeurId', 'int', CreoleTypes::INTEGER, 'editeur', 'ID', false, null);

		$tMap->addForeignKey('GENRE_ID', 'GenreId', 'int', CreoleTypes::INTEGER, 'genre', 'ID', false, null);

		$tMap->addForeignKey('SERIE_ID', 'SerieId', 'int', CreoleTypes::INTEGER, 'serie', 'ID', false, null);

		$tMap->addColumn('PHOTO1', 'Photo1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PHOTO2', 'Photo2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('UTILISATEUR_ID', 'UtilisateurId', 'int', CreoleTypes::INTEGER, 'utilisateur', 'ID', false, null);

		$tMap->addColumn('NOTE', 'Note', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 