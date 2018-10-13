<?php use_helper('Javascript') ?>
<?php foreach($liste as $poss_id => $bd): ?>
		<?php if (($sf_request->getContext()->getActionName()=="show") or ($sf_request->getContext()->getActionName()=="noter")): ?>
	        <?php echo link_to($bd['albumTitre'], 'gereBD/show?id='.$bd['albumId'].'&sortTroc=Collection') ?>
		<?php else: ?>
	        <?php echo link_to($bd['albumTitre'], 'gereBD/show?id='.$bd['albumId'].'&sortTroc=Collection').' '.link_to_remote(image_tag('moins.gif'),array('update' => $contexte, 'url' => 'gereTroc/substr'.$contexte.'?albumId=bd_'.$poss_id.'&titre='.$bd['albumTitre'])) ?>
		<?php endif; ?>
		<?php echo '<br>' ?>
<?php endforeach; ?>
