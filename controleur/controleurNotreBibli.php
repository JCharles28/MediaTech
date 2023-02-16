<?php 

class ControleurNotreBibli {

  public static function afficher (){
  $title= "NotreBibli"; 
  include("vue/header/header.html");
  include ("vue/pageNotreBibli/pageNotreBibli.html");
  include ("vue/pageFooter/htmlfooteur.html"); 
  }
}
?>