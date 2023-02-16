<?php  // faut faire ca pour tou les page du site

require_once("config/connexion.php");
require_once("Model/Session.php");
  Connexion::connect();
if (isset($_GET["page"])){
if ($_GET["page"]=="connexioon"){ // il faut cree une variable dans le pafe qui inpunt ca
    require_once("controleur/controleurUtilisatuer.php");
    ControleurUtilisatuer::afficherFormulaireConnexion();
    }
else if ($_GET["page"]=="inscription"){
    require_once("controleur/controleurUtilisatuer.php");
    ControleurUtilisatuer::afficherFormulaireinscription();
    }
else if ($_GET["page"]=="notreBibli" ){
    require_once("controleur/controleurNotreBibli.php");
    ControleurNotreBibli::afficher();
    }
else if ($_GET["page"]=="nosLivre"){
    require_once("controleur/ControleurNosLivres.php");
    ControleurNosLivres::lire_ouvrage();
    }
else if ($_GET["page"]=="horaires"){
    require_once("controleur/controleurHoraires.php");
    ControleurHoraire::afficher();
    }
else if ($_GET["page"] == "contact"){
    require_once("controleur/controleurContact.php");
    ControleurContact::afficher();
}
else if ($_GET["page"]== "connecterUtilisateur"){
    require_once("controleur/controleurUtilisatuer.php");
    ControleurUtilisatuer::connecterUtilisateur();
}
else if ($_GET["page"]=="deco"){
    require_once("controleur/controleurUtilisatuer.php");
        ControleurUtilisatuer::deconnecterUtilisateur();

}
else if ($_GET["page"]=="creerUtilisateur"){
    require_once("controleur/controleurUtilisatuer.php");
    ControleurUtilisatuer::creerUtilisateur();
}
else if ($_GET["page"]=="pageMonCompte"){
    require_once("controleur/controleurCompteAdmin.php");
    ControleurCompteAdmin::afficher();
}
    else if ($_GET["page"]=="moncompte"){
        require_once("controleur/controleurCompte.php");
        ControleurCompte::afficher(); 
            
    }
    else if ($_GET["page"]=="emprunt" ){
        require_once("controleur/controleurEmprunt.php");
        ControleurEmprunt::lireEmprunts();

    }

    else if ($_GET["page"]=="supprUti" ){
      require_once("controleur/controleurUtilisatuer.php");
      ControleurUtilisatuer::suppUti();
    }
    
    
    
}
else {
    require_once("controleur/controleurAccueil.php");
    ControleurAccueil::afficher();
    
    
}
?>
