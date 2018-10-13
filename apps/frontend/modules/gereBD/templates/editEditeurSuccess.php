<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<?php use_helper('Object') ?>
<?php use_helper('Validation') ?>
<?php use_helper('Javascript') ?>

<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
<?php if ($editeur->getId()): ?>
Modification Editeur
<?php else: ?>
Saisie Editeur
<?php endif; ?>
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>	


<?php echo form_tag('gereBD/updateEditeur?sort='.$sf_request->getParameter('sort'), array('name' => 'formEditEditeur')) ?>
<?php echo object_input_hidden_tag($editeur, 'getId') ?>
<table>
<tbody>
<tr><td><?php echo form_error('editeur') ?></td></tr>
<tr><td>Editeur:</td><td><?php echo object_input_tag($editeur, 'getNom') ?></td></tr>
<tr><td><?php echo form_error('adresse1') ?></td></tr>
<tr><td>Adresse:</td><td><?php echo object_input_tag($editeur, 'getAdresse1') ?></td></tr>
<tr><td><?php echo form_error('adresse2') ?></td></tr>
<tr><td></td><td><?php echo object_input_tag($editeur, 'getAdresse2') ?></td></tr>
<tr><td><?php echo form_error('cp') ?></td></tr>
<tr><td>Code Postal:</td><td><?php echo object_input_tag($editeur, 'getCP') ?></td></tr>
<tr><td><?php echo form_error('ville') ?></td></tr>
<tr><td>Ville:</td><td><?php echo object_input_tag($editeur, 'getVille') ?></td></tr>
<tr><td><?php echo form_error('pays') ?></td></tr>
<tr><td>Pays:</td><td><div id='txNomPayx'><?php
echo input_hidden_tag('idNomPays', $idPays);
echo input_auto_complete_tag('nomPays',
               $nomPays,
               'gereBD/autoCompleteNomPays',
               array('autocomplete' => 'on'),
               array('use_style' => true, 'after_update_element' => "function (inputField, selectedItem) { $('idNomPays').value = selectedItem.id; }"));
               ?>
</div></td><td>
<tr><td><?php echo form_error('siteweb') ?></td></tr>
<tr><td>Site web :</td><td>		 <?php echo object_input_tag($editeur, 'getSite') ?></td></tr>
<tr><td><?php echo form_error('photo1') ?></td></tr>
<tr><td>Photo 1:</td><td>             <?php echo image_tag($editeur->getPhoto1(),'size=150x200').' '.input_file_tag('photo1') ?></td></tr>
<tr><td><?php echo form_error('photo2') ?></td></tr>
<tr><td>Photo 2:</td><td>             <?php echo image_tag($editeur->getPhoto2(),'size=150x200').' '.input_file_tag('photo2') ?></td></tr>
<tr><td><?php echo form_error('telephone') ?></td></tr>
<tr><td>T�l�phone:</td><td><?php echo object_input_tag($editeur, 'getTel') ?></td></tr>
</tbody>
</table>
<?php echo submit_image_tag('bt_valider', array('border' => 0)) ?>
</form>
&nbsp;<?php echo link_to(image_tag('bt_abandonner', array('border' => 0)), 'gereBD/rechercheEditeur') ?>