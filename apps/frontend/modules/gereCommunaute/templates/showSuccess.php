<?php
// auto-generated by sfPropelCrud
// date: 2008/01/08 10:27:03
?>
<div class="roundedcornr_box_719771">
   <div class="roundedcornr_top_719771"><div></div></div>
      <div class="roundedcornr_content_719771">
Consultation Communaute
      </div>
   <div class="roundedcornr_bottom_719771"><div></div></div>
</div>		

<table>
<tbody>
<tr><td>Cr�ateur :</td><td><?php echo $communaute->getutilisateur()->getLogin() ?></td>
<tr><td>Communaute:</td><td><?php echo $communaute->getNCommunaute() ?></td></tr>
<tr><td>Devise:</td><td><?php echo $communaute->getDevise() ?></td></tr>
<tr><td>Description:</td><td><?php echo $communaute->getDescription() ?></td></tr>
<tr><td>Membres:</td><td>   
<?php 
$rMembre=$communaute->getMembres();
foreach ($rMembre as $membre) {
	  		echo '</BR>'.$membre->getUtilisateur()->getlogin();
	  		if ($membre->getMembre()==0):
	  			echo ' (invit�)';
	  		endif;
	  	}
?></td></tr>

<?php if ($sf_flash->has('messageFin')): ?>
	<tr><td></td><td><?php echo $sf_flash->get('messageFin') ?></td></tr>
<?php endif; ?>
</tbody>
</table>