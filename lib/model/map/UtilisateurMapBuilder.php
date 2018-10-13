<?php



class UtilisateurMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UtilisateurMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('utilisateur');
		$tMap->setPhpName('Utilisateur');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NOM', 'Nom', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('PRENOM', 'Prenom', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('LOGIN', 'Login', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('MDP', 'Mdp', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('RUE2', 'Rue2', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('RUE3', 'Rue3', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('RUE4', 'Rue4', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CP', 'Cp', 'string', CreoleTypes::VARCHAR, false, 5);

		$tMap->addColumn('VILLE', 'Ville', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LON', 'Lon', 'double', CreoleTypes::DECIMAL, false, 9);

		$tMap->addColumn('LAT', 'Lat', 'double', CreoleTypes::DECIMAL, false, 9);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('QUESTION', 'Question', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('REPONSE', 'Reponse', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('NBVISITEUR', 'Nbvisiteur', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('NBUTILISATEUR', 'Nbutilisateur', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('DERNIERECONNEXION', 'Derniereconnexion', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('USERID', 'Userid', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 