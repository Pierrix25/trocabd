<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>

<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
Consultation BD
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>		

<table>
<tbody>
<tr><td>Serie:</td><td><?php 
if ($bd->getSerie()) {
	echo link_to($bd->getSerie()->getNom(),'gereBD/showSerie?id='.$bd->getSerie()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
  	if ($bd->getSerie()->getUtilisateur()): 
		if ($sf_user->getAttribute('id')==$bd->getSerie()->getUtilisateur()->getId()): 
   				 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editSerie?id='.$bd->getSerie()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif; 
       else: 
		 if ($sf_user->hasCredential('admin')): 
   					echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editSerie?id='.$bd->getSerie()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif;
      endif; 
}
?>
</td>
<td><?php echo image_tag(UPLOAD_BD_DIR_REL.'/'.$bd->getPhoto1()) ?></td>
<tr><td> </td><td> </td><td rowspan="20"><?php echo image_tag(UPLOAD_BD_DIR_REL.'/'.$bd->getPhoto2()) ?></td></tr>
<tr><td>Titre:</td><td><?php echo $bd->getTalbum() ?></td></tr>
<tr><td>Editeur:</td><td><?php 
if ($bd->getEditeur()) {
	echo link_to($bd->getEditeur()->getNom(), 'gereBD/showEditeur?id='.$bd->getEditeur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
  	if ($bd->getEditeur()->getUtilisateur()): 
		if ($sf_user->getAttribute('id')==$bd->getEditeur()->getUtilisateur()->getId()): 
   				 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editEditeur?id='.$bd->getEditeur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif; 
       else: 
		 if ($sf_user->hasCredential('admin')): 
   					 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editEditeur?id='.$bd->getEditeur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif;
       endif; 
}
?>
</td></tr>
<tr><td>Genre:</td><td><?php 
if ($bd->getGenre()) {
	echo $bd->getGenre()->getNom();
}
?></td></tr>
<tr><td>Scenariste:</td><td>   
<?php 
$cScenariste = new Criteria();
$cScenariste->add(AuteuralbumPeer::SCENARISTE, 1);
$rScenariste=$bd->getAuteuralbums($cScenariste);
foreach ($rScenariste as $scenariste) {
			echo link_to($scenariste->getAuteur()->getNom(), 'gereBD/showAuteur?id='.$scenariste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
	  		if ($scenariste->getAuteur()->getUtilisateur()): 
				if ($sf_user->getAttribute('id')==$scenariste->getAuteur()->getUtilisateur()->getId()): 
	   					 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$scenariste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
		      	 endif; 
	      	 else: 
				 if ($sf_user->hasCredential('admin')): 
		   					 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$scenariste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
		      	 endif;
	      	 endif; 
}
?>
</td></tr>
<tr><td>Coloriste:</td><td>   
<?php 
$cColoriste = new Criteria();
$cColoriste->add(AuteuralbumPeer::COLORISTE, 1);
$rColoriste=$bd->getAuteuralbums($cColoriste);
foreach ($rColoriste as $coloriste) {
	echo link_to($coloriste->getAuteur()->getNom(), 'gereBD/showAuteur?id='.$coloriste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
  	if ($coloriste->getAuteur()->getUtilisateur()): 
		if ($sf_user->getAttribute('id')==$coloriste->getAuteur()->getUtilisateur()->getId()): 
   				 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$coloriste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif; 
       else: 
		 if ($sf_user->hasCredential('admin')): 
   					 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$coloriste->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif;
       endif; 
}
?></td></tr>
<tr><td>Dessinateur:</td><td>   
<?php 
$cDessinateur = new Criteria();
$cDessinateur->add(AuteuralbumPeer::DESSINATEUR, 1);
$rDessinateur=$bd->getAuteuralbums($cDessinateur);
foreach ($rDessinateur as $dessinateur) {
	echo link_to($dessinateur->getAuteur()->getNom(), 'gereBD/showAuteur?id='.$dessinateur->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
  	if ($dessinateur->getAuteur()->getUtilisateur()): 
		if ($sf_user->getAttribute('id')==$dessinateur->getAuteur()->getUtilisateur()->getId()): 
   				 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$dessinateur->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif; 
       else: 
		 if ($sf_user->hasCredential('admin')): 
   					 echo link_to (image_tag('bt_modifier', array('border' => 0)), 'gereBD/editAuteur?id='.$dessinateur->getAuteur()->getId().'&sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher'));
      	 endif;
       endif; 
}
?></td></tr>

<tr><td>Date parution:</td><td><?php echo $bd->getDateParu() ?></td></tr>
<tr><td>R�sum�:</td><td><?php echo html_entity_decode($bd->getHistoire()) ?></td></tr>
<tr><td>Commentaire:</td><td><?php echo html_entity_decode($bd->getCommentaire()) ?></td></tr>
<tr><td>Date d�p�t l�gal:</td><td><?php echo $bd->getDepotLegal() ?></td></tr>
<tr><td>ISBN:</td><td><?php echo $bd->getISBN() ?></td></tr>
<tr><td>ISSN:</td><td><?php echo $bd->getISSN() ?></td></tr>
<tr><td>Nombre de pages:</td><td><?php echo $bd->getNbrePage() ?></td></tr>

<?php if ($sf_flash->has('messageFin')): ?>
	<tr><td></td><td><?php echo $sf_flash->get('messageFin') ?></td></tr>
<?php endif; ?>
</tbody>
</table>

