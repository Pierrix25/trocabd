<ul>
    <?php foreach($resultats as $obj): ?>
        <li id="<?php echo $obj->getId() ?>"><?php echo $obj->getNom() ?></li>
    <?php endforeach; ?>
</ul>