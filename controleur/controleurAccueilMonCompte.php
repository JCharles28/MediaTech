<?php

class ControleurAccueilMonCompte {

  public static function afficher (){
  $title= "acceuil";
  include("vue/header/headerMonCompte.html");
  include(Session::urlMenu());
  include("vue/pageAcceuil/pageAcceuil.php");
  include("vue/pageFooter/htmlfooteur.html");
  }
}
?>
