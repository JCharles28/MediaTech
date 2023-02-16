<?php

class ControleurCompteAdmin {

  public static function afficher ()
  {
        $title= "Compte Administrateur";
        include("vue/header/headerAdmin.html");
        include("vue/pageCompte/pageCompteAdmin.php");
        include("vue/pageFooter/htmlfooteur.html");
  }




}



?>
