<?php 

class ControleurUtilisateur {
    
    public static function afficherFormulaireConnexion() {
      $titre = "formulaire de connexion";
      include("vue/pageConnexion/pageConnexion.php");
    }
    public static function connecterUtilisateur() {
          $titre = "connexion utilisateur";
          $l = $_GET["$id_utilisateur"];
          $m = $_GET["mdp_utilisateur"];
          if (Utilisateur::checkMDP($l,$m)) {
              $_SESSION["id_utilisateur"] = $l;
              $_SESSION["isAdmin"] = $obj->isAdmin();
              include("vue/heaser.php");
              include(Session::urlMenu());
              include("vue/pageAceuil/");
              include("vue/fin.html");
          } else {
              self::afficherFormulaireConnexion();
          }
      }
    
    public static function deconnecterUtilisateur() {
          session_unset();
          session_destroy();
          setcookie(session_name(),'',time()-1);
          self::afficherFormulaireConnexion();
      }
}

?>
