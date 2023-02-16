<?php 

class ControleurHoraire {

  public static function afficher (){
  $title= "NosHoraire"; 
  include("vue/header/header.html");
  include("vue/pageHoraire/pageNosHoraires.html");
  include("vue/pageFooter/htmlfooteur.html"); 
  }
}
?> 