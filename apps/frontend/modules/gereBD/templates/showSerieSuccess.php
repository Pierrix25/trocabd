<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
Consultation des Series
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>		

<table>
<tbody>
<tr><td>Serie:</td><td><?php echo $serie->getNom() ?></td></tr>
<tr><td>Histoire:</td><td><?php echo html_entity_decode($serie->getHistoire()) ?></td></tr>
<tr><td>Commentaire:</td><td><?php echo html_entity_decode($serie->getCommentaire()) ?></td></tr>
<tr><td> </td><td><?php echo ($serie->getPhoto1()==" ")?" ":image_tag($serie->getPhoto1()) ?></td></tr>
<tr><td> </td><td><?php echo ($serie->getPhoto2()==" ")?" ":image_tag($serie->getPhoto2()) ?></td></tr>
<tr><td>Site Web:</td><td><?php echo $serie->getSiteWeb1() ?></td></tr>
<tr><td></td><td><?php echo $serie->getSiteWeb2() ?></td></tr>
<?php if ($sf_flash->has('messageFin')): ?>
	<tr><td></td><td><?php echo $sf_flash->get('messageFin') ?></td></tr>
<?php endif; ?>
</tbody>
</table>