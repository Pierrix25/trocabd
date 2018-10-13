<?php use_helper('Javascript') ?>
<?php echo $thePager->getNbResults() ?> résultats trouvés.<br/>
Affichage des résultats <?php echo $thePager->getFirstIndice() ?> à  <?php echo $thePager->getLastIndice() ?>.
<?php echo '<br>' ?>
<?php foreach ($thePager->getResults() as $obj): ?>
    <?php echo image_tag(UPLOAD_BD_DIR_REL.'/'.$obj->getAlbum()->getPhoto1(),SIZE_THUMBS).'   '.link_to($obj->getAlbum()->getTalbum(), 'gereBD/show?id='.$obj->getAlbum()->getId().'&sortTroc=Collection').' '.link_to_remote(image_tag('plus.gif'),array('update' => $contexte, 'url' => 'gereTroc/add'.$contexte.'?albumId=bd_'.$obj->getAlbum()->getId().'&titre='.$obj->getAlbum()->getTalbum())) ?>
    <?php echo '<br>' ?>
<?php endforeach; ?>
  <?php if ($thePager->haveToPaginate()): ?>
  <?php echo link_to_remote('&laquo;', array('update' => $vitrine, 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getFirstPage().'&utilid='.$utilid, 'script' => true)) ?>
  <?php echo link_to_remote('&lt;', array('update' => $vitrine, 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getPreviousPage().'&utilid='.$utilid, 'script' => true)) ?>
  <?php $links = $thePager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $thePager->getPage()) ? $page : link_to_remote($page, array('update' => $vitrine, 'url' => 'gereTroc/bdList?list='.$list.'&page='.$page.'&utilid='.$utilid, 'script' => true)) ?>
    <?php if ($page != $thePager->getCurrentMaxLink()): ?> - <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to_remote('&gt;', array('update' => $vitrine, 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getNextPage().'&utilid='.$utilid, 'script' => true)) ?>
  <?php echo link_to_remote('&raquo;', array('update' => $vitrine, 'url' => 'gereTroc/bdList?list='.$list.'&page='.$thePager->getLastPage().'&utilid='.$utilid, 'script' => true)) ?>
<?php endif ?>