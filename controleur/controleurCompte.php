<?php

class ControleurCompte {

  public static function afficher ()
  {
        $title= "Compte ";
        include(Session::urlMenu());
        include("vue/pageCompte/pageCompte.php");
        include("vue/pageFooter/htmlfooteur.html");
  }




}



?>
