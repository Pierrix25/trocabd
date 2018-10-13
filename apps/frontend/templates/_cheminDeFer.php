
<!--  custom cheminDeFer -->
<?php $chemin['gereUtilisateur/listeTroqueurs']=array('Accueil' => 'accueil/index'); ?> 
<?php $chemin['gereBD/list']=array('Accueil' => 'accueil/index', 'Liste BD' => ' '); ?>    
<?php $chemin['gereBD/recherche']=array('Accueil' => 'accueil/index', 'Recherche BD' => ' '); ?>    
<?php $chemin['gereBD/saVitrine']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'), "Vitrine de ".$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereBD/maVitrine']=array('Accueil' => 'accueil/index', 'Mon espace' => 'accueil/troqueur', 'Ma vitrine' => ' '); ?>    
<?php $chemin['gereBD/show']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche BD' => ' '); ?>    
<?php $chemin['gereBD/showSerie']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche Serie' => ' '); ?>    
<?php $chemin['gereBD/showEditeur']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche Editeur' => ' '); ?>    
<?php $chemin['gereBD/showAuteur']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche Auteur' => ' '); ?>    
<?php $chemin['gereBD/showGenre']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche Genre' => ' '); ?>    
<?php $chemin['gereBD/create']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Ajouter BD' => ' '); ?>    
<?php $chemin['gereBD/createSerie']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Ajouter Serie' => ' '); ?>    
<?php $chemin['gereBD/edit']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Modifier BD' => ' '); ?>    
<?php $chemin['gereBD/editSerie']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Modifier Serie' => ' '); ?>    
<?php $chemin['gereBD/editEditeur']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Modifier Editeur' => ' '); ?>    
<?php $chemin['gereBD/editAuteur']=array('Accueil' => 'accueil/index', 'Recherche BD' => 'gereBD/recherche?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Modifier Auteur' => ' '); ?>    
<?php $chemin['accueil/visite']=array('Accueil' => ' '); ?>  
<?php $chemin['accueil/troqueur']=array('Accueil' => ' '); ?>  
<?php $chemin['accueil/howTo']=array('Accueil' => 'accueil/index', 'Comment Faire' => ''); ?>    
<?php $chemin['gereCommunaute/list']=array('Accueil' => 'accueil/index', 'Communautes' => ''); ?>    
<?php $chemin['gereCommunaute/show']=array('Accueil' => 'accueil/index', 'Communautes' => 'gereCommunaute/list?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Fiche Communaute' => ' '); ?>    
<?php $chemin['gereCommunaute/create']=array('Accueil' => 'accueil/index', 'Communautes' => 'gereCommunaute/list?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Ajouter Communaute' => ' '); ?>    
<?php $chemin['gereCommunaute/edit']=array('Accueil' => 'accueil/index', 'Communautes' => 'gereCommunaute/list?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'),  'Modifier Communaute' => ' '); ?>    
<?php $chemin['gereUtilisateur/create']=array('Accueil' => 'accueil/index', 'Inscription' => ' '); ?>    
<?php $chemin['gereUtilisateur/recherche']=array('Accueil' => 'accueil/index', 'Communautes' => 'gereCommunaute/list?rechercher='.$sf_request->getParameter('rechercher').'&sort='.$sf_request->getParameter('sort'), 'Inviter' => ''); ?>    
<?php $chemin['gereUtilisateur/edit']=array('Accueil' => 'accueil/index', 'Modification de compte' => ' '); ?>    
<?php $chemin['gereUtilisateur/delete']=array('Accueil' => 'accueil/index', 'suppression de compte' => ' '); ?>    
<?php $chemin['gereUtilisateur/show']=array('Accueil' => 'accueil/index', 'Mon compte' => ' '); ?>    
<?php $chemin['gereUtilisateur/showmap']=array('Accueil' => 'accueil/index', 'Carte des troqueurs' => ' '); ?>    
<?php $chemin['gereUtilisateur/listeTroqueurs']=array('Accueil' => 'accueil/index', 'Liste des troqueurs' => ' '); ?>    
<?php $chemin['gereUtilisateur/deleteTroqueursProd']=array('Accueil' => 'accueil/index', 'Liste des troqueurs' => ' '); ?>    
<?php $chemin['gereUtilisateur/calLonLat']=array('Accueil' => 'accueil/index', 'Liste des troqueurs' => ' '); ?>    
<?php $chemin['gereUtilisateur/majTroqueurs']=array('Accueil' => 'accueil/index', 'Liste des troqueurs' => ' '); ?>    
<?php $chemin['gereOublie/edit']=array('Accueil' => 'accueil/index', 'Mot de passe oublié' => ' '); ?>    
<?php $chemin['gereTroc/list']=array('Accueil' => 'accueil/index', 'trocs' => ' '); ?>    
<?php $chemin['gereTroc/create']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/update']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/updatenote']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/edit']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/noter']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/show']=array('Accueil' => 'accueil/index', 'trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['gereTroc/expedier']=array('Accueil' => 'accueil/index', 'Mes trocs' => 'gereTroc/list?sortTroc=created_at', 'Troc avec '.$sf_request->getParameter('login') => ' '); ?>    
<?php $chemin['sfSimpleForum/']=array('Accueil' => 'accueil/index', 'Forum' => ''); ?>    
<?php $chemin['sfSimpleForumForumAdmin/']=array('Accueil' => 'accueil/index', 'Administration Forum' => ''); ?>    
<?php $chemin['sfSimpleForumCategoryAdmin/']=array('Accueil' => 'accueil/index', 'Administration Forum' => 'sfSimpleForumForumAdmin/index', 'Administration des categories du Forum' => ''); ?>    
<?php $chemin['sfFaq/']=array('Accueil' => 'accueil/index', 'FAQ' => ''); ?>    
<?php $chemin['sfFaqAdminFaq/']=array('Accueil' => 'accueil/index', 'Administration FAQ' => ''); ?>    
<?php $chemin['sfFaqAdminCategories/']=array('Accueil' => 'accueil/index', 'Administration Categories des FAQ' => ''); ?>    
<?php $chemin['sfSimpleCMSAdmin/']=array('Accueil' => 'accueil/index', 'Administration CMS' => ''); ?>    
<?php $chemin['sfSimpleCMS/']=array('Accueil' => 'accueil/index', 'Administration CMS' => ''); ?>    
 
<?php $action=$sf_request->getContext()->getModuleName().'/'.$sf_request->getContext()->getActionName()?>
<?php if (!isset($chemin[$action])):?>
<?php      $action=$sf_request->getContext()->getModuleName().'/'.$sf_flash->get('actionOrigine')?>
<?php endif; ?>

<?php $etapes= $chemin[$action] ?>
<?php $sep= "" ?>
<?php $i=0 ?>
<?php foreach ($etapes as $key => $value ): ?>
     <?php echo $sep ?>
     <?php if ($i<(sizeOf($etapes)-1)): ?>
     	<?php echo link_to($key, $value) ?>
     <?php else: ?>
     	<?php echo $key ?>
     <?php endif; ?>
     <?php $sep= "->" ?>
     <?php $i++ ?>
<?php endforeach; ?>
