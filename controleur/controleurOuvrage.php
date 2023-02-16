
<?php
// insertion du modèle Utilisateur

require_once("Model/Ouvrage.php");

// définition du contrôleur Utilisateur
class ControleurOuvrage {

  // la méthode de récupération et d'affichage de tous les utilisateurs
  public static function lireLesOuvrages() {
    $tab_u = Ouvrage::getAll();
    // construction du tableau de liens pour l'affichage
    $tabAff = array();
    foreach($tab_u as $u) {
      $num = $u->get('num_ouvrage');
      echo "<div class = 'li'><a href = 'index.php?action=lireOuvrage&id=$this->num_ouvrage'><img src = $this->img_couverture></a> <p>".$t."</p></div>";
     $lienDetails = "<a class='bouton' href=\"routeur.php?controleur=controleurOuvrage&action=lireUtilisateur&login=$num\"> détails </a>";

       $tabAff[] = "<div class='ligne'><div>utilisateur $log</div><div> $lienDetails</div></div>";
    }
    include("../vue/header/header.html"); 
    include("../vue/Ouvrage/lesOuvrages");
    include("../vue/pageFooter/htmlfooteur.html");
  }

  // la méthode de récupération de l'utilisateur
  // dont le login est passé en GET
  public static function lireOuvrage() {
    $titre = "un utilisateur";
    $l = $_GET["login"];

    echo "<div class = 'li'><a href = 'index.php?action=lireOuvrage&id=$this->num_ouvrage'><img src = $this->img_couverture></a> <p>".$t."</p></div>";
      
    include("vue/header/debut.php");
      include("vue/Ouvrage/unOuvrage.php");
    include("vue/fin.html");
  }

}
?>