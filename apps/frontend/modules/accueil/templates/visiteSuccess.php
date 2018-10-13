<?php use_helper('Javascript','GMap') ?>
<?php // use_helper('Javascript') ?>
<table>
<tr>
    <td valign="top" colspan="6" align="left">
	<font color="#FF0000" size="5"><b>Bienvenue,</b></font></td>
	<td rowspan="3" colspan="1" valign="top">
 <?php // include_component('sfSimpleCMS', 'embed', array('slug' => 'news')) ?>
     <?php include_partial('myNews', array('newsPager' => $newsPager)) ?>
	</td>
	</tr>
	<tr><td colspan="6" align="left">
	<b><font size="5" color="#FF6600">Consultez le catalogue de BD en cliquant <?php echo link_to('ici', 'gereBD/recherche?sort=Talbum&filtrePossede=N')?></font></b></td>
	<td></td>
	<tr><td colspan="3" >
Affichage des résultats <?php echo $pager->getFirstIndice() ?> à  <?php echo $pager->getLastIndice() ?>.
</td></tr>
 <?php $nbPic = 0; ?>
 <?php $prem = 1; ?>
 <?php foreach ($pager->getResults() as $obj): ?>
	<?php $nbPic =$nbPic + 1 ?>
	<?php if ($nbPic == 1): ?>
		<tr class="listeObjetLigneTableau">
	<?php endif ?>
	<td class="listeTitreTroqueurLigneTableau"><?php echo link_to (image_tag(UPLOAD_BD_DIR_REL.'/'.$obj->getPhoto1(),SIZE_THUMBS), 'gereBD/show?id='.$obj->getId())?>
	<br><?php echo  image_tag('/images/rate_'.$obj->getNote().'small.gif'); ?>
	<?php if  ($obj->countCommentairealbums() <> 0): ?>
			<?php $comments = $obj->getCommentairealbums(); ?>
			<br><?php echo  'par '.$comments[0]->getUtilisateur()->getLogin(); ?>
	<?php else: ?>
			<br><br>
	<?php endif ?>
	</td>
	<?php if ($nbPic == 5): ?>
		<td></td>
		<?php if ($prem == 1): ?>
	 		<?php $prem = 0; ?>
			    <td valign="top" colspan="1" rowspan ="4" >
				<?php 
				if (($sf_request->getContext()->getModuleName()=='accueil') and ($sf_request->getContext()->getActionName()=="visite" ))
				{
 				include_map($map,array('width'=>'400px','height'=>'250px')); 
								}
				 ?>
			    </td>
		<?php endif ?>
		</tr>
		
		<?php $nbPic = 0; ?>
	<?php endif ?>
 <?php endforeach; ?>
<tr><td colspan="2">
<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to('&laquo;', 'accueil/visite?page='.$pager->getFirstPage()) ?>
  <?php echo link_to('&lt;', 'accueil/visite?page='.$pager->getPreviousPage()) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'accueil/visite?page='.$page) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): echo ' - '?>  <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to('&gt;', 'accueil/visite?page='.$pager->getNextPage()) ?>
  <?php echo link_to('&raquo;', 'accueil/visite?page='.$pager->getLastPage()) ?>
<?php endif ?>
</td>
</tr>
<tr>
    <td valign="top" colspan="6">
    	<font color="#FF6600" size="3">Dernier troqueur inscrit : <font size="3"><?php echo $lastUser->getLogin()?></font>
	le <?php echo $lastUser->getCreatedAt()?>
	</font></td>
	</tr>
	<tr><td valign="top" colspan="6">
    	<font color="#FF6600" size="3">Dernière visite de troqueur : <font size="3"><?php echo $lastConnectedUser->getLogin()?></font>
	le <?php echo $lastConnectedUser->getDerniereConnexion()?>
	</font>
	</td>
  </tr>
  </table>


