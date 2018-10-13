<?php use_helper('Javascript','GMap') ?>
<?php // use_helper('Javascript') ?>
<table>
<tr>
    <td valign="top" colspan="2">
	<br><br><br><p align="center"><font color="#FF0000" size="5"><b>Bienvenue sur votre espace perso</b></font></p><br>
	<b><font size="5" color="#FF6600">    consulter le catalogue de BD en cliquant <?php echo link_to('ici', 'gereBD/recherche?sort=Talbum&filtrePossede=N')?></font></b></td></tr>
  <tr>
    <td valign="top" >
</td>
    <td valign="top" >
</td>
  </tr>
  <tr>
    <td valign="top" >
	<?php 
	if (($sf_request->getContext()->getModuleName()=='accueil') and ($sf_request->getContext()->getActionName()=="troqueur" ))
	{
 			include_map($map,array('width'=>'400px','height'=>'250px')); 
		}
	 ?>
    </td>
    <td valign="top" >
     <?php include_partial('myNews', array('newsPager' => $newsPager)) ?>
	 <?php //include_component('sfSimpleCMS', 'embed', array('slug' => 'news')) ?></td>
  </tr>
  </table>

