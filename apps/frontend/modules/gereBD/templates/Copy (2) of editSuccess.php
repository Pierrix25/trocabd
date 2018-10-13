<?php
  use_helper('sfExtjs2'); //(Probably OBSOLETE, I don't think this is necessary anymore)
  $sfExtjs2Plugin = new sfExtjs2Plugin(array('theme'=>'gray'), array('css' => '/sfExtjsThemePlugin/css/symfony-extjs.css'));
$tab1info = "Tab content to go here e.g. a welcome page";
$tab2info = "Tab content to go here e.g. a data grid";

$sfExtjs2Plugin->load();
$sfExtjs2Plugin->begin();

// **************************************
// Application
// **************************************
$sfExtjs2Plugin_App_viewport = $sfExtjs2Plugin->Viewport(array
(
  'layout' => 'border',  'items'  => array
  (

    $sfExtjs2Plugin->TabPanel(array
    (
      'id'=>'tonyCp',
      'region'=>'center',
      'margins'=>'0 5 0 0',
      'items'=>array(
        $sfExtjs2Plugin->Panel(array(
          'title'=>'First tab',
          'html'=>$tab1info
        )),
        $sfExtjs2Plugin->Panel(array(
          'title'=>'Second tab',
          'html'=>$tab2info
        ))
      )
    ))
  )
));

$sfExtjs2Plugin->beginApplication(array
(
  'name'   => 'App',
  'public' => array(
    'init' => $sfExtjs2Plugin->asMethod("$sfExtjs2Plugin_App_viewport;"
  )
)
));

$sfExtjs2Plugin->endApplication();
$sfExtjs2Plugin->end('Ext.onReady(App.init, App);');
?>
