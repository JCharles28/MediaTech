<?php

class ControleurAccueil {

  public static function afficher (){
  $title= "acceuil";
  include("vue/header/headerAdmin.html");
  include ("vue/pageAcceuil/pageAcceuil.html");
  include ("vue/pageFooter/htmlfooteur.html");

  }




}



?>
