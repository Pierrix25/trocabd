<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<?php use_helper('Object') ?>
<?php use_helper('Validation') ?>

<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
<?php if ($serie->getId()): ?>
Modification de Serie
<?php else: ?>
Saisie de Serie
<?php endif; ?>
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>	


<?php echo form_tag('gereBD/updateSerie?sort='.$sf_request->getParameter('sort'), array('name' => 'formEditSerie')) ?>
<?php echo object_input_hidden_tag($serie, 'getId') ?>
<table>
<tbody>
<tr><td><?php echo form_error('serie') ?></td></tr>
<tr><td>Serie :</td><td>		 <?php echo object_input_tag($serie, 'getNom') ?></td></tr>
<tr><td><?php echo form_error('histoire') ?></td></tr>
<tr><td>Histoire :</td><td>				 <?php echo object_textarea_tag($serie, 'getHistoire', array ('rich' => true,)) ?></td></tr>
<tr><td><?php echo form_error('commentaire') ?></td></tr>
<tr><td>Commentaire :</td><td>		 <?php echo object_textarea_tag($serie, 'getCommentaire', array ('rich' => true,)) ?></td></tr>
<tr><td><?php echo form_error('siteweb1') ?></td></tr>
<tr><td>SiteWeb-1 :</td><td>		 <?php echo object_input_tag($serie, 'getSiteWeb1') ?></td></tr>
<tr><td><?php echo form_error('siteweb2') ?></td></tr>
<tr><td>SiteWeb-2 :</td><td>		 <?php echo object_input_tag($serie, 'getSiteWeb2') ?></td></tr>
<tr><td><?php echo form_error('photo1') ?></td></tr>
<tr><td>Photo 1 :</td><td>             <?php echo image_tag($serie->getPhoto1(),'size=150x200').' '.input_file_tag('photo1') ?></td></tr>
<tr><td><?php echo form_error('photo2') ?></td></tr>
<tr><td>Photo 2 :</td><td>             <?php echo image_tag($serie->getPhoto2(),'size=150x200').' '.input_file_tag('photo2') ?></td></tr>

</tbody>
</table>
<?php echo submit_image_tag('bt_valider', array('border' => 0)) ?>
</form>
<?php if ($serie->getId()): ?>
  &nbsp;<?php echo link_to(image_tag('bt_supprimer', array('border' => 0)), 'gereBD/delete?id='.$serie->getId().'&sort='.$sf_request->getParameter('sort'), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to(image_tag('bt_abandonner', array('border' => 0)), 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher').'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
<?php else: ?>
  &nbsp;<?php echo link_to(image_tag('bt_abandonner', array('border' => 0)), 'gereBD/recherche?sort='.$sf_request->getParameter('sort').'&rechercher='.$sf_request->getParameter('rechercher').'&filtrePossede='.$sf_request->getParameter('filtrePossede')) ?>
<?php endif; ?>