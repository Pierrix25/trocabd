<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<?php use_helper('Object') ?>
<?php use_helper('Javascript') ?>

<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
Recherche de BD
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>		
<table>

<thead class="listeObjetTitreTableau">
<tr>
  <th></th>
  <th><?php echo link_to ('Serie', 'gereBD/recherche?sort=Nom&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?></th>
  <th><?php echo link_to ('Titre', 'gereBD/recherche?sort=Talbum&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?></th>
  <th><?php echo link_to ('Date Parution', 'gereBD/recherche?sort=DateParu&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?></th>
  <th>Action</th>
</tr>
</thead>
<tbody >
<tr><td colspan="2" >
<?php echo $pager->getNbResults() ?> r�sultats trouv�s.<br/>
Affichage des r�sultats <?php echo $pager->getFirstIndice() ?> �  <?php echo $pager->getLastIndice() ?>.
</td></tr>
<?php foreach ($pager->getResults() as $obj): ?>
<?php if (($filtrePossede <> 'O') or 	($obj->countPossedes()<>0)): ?>
<tr class="listeObjetLigneTableau">
      <td rowspan="3" ><?php echo image_tag(UPLOAD_BD_DIR_REL.'/'.$obj->getPhoto1(),SIZE_THUMBS) ?></td>
      <tr>
      <td><?php echo $obj->getSerie()->getNom() ?></td>
      <td><?php echo $obj->getTalbum() ?></td>
      <td><?php echo $obj->getDateParu() ?></td>
      <td>
		<?php echo link_to (image_tag('bt_voir', array('border' => 0)), 'gereBD/show?id='.$obj->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher)?>
		<?php $dansMaVitrine = 'false'; ?>
	 	<?php foreach ($obj->getPossedes() as $poss): ?>
	 			<?php if ($poss->getUtilisateurId() == $sf_user->getAttribute('id')): ?>
	 				<?php $dansMaVitrine = 'true' ?>
		      	<?php endif; ?>
	 	<?php endforeach; ?>
		<?php echo "<div id=\"btPanier".$obj->getId()."\">" ?>
		<?php if($sf_user->hasCredential('troqueur')): ?>
			<?php if ($dansMaVitrine=='false'): ?>
					<?php echo link_to_remote (image_tag('bt_panier', array('border' => 0)), array('update' => 'btPanier'.$obj->getId() , 'url' => 'gereBD/ajouterVitrine?id='.$obj->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher))?>
			<?php else: ?>
					D�j� dans ma vitrine
	      	<?php endif; ?>
      	<?php endif; ?>
		<?php echo "</div>" ?>
      </td>
      </tr>
	<tr>
	<?php if ($obj->countPossedes()<>0): ?>
	<td colspan = "2" class="listeTitreTroqueurLigneTableau"> Troqueur poss�dant cette BD :</td>
    <?php endif; ?>
	<td colspan="2" class="listeTroqueurLigneTableau" >
 	<?php foreach ($obj->getPossedes() as $poss): ?>
	 		<?php echo link_to ($poss->getUtilisateur()->getLogin(), 'gereBD/saVitrine?sort=Talbum&login='.$poss->getUtilisateur()->getLogin().'&utilid='.$poss->getUtilisateurId().'&rechercher='.$rechercher)  ?>
 	<?php endforeach; ?>
 	</td>
 	</tr>
 	<?php endif; ?>
 <?php endforeach; ?>
</tbody>
<?php if ($sf_flash->has('messageFin')): ?>
	<tr><?php echo $sf_flash->get('messageFin')?></tr>
<?php endif; ?>
</table>
<?php if($sf_user->hasCredential('admin')): ?>
   <?php echo link_to (image_tag('bt_ajouterBD', array('border' => 0)), 'gereBD/create?sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher)?>
<?php endif; ?>


<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to('&laquo;', 'gereBD/recherche?page='.$pager->getFirstPage().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
  <?php echo link_to('&lt;', 'gereBD/recherche?page='.$pager->getPreviousPage().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'gereBD/recherche?page='.$page.'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?> - <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to('&gt;', 'gereBD/recherche?page='.$pager->getNextPage().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
  <?php echo link_to('&raquo;', 'gereBD/recherche?page='.$pager->getLastPage().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$rechercher.'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
<?php endif ?>

