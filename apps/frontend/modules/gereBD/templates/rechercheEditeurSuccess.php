<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<?php use_helper('Object') ?>
<?php use_helper('Javascript') ?>

<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
Recherche d'�diteur
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>		
<table>
<tr><td>
<?php echo $pager->getNbResults() ?> r�sultats trouv�s.<br/>
Affichage des r�sultats <?php echo $pager->getFirstIndice() ?> �  <?php echo $pager->getLastIndice() ?>.
</td></tr>

<thead class="listeObjetTitreTableau">
<tr>
  <th></th>
  <th><?php echo link_to ('Editeur', 'gereBD/rechercheEditeur') ?></th>
  <th>Action</th>
</tr>
</thead>
<tbody >
<?php foreach ($pager->getResults() as $obj): ?>
<tr class="listeObjetLigneTableau">
      <td><?php echo image_tag($obj->getPhoto1()) ?></td>
      <td><?php echo '<a href="#" onclick="opener.document.getElementById(\'nomEditeur\').value=\''.$obj->getNom().'\';opener.document.getElementById(\'id_nomEditeur\').value=\''.$obj->getId().'\'">'.$obj->getNom().'</a>' ?></td>
      <td>
		<?php echo link_to (image_tag('bt_voir', array('border' => 0)), 'gereBD/showEditeur?id='.$obj->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'))?>
      </td>
<?php endforeach; ?>
</tbody>
<?php if ($sf_flash->has('messageFin')): ?>
	<tr><?php echo $sf_flash->get('messageFin')?></tr>
<?php endif; ?>
</table>
<?php if($sf_user->hasCredential('troqueur')): ?>
   <?php echo link_to (image_tag('bt_ajouterEditeur', array('border' => 0)), 'gereBD/createEditeur?sort='.$sf_request->getParameter('sort'))?>
<?php endif; ?>

<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to('&laquo;', 'gereBD/rechercheEditeur?page='.$pager->getFirstPage().'&sort='.$sf_request->getParameter('sort')) ?>
  <?php echo link_to('&lt;', 'gereBD/rechercheEditeur?page='.$pager->getPreviousPage().'&sort='.$sf_request->getParameter('sort')) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'gereBD/rechercheEditeur?page='.$page.'&sort='.$sf_request->getParameter('sort')) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?> - <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to('&gt;', 'gereBD/rechercheEditeur?page='.$pager->getNextPage().'&sort='.$sf_request->getParameter('sort')) ?>
  <?php echo link_to('&raquo;', 'gereBD/rechercheEditeur?page='.$pager->getLastPage().'&sort='.$sf_request->getParameter('sort')) ?>
<?php endif ?>

