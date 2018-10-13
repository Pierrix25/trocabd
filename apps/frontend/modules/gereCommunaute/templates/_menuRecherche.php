
<!--  custom menu connection -->
<?php $param='' ?>
<?php if  ($sf_request->hasParameter('sort')):?>
<?php      $param='?sort='.$sf_request->getParameter('sort') ?>
<?php else:?>
<?php      $param='?sort=Nom' ?>
<?php endif; ?>
<?php echo form_tag('gereCommunaute/recherche'.$param, array('name' => 'formRecherche')) ?>
<div class="roundedcornr_box_508182">
   <div class="roundedcornr_top_508182"><div></div></div>
      <div class="roundedcornr_content_508182">
Rechercher : <?php echo input_tag('rechercher', $rechercher) ?>
<?php echo submit_image_tag('ok_menu.gif', array('border' => 0)) ?>
      </div>
   <div class="roundedcornr_bottom_508182"><div></div></div>
</div>		

</form>
