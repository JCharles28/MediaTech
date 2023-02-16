<?php
require_once ("Model/Ouvrage.php");
class ControleurNosLivres
{
	public static function lire_ouvrage()
	{
		include ("vue/header/header.html");
		$title = 'Nos Livres';
		
		$tab_ouvrage = Ouvrage::getAll();	
		foreach ($tab_ouvrage as $o) {
		$o->afficher();
	}
		include("vue/pageNosLivres/nosLivres.php");
		include ("vue/pageFooter/htmlfooteur.html");
        }
   }
?>
