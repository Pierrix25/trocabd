<?php echo $thePager->getNbResults() ?> résultats trouvés.<br/>
Affichage des résultats <?php echo $thePager->getFirstIndice() ?> à  <?php echo $thePager->getLastIndice() ?>.
<ul>
<?php foreach ($thePager->getResults() as $obj): ?>
    <?php echo '<li id=possede_'.$obj->getId().' titre='.$obj->getBd()->getTitre().' style=" background:#7baaed; border:1px solid #333;">'.$obj->getBd()->getTitre().'</li>' ?>
	<?php echo draggable_element('possede_'.$obj->getId(), array('revert' => true)) ?>
<?php endforeach; ?>
</ul>
  <?php if ($thePager->haveToPaginate()): ?>
  <?php echo link_to_remote('&laquo;', array('update' => 'items', 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getFirstPage(), 'script' => 'true')) ?>
  <?php echo link_to_remote('&lt;', array('update' => 'items', 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getPreviousPage(), 'script' => 'true')) ?>
  <?php $links = $thePager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $thePager->getPage()) ? $page : link_to_remote($page, array('update' => 'items', 'url' => 'gereTroc/bdList?list='.$list.'&page='.$page, 'script' => 'true')) ?>
    <?php if ($page != $thePager->getCurrentMaxLink()): ?> - <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to_remote('&gt;', array('update' => 'items', 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getNextPage(), 'script' => 'true')) ?>
  <?php echo link_to_remote('&raquo;', array('update' => 'items', 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getLastPage(), 'script' => 'true')) ?>
<?php endif ?>

