<?php
// include project configuration
include(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

// symfony bootstraping
require_once($sf_symfony_lib_dir.'/util/sfCore.class.php');
sfCore::bootstrap($sf_symfony_lib_dir, $sf_symfony_data_dir);
$homeDir = sfConfig::get('sf_web_dir');
define("UPLOAD_BD_DIR", $homeDir.'\uploads\bd');
define("UPLOAD_BD_DIR_REL",'../uploads/bd');
define("UPLOAD_SERIE_DIR", $homeDir.'\uploads\serie');
define("UPLOAD_SERIE_DIR_REL",'../uploads/serie');
define("UPLOAD_EDITEUR_DIR", $homeDir.'\uploads\editeur');
define("UPLOAD_EDITEUR_DIR_REL",'../uploads/editeur');
define("UPLOAD_AUTEUR_DIR", $homeDir.'\uploads\auteur');
define("UPLOAD_AUTEUR_DIR_REL",'../uploads/auteur');
define("MESSAGE_FIN_EDIT_OK",'Modification correctement effectuée');
define("MESSAGE_FIN_CREATE_OK",'Création correctement effectuée');
define("MESSAGE_FIN_DELETE_OK",'Suppression correctement effectuée');
define("SIZE_THUMBS",'size=80x100');
?>

