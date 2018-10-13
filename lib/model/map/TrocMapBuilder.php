<?php



class TrocMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TrocMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('troc');
		$tMap->setPhpName('Troc');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('UTILISATEURSOURCE_ID', 'UtilisateursourceId', 'int', CreoleTypes::INTEGER, 'utilisateursource', 'ID', false, null);

		$tMap->addForeignKey('UTILISATEURCIBLE_ID', 'UtilisateurcibleId', 'int', CreoleTypes::INTEGER, 'utilisateurcible', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('ETAT_ID', 'EtatId', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 