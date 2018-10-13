<?php



class PaysMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PaysMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pays');
		$tMap->setPhpName('Pays');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, true, 255);

	} 
} 