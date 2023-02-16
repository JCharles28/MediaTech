<?php

class ControleurAccueilAdmin {

  public static function afficher (){
  $title= "acceuil";
  include("vue/header/headerAdmin.html");
  include(Session::urlMenu());
  include("vue/pageAcceuil/pageAcceuil.php");
  include ("vue/pageFooter/htmlfooteur.html");
  }
}
?>
