<?php use_helper('Javascript') ?>

<div id="news">
<?php 
if (isset($news)) {
	echo $news->getCommentaire();
} else { 
	echo 'Ajouter une news' ;
}
?>
</div>
 <?php if ($sf_user->hasCredential('admin')): ?>
   <?php echo input_in_place_editor_tag('news', 'accueil/addNews',  array('cols' => 40, 'rows' => 10, 'save_text' => 'Ajouter une news', 'cancel_text' => 'Abandonner',)); ?>
 <?php else: ?>
 	<?php echo $news->getCommentaire()?>
 <?php endif; ?>
 