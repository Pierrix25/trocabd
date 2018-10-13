<?php



class AuteuralbumMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AuteuralbumMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('auteuralbum');
		$tMap->setPhpName('Auteuralbum');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ALBUM_ID', 'AlbumId', 'int', CreoleTypes::INTEGER, 'album', 'ID', false, null);

		$tMap->addForeignKey('AUTEUR_ID', 'AuteurId', 'int', CreoleTypes::INTEGER, 'auteur', 'ID', false, null);

		$tMap->addColumn('DESSINATEUR', 'Dessinateur', 'int', CreoleTypes::TINYINT, true, null);

		$tMap->addColumn('SCENARISTE', 'Scenariste', 'int', CreoleTypes::TINYINT, true, null);

		$tMap->addColumn('COLORISTE', 'Coloriste', 'int', CreoleTypes::TINYINT, true, null);

	} 
} 