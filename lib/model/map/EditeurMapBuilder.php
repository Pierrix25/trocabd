<?php



class EditeurMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.EditeurMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('editeur');
		$tMap->setPhpName('Editeur');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ADRESSE1', 'Adresse1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ADRESSE2', 'Adresse2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('CP', 'Cp', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('PAYS_ID', 'PaysId', 'int', CreoleTypes::INTEGER, 'pays', 'ID', false, null);

		$tMap->addColumn('PHOTO1', 'Photo1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PHOTO2', 'Photo2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SITE', 'Site', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('TEL', 'Tel', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('VILLE', 'Ville', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('UTILISATEUR_ID', 'UtilisateurId', 'int', CreoleTypes::INTEGER, 'utilisateur', 'ID', false, null);

	} 
} 