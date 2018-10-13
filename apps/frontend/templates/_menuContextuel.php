
<!--  custom cheminDeFer -->
<?php $chemin['gereBD/recherche']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=N&filtreCommunaute=N'); ?>    
<?php $chemin['1/gereBD/recherche']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=N&filtreCommunaute=N'); ?>    
<?php $chemin['0/gereBD/recherche']=array('BD en vitrine' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=O','Toutes BD' => 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&filtrePossede=N'); ?>    
<?php $chemin['gereBD/rechercheSerie']=array(); ?>    
<?php $chemin['1/gereBD/rechercheSerie']=array(); ?>    
<?php $chemin['0/gereBD/rechercheSerie']=array(); ?>    
<?php $chemin['gereBD/list']=array(); ?>    
<?php $chemin['1/gereBD/list']=array(); ?>    
<?php $chemin['0/gereBD/list']=array(); ?>    
<?php $chemin['gereBD/vitrinesCommunautes']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['1/gereBD/vitrinesCommunautes']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['gereBD/maVitrine']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['1/gereBD/maVitrine']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['gereBD/saVitrine']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'Nouveau troc' => 'gereTroc/create?sortTroc=created_at&utilid='.$sf_request->getParameter('utilid')); ?>    
<?php $chemin['1/gereBD/saVitrine']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'Nouveau troc' => 'gereTroc/create?sortTroc=created_at&utilid='.$sf_request->getParameter('utilid')); ?>    
<?php $chemin['0/gereBD/saVitrine']=array(); ?>    
<?php $chemin['gereBD/show']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/show']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['0/gereBD/show']=array(); ?>    
<?php $chemin['gereBD/showSerie']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/showSerie']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['0/gereBD/showSerie']=array(); ?>    
<?php $chemin['gereBD/showEditeur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/showEditeur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['0/gereBD/showEditeur']=array(); ?>    
<?php $chemin['gereBD/showAuteur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/showAuteur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['0/gereBD/showAuteur']=array(); ?>    
<?php $chemin['gereBD/showGenre']=array(); ?>    
<?php $chemin['1/gereBD/showGenre']=array(); ?>    
<?php $chemin['0/gereBD/showGenre']=array(); ?>    
<?php $chemin['1/gereBD/create']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/createSerie']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/createAuteur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/createEditeur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/edit']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/editSerie']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/editAuteur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un éditeur' => 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['1/gereBD/editEditeur']=array('Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'),'Ajouter une BD' => 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter une série' => 'gereBD/createSerie?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'), 'Ajouter un auteur' => 'gereBD/createAuteur?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher')); ?>    
<?php $chemin['gereCommunaute/list']=array(); ?>    
<?php $chemin['1/gereCommunaute/list']=array(); ?>    
<?php $chemin['accueil/visite']=array('Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort=Talbum&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort=Talbum&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort=Talbum&filtrePossede=N&filtreCommunaute=N', 'Communautés' => 'gereCommunaute/list?sort=ncommunaute&utilid='.$sf_user->getAttribute('id'), 'Comment faire' => 'accueil/howTo'); ?>    
<?php $chemin['1/accueil/visite']=array('Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort=Talbum&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort=Talbum&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort=Talbum&filtrePossede=N&filtreCommunaute=N', 'Communautés' => 'gereCommunaute/list?sort=ncommunaute&utilid='.$sf_user->getAttribute('id'), 'Comment faire' => 'accueil/howTo'); ?>    
<?php $chemin['0/accueil/visite']=array('Liste des BD' => 'gereBD/recherche?sort=talbum&filtrePossede=N&filtreCommunaute=N','BD en vitrine' => 'gereBD/recherche?sort=talbum&filtrePossede=O', 'Carte des troqueurs' => 'gereUtilisateur/showmap', 'Liste des trocs' => 'gereTroc/list?sortTroc=created_at', 'Comment faire' => 'accueil/howTo','Liste des troqueurs sans lon&lat TEST' => 'gereUtilisateur/listeTroqueurs?sort=nom&filtreLonLat=O&envtroc=TEST', 'Liste des troqueurs sans lon&lat PROD' => 'gereUtilisateur/listeTroqueurs?sort=nom&filtreLonLat=O&envtroc=PROD'); ?>    
<?php $chemin['accueil/troqueur']=array('Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort=Talbum&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort=Talbum&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort=Talbum&filtrePossede=N&filtreCommunaute=N', 'Communautés' => 'gereCommunaute/list?sort=ncommunaute&utilid='.$sf_user->getAttribute('id'), 'Comment faire' => 'accueil/howTo' ); ?>    
<?php $chemin['1/accueil/troqueur']=array('Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id').'&rechercher='.$sf_request->getParameter('rechercher'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'BD en vitrine' => 'gereBD/recherche?sort=Talbum&filtrePossede=O', 'Vitrines de mes communautes' => 'gereBD/recherche?sort=Talbum&filtrePossede=O&filtreCommunaute=O','Toutes BD' => 'gereBD/recherche?sort=Talbum&filtrePossede=N&filtreCommunaute=N', 'Communautés' => 'gereCommunaute/list?sort=ncommunaute&utilid='.$sf_user->getAttribute('id'), 'Comment faire' => 'accueil/howTo' ); ?>    
<?php $chemin['gereUtilisateur/list']=array(); ?>    
<?php $chemin['1/gereUtilisateur/list']=array(); ?>    
<?php $chemin['0/gereUtilisateur/list']=array(); ?>    
<?php $chemin['gereUtilisateur/create']=array(); ?>    
<?php $chemin['1/gereUtilisateur/create']=array(); ?>    
<?php $chemin['0/gereUtilisateur/create']=array(); ?>    
<?php $chemin['gereUtilisateur/update']=array(); ?>    
<?php $chemin['1/gereUtilisateur/update']=array(); ?>    
<?php $chemin['0/gereUtilisateur/update']=array(); ?>    
<?php $chemin['gereUtilisateur/show']=array('Supprimer mon compte' => 'gereUtilisateur/delete?id='.$sf_user->getAttribute('id'), 'Modifier mon compte' => 'gereUtilisateur/edit?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['1/gereUtilisateur/show']=array('Supprimer mon compte' => 'gereUtilisateur/delete?id='.$sf_user->getAttribute('id'), 'Modifier mon compte' => 'gereUtilisateur/edit?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id'), 'Mes trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['0/gereUtilisateur/show']=array(); ?>    
<?php $chemin['1/gereUtilisateur/showmap']=array('Liste des BD' => 'gereBD/recherche?sort=talbum&filtrePossede=N&filtreCommunaute=N','BD en vitrine' => 'gereBD/recherche?sort=talbum&filtrePossede=O',  'Liste des trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['0/gereUtilisateur/showmap']=array('Liste des BD' => 'gereBD/recherche?sort=talbum&filtrePossede=N&filtreCommunaute=N','BD en vitrine' => 'gereBD/recherche?sort=talbum&filtrePossede=O',  'Liste des trocs' => 'gereTroc/list?sortTroc=created_at'); ?>    
<?php $chemin['gereOublie/edit']=array(); ?>    
<?php $chemin['1/gereOublie/edit']=array(); ?>    
<?php $chemin['gereOublie/update']=array(); ?>    
<?php $chemin['1/gereOublie/update']=array(); ?>    
<?php $chemin['gereOublie/show']=array(); ?>    
<?php $chemin['1/gereOublie/show']=array(); ?>    
<?php $chemin['0/gereOublie/show']=array(); ?>    
<?php $chemin['gereTroc/list']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id')); ?>    
<?php $chemin['1/gereTroc/list']=array('Accueil' => 'accueil/index', 'Mes coordonnées' => 'gereUtilisateur/show?id='.$sf_user->getAttribute('id'), 'Ma Vitrine' => 'gereBD/maVitrine?sort=talbum&utilid='.$sf_user->getAttribute('id')); ?>    
<?php $chemin['0/gereTroc/list']=array('Accueil' => 'accueil/index'); ?>    
<?php $chemin['gereTroc/create']=array(); ?>    
<?php $chemin['1/gereTroc/create']=array(); ?>    
<?php $chemin['gereTroc/edit']=array(); ?>    
<?php $chemin['1/gereTroc/edit']=array(); ?>    
<?php $chemin['gereTroc/noter']=array(); ?>    
<?php $chemin['1/gereTroc/noter']=array(); ?>    
<?php $chemin['gereTroc/show']=array(); ?>    
<?php $chemin['1/gereTroc/show']=array(); ?>    
<?php $chemin['0/gereTroc/show']=array(); ?>    
<?php $chemin['gereTroc/update']=array(); ?>    
<?php $chemin['1/gereTroc/update']=array(); ?>    
<?php $chemin['gereTroc/updatenote']=array(); ?>    
<?php $chemin['1/gereTroc/updatenote']=array(); ?>    
<?php $chemin['gereTroc/expedier']=array(); ?>    
<?php $chemin['1/gereTroc/expedier']=array(); ?>    
<?php $chemin['0/gereUtilisateur/listeTroqueurs']=array('Liste des troqueurs sans lon&lat' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=O&envtroc='.$sf_request->getParameter('envtroc'), 'Liste des troqueurs' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=N&envtroc='.$sf_request->getParameter('envtroc')); ?>    
<?php $chemin['0/gereUtilisateur/deleteTroqueursProd']=array('Liste des troqueurs sans lon&lat' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=O&envtroc='.$sf_request->getParameter('envtroc'), 'Liste des troqueurs' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=N&envtroc='.$sf_request->getParameter('envtroc')); ?>    
<?php $chemin['0/gereUtilisateur/calLonLat']=array('Liste des troqueurs sans lon&lat' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=O&envtroc='.$sf_request->getParameter('envtroc'), 'Liste des troqueurs' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=N&envtroc='.$sf_request->getParameter('envtroc')); ?>    
<?php $chemin['0/gereUtilisateur/majTroqueurs']=array('Liste des troqueurs sans lon&lat' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=O&envtroc='.$sf_request->getParameter('envtroc'), 'Liste des troqueurs' => 'gereUtilisateur/listeTroqueurs?sort='.$sf_request->getParameter('sortTroqueurs').'&filtreLonLat=N&envtroc='.$sf_request->getParameter('envtroc')); ?>    

<?php if (($sf_user->isAuthenticated()) and ($sf_user->hasCredential('manager') or ($sf_user->hasCredential('admin')))): ?>
	<?php $action='1/'.$sf_request->getContext()->getModuleName().'/'.$sf_request->getContext()->getActionName()?>
	<?php if (array_key_exists($action, $chemin)): ?>
		<?php $etapes = $chemin[$action] ?>
		<?php foreach ($etapes as $key => $value ): ?>
		    <p><?php echo link_to($key, $value) ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
<?php else: ?>
<?php if (($sf_user->isAuthenticated()) and ($sf_user->hasCredential('troqueur'))): ?>
	<?php $action=$sf_request->getContext()->getModuleName().'/'.$sf_request->getContext()->getActionName()?>
	<?php if (array_key_exists($action, $chemin)): ?>
		<?php $etapes = $chemin[$action] ?>
		<?php foreach ($etapes as $key => $value ): ?>
		    <p><?php echo link_to($key, $value) ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
<?php else: ?>
	<?php $action='0/'.$sf_request->getContext()->getModuleName().'/'.$sf_request->getContext()->getActionName()?>
	<?php if (array_key_exists($action, $chemin)): ?>
		<?php $etapes = $chemin[$action] ?>
		<?php foreach ($etapes as $key => $value ): ?>
		    <p><?php echo link_to($key, $value) ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
	