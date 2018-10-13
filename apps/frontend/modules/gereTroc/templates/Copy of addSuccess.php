<?php use_helper('Javascript') ?>
<?php foreach ($monPanier->getResults() as $element): ?> 
    <?php echo '<li id='.$element->getId().' style="width:100px; height:100px; background:#7baaed; border:1px solid #333;"></li>' ?>
<?php endforeach; ?>
