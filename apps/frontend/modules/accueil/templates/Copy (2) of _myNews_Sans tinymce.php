<?php use_helper('Javascript') ?>

<div id="news">
<?php $news=$newsPager->getResults() ?>
<?php if ($sf_user->hasCredential('admin')): ?>
	<?php echo $newsPager->getNbResults() ?> news.<br/>
	Affichage de la news n°  <?php echo ($newsPager->getNbResults() - $newsPager->getLastIndice() +1) ?>.
	<?php echo '<br>' ?>
	<div id="error"></div>
	<?php echo form_remote_tag(array(
	'update' => array('success' => 'news', 'failure' => 'error'),
	'url' => 'accueil/addNews',
	'script' => true,
	)); ?>
	<?php $myNews=''; ?>
	<?php if (isset($news[0])): ?>
		<?php $myNews=$news[0]->getCommentaire(); ?>
	<?php endif ?>
	<?php echo textarea_tag('commentaire', $myNews, array('size' => '40x10', 'rich' => true,)); ?>
	<?php echo submit_tag('Ajouter une news'); ?>
	</form>
<?php else: ?>
	<?php if (isset($news[0])): ?>
		<?php echo html_entity_decode($news[0]->getCommentaire()); ?>
		<BR>
		<?php echo 'postée le '.$news[0]->getCreatedAt().' par '.$news[0]->getUtilisateur()->getLogin(); ?>
	<?php endif ?>
<?php endif ?>
		
	<?php if ($newsPager->haveToPaginate()): ?>
		<?php echo link_to_remote('&laquo;', array('update' => 'news', 'url' => 'accueil/listNews?page='.$newsPager->getFirstPage(), 'script' => true)) ?>
		<?php echo link_to_remote('&lt;', array('update' => 'news', 'url' => 'accueil/listNews?page='.$newsPager->getPreviousPage(), 'script' => true)) ?>
		<?php $links = $newsPager->getLinks(); foreach ($links as $page): ?>
			<?php echo ($page == $newsPager->getPage()) ? $page : link_to_remote($page, array('update' => 'news', 'url' => 'accueil/listNews?page='.$page, 'script' => true)) ?>
			<?php if ($page != $newsPager->getCurrentMaxLink()): ?> - <?php endif ?>
		<?php endforeach ?>
		<?php echo link_to_remote('&gt;', array('update' => 'news', 'url' => 'accueil/listNews?page='.$newsPager->getNextPage(), 'script' => true)) ?>
		<?php echo link_to_remote('&raquo;', array('update' => 'news', 'url' => 'accueil/listNews?page='.$newsPager->getLastPage(), 'script' => true)) ?>
	<?php endif ?>
	<br><br>
<?php if ($sf_user->hasCredential('admin')): ?>
	<?php if (isset($news[0])): ?>
		<?php echo link_to_remote('Supprimer', array('update' => 'news', 'url' => 'accueil/deleteNews?newsId='.$news[0]->getId(), 'script' => true)) ?>
	<?php endif ?>
 <?php endif; ?>
</div>

 