<?php



class SerieMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SerieMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('serie');
		$tMap->setPhpName('Serie');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('HISTOIRE', 'Histoire', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('COMMENTAIRE', 'Commentaire', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PHOTO1', 'Photo1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PHOTO2', 'Photo2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SITEWEB1', 'Siteweb1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SITEWEB2', 'Siteweb2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('UTILISATEUR_ID', 'UtilisateurId', 'int', CreoleTypes::INTEGER, 'utilisateur', 'ID', false, null);

	} 
} 