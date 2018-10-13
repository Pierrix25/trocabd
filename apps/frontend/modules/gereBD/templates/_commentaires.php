<?php use_helper('Javascript') ?>

<?php echo '<div id="comment_'.$comm->getId().'">'; ?>
<br><?php echo image_tag('/images/rate_'.$comm->getNote().'.gif') ?>
<br><?php echo $comm->getCommentaire()?>
<br><?php echo 'publié par '.$comm->getUtilisateur()->getLogin().' le '.$comm->getCreatedAt()?>
 <?php if (($sf_user->hasCredential('troqueur')) && $comm->getUtilisateurId() == $sf_user->getAttribute('id')): ?>
   <?php echo link_to_remote(' Supprimer ', array('update' => 'comment_'.$comm->getId(), 'url' =>  'gereBD/deleteCommentairealbum?id='.$comm->getId(),  'script' => true)); ?>
 <?php endif; ?>
<?php echo '</div>'; ?>