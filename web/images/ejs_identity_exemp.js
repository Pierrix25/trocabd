/*
Gestion de bannire
SCRIPT EDITE SUR L'EDITEUR JAVASCRIPT
http://www.editeurjavascript.com
*/


function ejs_img_fx(img){	
	if(img && img.filters && img.filters[0]){
		img.filters[0].apply();
		img.filters[0].play();
	}
}


ejs_banurl = new Array;
ejs_banimageUrl=new Array;

ejs_banimageUrl[0] = "../creation_logo/Exemple1- Logo_26M.gif";
ejs_banurl[0] = "";

ejs_banimageUrl[1] = "../creation_logo/Exemple2- Logo_26M.gif";
ejs_banurl[1] = "";

ejs_banimageUrl[2] = "../creation_logo/Exemple3-Logo_26M.gif";
ejs_banurl[2] = "";

ejs_banimageUrl[3] = "../creation_logo/Exemple4-Logo_26M.gif";
ejs_banurl[3] = "";


affiche = false;

function AffichePub()
   {
   if(!affiche)
      {
      numimage= Math.round(Math.random()*(ejs_banurl.length-1));
      document.write ('<A HREF="#" onClick="window.open(ejs_banurl[numimage],\'_blank\')"><IMG SRC="' + ejs_banimageUrl[numimage] + '" style="filter:progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=100,Duration=1)" onLoad="ejs_img_fx(this)" BORDER=0 NAME=ejs_banpub></A>')
      affiche = true;
      }
   else
      {
      if(numimage == (ejs_banurl.length-1))
         numimage = 0;
      else
         numimage++;
      document.ejs_banpub.src=ejs_banimageUrl[numimage];
      }
   setTimeout("AffichePub()",5000);
   }

AffichePub();
