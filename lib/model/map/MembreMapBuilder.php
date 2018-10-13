<?php



class MembreMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MembreMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('membre');
		$tMap->setPhpName('Membre');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('UTILISATEUR_ID', 'UtilisateurId', 'int', CreoleTypes::INTEGER, 'utilisateur', 'ID', false, null);

		$tMap->addForeignKey('COMMUNAUTE_ID', 'CommunauteId', 'int', CreoleTypes::INTEGER, 'communaute', 'ID', false, null);

		$tMap->addColumn('MEMBRE', 'Membre', 'int', CreoleTypes::TINYINT, true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 