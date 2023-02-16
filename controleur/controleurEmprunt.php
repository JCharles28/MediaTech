<?php

// insertion des modèles
require_once("Model/Session.php"); 
require_once("Model/modele.php");
require_once("Model/emprunt.php");
/*
require_once("modele/ouvrage.php");
require_once("modele/auteur.php");
require_once("modele/maisonedition.php");
*/


// définition du contrôleur Emprunt
class ControleurEmprunt {


  public static function lireEmprunts()
  {
    $titre = "Les Emprunts";
    $tab_e = Emprunt::getAllEmprunts();

    // construction du tableau de liens pour l'affichage
    $tabAff = array();
    foreach($tab_e as $e)
    {
        $no =  $e->get('nom_ouvrage');
      $dd = $e->get('date_debut');
      $df= $e->get('date_fin');
      $na =  $e->get('nom_auteur');
      $numEx =  $e->get('num_exemplaire');
      $nomEd =  $e->get('nom_edition');
      $img = $e->get('img_couverture');
      $lienDetails = "routeur.php?controleurEmprunt=controleurEmprunt{$emprunt}&action=lireEmprunts&$nom_ouvrage= $no&$date_debut=$dd&$date_fin=$df&$nom_auteur=$na&$num_exemplaire=$numEx&$nom_edition=$nomEd&$img_couverture=$img";

   }
      $tabAff[] = "
<div class=“block-emprunt”>
    <div class='img'> $this->img </div>
    <div class=“descriptionEmprunt”>
         <p id='' > Livre : $this->no</p>
            <p id=''> $this->na | Auteur </p>
            <p id=''> Edité par $this->nomEd </p>
            <p id=''> Date de prêt : $this->dd </p>
           <p id=''> Date de rendu : $this->df </p>
    </div>

    <a href=' $this->lienDetails'>
         <input type='button' id='détails'>  </input>
    </a>
</div> ";
    }
    
    include(Session::urlMenu());
    include("vue/emprunt/desEmprunts.php");
    include("vue/pageFooter/htmlfooter.html");
  }

  public static function lireEmprunt() {
    $titre = "une Emprunt";
    $i = $_GET["id_utilisateur"];
    $obj = Emprunt::getEmpruntByUtili($i);
    
    include("vue/debut.php");
    include("vue/menu.html");
    if (!$obj) {
      $message = "L'emprunt effectué par l'utilisateur n° $i n'existe pas dans la base !";
      include("vue/erreur.php");
    }
    else
      include("vue/unEmprunt.php");
    include("vue/fin.html");
  }

/* Fonction anonyme : vérifier l'état de l'exemplaire voulant être emprunté */
$etatExemp = function ($numExemp) {
  $req = "SELECT * FROM EXEMPLAIRE NATURAL JOIN ETAT WHERE num_exemplaire = :numExemp AND niveau_etat  != '1' AND  niveau_etat  != '2' ";
  $result = Connexion::pdo()->prepare($req);
  $result->bindValue(':numU', $numU);
  $result->execute();
  return $result->rowCount(); // retourne le nombre de lignes affectées par la requête
};

/* Fonction anonyme : vérifier la disponibilité d'un exemplaire */
$exempDispo = function ($numExemp) {
  $req = "SELECT * FROM EXEMPLAIRE WHERE num_exemplaire = :numExemp AND empruntable = '1' ;";
  $result = Connexion::pdo()->prepare($req);
  $result->bindValue(':numExemp', $numExemp);
  $result->execute();
  $r = $result->fetch(PDO::FETCH_CLASS, 'Exemplaire');
  return $r;
};


/* Fonction anonyme : insérer un nouvel emprunt */
$nouvelEmprunt = function ($dateDebut, $numU, $numExemp) {
  $req = "INSERT INTO EMPRUNTE (date_debut, id_utilisateur, num_exemplaire) VALUES (:dateDebut, :numU, :numExemp)";
  $result = Connexion::pdo()->prepare($req);
  $result->bindValue(':dateDebut', $dateDebut);
  $result->bindValue(':numU', $numU);
  $result->bindValue(':numExemp', $numExemp);
  $result->execute();
  return $result->rowCount(); // retourne le nombre de lignes affectées par la requête
};


/* Fonction anonyme : mettre à jour le statut "empruntable" de l'exemplaire */
$MAJempruntable = function ($emp, $numExemp) {
  $req = "UPDATE EXEMPLAIRE SET empruntable = :emp WHERE num_exemplaire = :numExemp";
  $result = Connexion::pdo()->prepare($req);
  $result->bindValue(':emp', $emp);
  $result->bindValue(':numExemp', $numExemp);
  $result->execute();
  return $result->rowCount(); // retourne le nombre de lignes affectées par la requête
};

/* Fonction anonyme : vérifier que le nombre d'emprunt de l'utilisateur est inférieur à 10 */
$MAJnbEmprunts = function ($numU) {
  $req = "SELECT UTILISATEUR SET nbemprunt = nbemprunt + 1 WHERE id_utilisateur = :numU AND nbemprunt != '10' ";
  $result = Connexion::pdo()->prepare($req);
  $result->bindValue(':numU', $numU);
  $result->execute();
  return $result->rowCount(); // retourne le nombre de lignes affectées par la requête
};


/* FONCTION PRINCIPALE : emprunter un exemplaire */
public static function Emprunter($dateDebut, $numU, $numExemp, $empruntable)
{
  $etat = $etatExemp($numExemp)
if ($etat)
{
  $exemp = $exempDispo($numExemp);
  if (!$exemp) {
      return "Exemplaire non disponible";
  }

  $utilisateur = $utilisateurReconnu($numU);
  if (!$utilisateur) {
      return "Utilisateur non reconnu";
  }

  $nouvelEmprunt = $nouvelEmprunt($dateDebut, $numU, $numExemp);
  if (!$nouvelEmprunt) {
      return "Erreur lors de l'insertion de l'emprunt";
  }

  $MAJempruntable = $MAJempruntable($empruntable, $numExemp);
  if (!$MAJempruntable) {
      return "Erreur lors de la mise à jour de l'exemplaire";
  }

  $MAJnbEmprunts = $MAJnbEmprunts($numU);
  if (!$MAJnbEmprunts) {
      return "Erreur lors de la mise à jour du nombre d'emprunts de l'utilisateur";
  }
  return "Emprunt effectué avec succès";
}
else "Emprunt impossible : l'état de l'exemplaire en question est dégradé." ;
}



}
?>
