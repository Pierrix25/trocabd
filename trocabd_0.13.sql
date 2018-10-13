
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- COMMENTAIRES
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `commentaire`;


CREATE TABLE `commentaire`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`commentaire` VARCHAR(255)  NOT NULL,
	`note` INTEGER  NOT NULL,
	`commentaire_id` INTEGER  NOT NULL,
	`album_id` INTEGER  NOT NULL,
	`utilisateur_id` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `commentaire_commentaire_FK_1`
		FOREIGN KEY (`commentaire_id`)
		REFERENCES `commentaire` (`id`)
		ON DELETE CASCADE
	CONSTRAINT `commentaire_commentaire_FK_2`
		FOREIGN KEY (`album_id`)
		REFERENCES `album` (`id`)
		ON DELETE CASCADE
	CONSTRAINT `commentaire_commentaire_FK_3`
		FOREIGN KEY (`utilisateur_id`)
		REFERENCES `utilisateur` (`id`)
		ON DELETE CASCADE
)Type=MyISAM;


# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
