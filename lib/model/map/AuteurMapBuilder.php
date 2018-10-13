<?php



class AuteurMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AuteurMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('auteur');
		$tMap->setPhpName('Auteur');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COLORISTE', 'Coloriste', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('COMMENTAIRE', 'Commentaire', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('DATENAISSANCE', 'Datenaissance', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DESSINATEUR', 'Dessinateur', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('LIEUNAISSANCE', 'Lieunaissance', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('PAYS_ID', 'PaysId', 'int', CreoleTypes::INTEGER, 'pays', 'ID', false, null);

		$tMap->addColumn('PHOTO1', 'Photo1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PHOTO2', 'Photo2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('PRENOM', 'Prenom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('SCENARISTE', 'Scenariste', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('SURNOM', 'Surnom', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('WEB1', 'Web1', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('WEB2', 'Web2', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addForeignKey('UTILISATEUR_ID', 'UtilisateurId', 'int', CreoleTypes::INTEGER, 'utilisateur', 'ID', false, null);

	} 
} 