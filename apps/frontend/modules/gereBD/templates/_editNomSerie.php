<?php use_helper('Javascript') ?>

<!--  custom menu connection -->
<?php if (isset($objSerie)): ?>
  <?php echo input_auto_complete_tag('nomSerie', $objSerie->getNom(),
    'gereBD/autoCompleteNomSerie',
    array('autocomplete' => 'off'),
    array('use_style'    => true)
  ) ?>
<?php else: ?>
  <?php echo input_auto_complete_tag('nomSerie', '',
    'gereBD/autoCompleteNomSerie',
    array('autocomplete' => 'off'),
    array('use_style'    => true)
  ) ?>
<?php endif; ?>
