<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>
<?php include_slot('auto_discovery_link_tag') ?>
<?php use_helper('Javascript','GMap') ?>
<?php // use_helper('Javascript') ?>
<link rel="shortcut icon" href="/favicon.ico" />
<script type="text/javascript">
    window.onload = function() {
   	   $('track1').style.backgroundImage = affectRate($('note').value);
       new Control.Slider('handle1' , 'track1',
      {
           range: $R(0,5),
           values: [0,1,2,3,4,5],
           onChange: function(v) {
           	   affectRate(v);
               $('note').value = v;
          },
           onSlide: function(v) {
           	   $('track1').style.backgroundImage = affectRate(v);
               $('note').value = v;
          }
       } );
       function affectRate(v) {
               if (v == 0) {
                  return("url(/images/rate_0.gif)");
               }
               if (v == 1) {
                  return("url(/images/rate_1.gif)");
               }
               if (v == 2) {
                   return("url(/images/rate_2.gif)");
               }
               if (v == 3) {
                   return("url(/images/rate_3.gif)");
               }
               if (v == 4) {
                   return("url(/images/rate_4.gif)");
               }
               if (v == 5) {
                   return("url(/images/rate_5.gif)");
               }
       };
}
</script>
</head>
<body>
<table border=0 width=100% >
<tr align="center" valign="top" >
<td align="left" valign="top"><?php echo image_tag('logo.gif', array('border' => 0, 'size' => '110x90')) ?></td><td align="left"  width="60%"><span class="Style6">T</span><span class="Style5">r</span><span class="Style4">o</span><span class="Style5">c</span> <span class="Style4">&agrave;</span> <span class="Style6">B</span><span class="Style4">D</span>
</td>
</tr>
<tr>
<td valign="top" class="menuCommun">
<?php echo mail_to('trocatout@gmail.com' , 'Ecrivez-nous', 'encode=true') ?>  
<?php // echo link_to('Forum' , 'sfSimpleForum/index') ?> 
<?php // echo link_to('FAQ' , 'sfFaq/index') ?>
<?php if ($sf_user->hasCredential('admin')): ?>
	<?php echo link_to('Initialisation sfGuardUser' , 'gereUtilisateur/InitAllSfGuardUser') ?> 
<?php endif; ?>
</td>
<td class="cheminDeFer" align="left" valign="top" >
	<?php include_partial('global/cheminDeFer') ?>
</td>

<td class="cheminDeFer" align="left" valign="top" >
	<?php if ($sf_user->isAuthenticated()): ?>
	<?php echo 'Bienvenue '.$sf_user->getUserName() ?>
	<?php endif; ?>
</td>
</tr>

<tr>
<td class="actionRecherche" align="left" valign="top" width="20%" >
<div class="roundedcornr_box_304127">
   <div class="roundedcornr_top_304127"><div></div></div>
      <div class="roundedcornr_content_304127">
<table>
<tr>
<td>
<?php include_component('gereBD','menuRecherche') ?>
</td>
</tr>
<tr>
<td class="actionMenuContextuel">  
	<?php if ($sf_flash->has('message')): ?>
			<?php $mess = $sf_flash->get('message') ?>
	<?php else: ?>
			<?php $mess =  " " ?>
	<?php endif; ?>
	<?php if ($sf_flash->has('login')): ?>
			<?php $id = $sf_flash->get('login') ?>
	<?php else: ?>
			<?php $id =  "votre identifiant" ?>
	<?php endif; ?>
	<?php if ($sf_flash->has('pwd')): ?>
			<?php $p = $sf_flash->get('pwd') ?>
	<?php else: ?>
			<?php $p =  "votre mot de passe" ?>
	<?php endif; ?>
	<?php if ( $sf_user->isAuthenticated() ): ?>
		<?php echo link_to('Déconnecter', 'sfGuardAuth/signout') ?>
	<?php else: ?>
		<?php include_component ('sfGuardAuth', 'sideSignin') ?>
		<?php if (!($sf_request->getContext()->getModuleName().'/'.$sf_request->getContext()->getActionName()=='gereUtilisateur/create')):?>
 	 		<?php echo link_to('Inscrivez-vous', 'gereUtilisateur/create') ?>
 	 		<?php // echo link_to('Mot de passe oubié', 'gereOublie/edit') ?>
		<?php endif; ?>
	<?php endif; ?>
	</td>
	</tr>
	<tr>
	<?php 
	if (($sf_request->getContext()->getModuleName()=='gereBD') and ($sf_request->getContext()->getActionName()=="recherche" ))
	{
 include_map($map,array('width'=>'250px','height'=>'150px')); 
		}
	 ?>
	</tr>
	<tr>
<td class="actionMenuContextuel">
	<?php  include_partial('global/menuContextuel') ?>
</td>
</tr>
</table></div>
   <div class="roundedcornr_bottom_304127"><div></div></div>
</div>
</td>

<td colspan="2" align="left" valign="top" width="100%" >
<div class="roundedcornr_box_114025">
   <div class="roundedcornr_top_114025"><div></div></div>
      <div class="roundedcornr_content_114025">
	<?php echo $sf_data->getRaw('sf_content') ?>
      </div>
   <div class="roundedcornr_bottom_114025"><div></div></div>
</div>
</td>

</tr>
</table>
<!-- Javascript included at the bottom of the page -->
<?php 	if ((($sf_request->getContext()->getModuleName()=='accueil') and ($sf_request->getContext()->getActionName()=="troqueur" ))
	or 	  (($sf_request->getContext()->getModuleName()=='gereBD') and ($sf_request->getContext()->getActionName()=="recherche" ))
	or    (($sf_request->getContext()->getModuleName()=='accueil') and ($sf_request->getContext()->getActionName()=="visite" ))
	or    (($sf_request->getContext()->getModuleName()=="gereUtilisateur") and ($sf_request->getContext()->getActionName()=="showmap" )))
	{
 include_map_javascript($map); 
		}
?>
</body>
</html>

