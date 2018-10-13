<?php



class OffresourceMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.OffresourceMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('offresource');
		$tMap->setPhpName('Offresource');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ALBUM_ID', 'AlbumId', 'int', CreoleTypes::INTEGER, 'album', 'ID', false, null);

		$tMap->addForeignKey('UTILISATEURSOURCE_ID', 'UtilisateursourceId', 'int', CreoleTypes::INTEGER, 'utilisateursource', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 