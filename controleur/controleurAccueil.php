<?php 

class controleurAccueil {

  public static function afficher (){
  $title= "accueil"; 
  include("vue/header/header.html");
  include ("vue/pageAcceuil/pageAcceuil.php");
  include ("vue/pageFooter/htmlfooteur.html"); 

  }



  
}



?>
