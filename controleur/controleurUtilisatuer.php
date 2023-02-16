<?php
require_once("Model/Utilisateur.php");
require_once("Model/modele.php");

class ControleurUtilisatuer {

    public static function allUser(){

        $tab_u = Utilisateur::getAllUtilisateurs();

        return  $tab_u;
    }
    public static function creerUtilisateur() {
      $titre = "création utilisateur";
      $l = $_GET["indentifiant"];
      $m = $_GET["creeUnMotDePasse"];
      $n = $_GET["nom"];
      $p = $_GET["prenom"];
      $e = $_GET["mail"];
     $t = $_GET["tel"];
    $nomType = $_GET["Statut"];
        $numType=Utilisateur::checkTtypeNumUtilisateur($nomType);
      $b = Utilisateur::addUtilisateur($l,$m,$n,$p,$e,$t,$numType);
      if ($b)
        self::afficherFormulaireConnexion();
      else {
        self::afficherFormulaireinscription();
      }
    }

    public static function afficherFormulaireConnexion() {
      $titre = "formulaire de connexion";
      include("vue/pageconnexion/pageConexion.php");
    }
        public static function afficherFormulaireinscription(){
            $titre = "formulaire de inscription";
        include("vue/pageInscription/pageInscrition.php");
    }
    public static function connecterUtilisateur() {
          $l = $_GET["id_utilisateur"];
          $m = $_GET["mdp_utilisateur"];
          if (Utilisateur::checkMDP($l,$m)) {

              $_SESSION["id_utilisateur"] = $l;
              $obj = Utilisateur::getObjetById($l);
              $_SESSION["isAdmin"] = $obj->isAdmin();
              include(Session::urlMenu());
              include("vue/pageAcceuil/pageAcceuil.php");
              include("vue/pageFooter/htmlfooteur.html");

          } else {
              include("vue/pageconnexion/pageConexion.php");
          }
      }

      public static function suppUti() {
        $l = $_GET["id_utilisateur"];
        Utilisateur::deleteObjetById($l);
      }


    public static function deconnecterUtilisateur() {
          session_unset();
          session_destroy();
          setcookie(session_name(),'',time()-1);
          self::afficherFormulaireConnexion();
      }
}

?>
