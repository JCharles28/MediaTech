<?php
/* insertion du modèle Commentaire */
require_once("Model/Commentaire.php"); 

class ControleurCommentaire
{
   // $numComentaire = $u->get('num_commentaire');

  // récupérer et afficher toutes les commentaires
  public static function lireCommentaires()
  {
    $titre = "Les commentaires";
    $tab_c = Commentaire::getAllCommentaires();
    include("../vue/debut.php");
    include("../vue/voiture/lesVoitures.php");
    include("../vue/fin.html");
  }

  // récupérer et afficher un commentaire
  public static function lireCommentaire() {
    $titre = "Un commentaire";
    $i = $_GET["num_commentaire"];
    $v = Voiture::getVoitureByImmat($i);
    include("../vue/debut.php");
    include("../vue/menu.html");
    if (!$v)
      include("../vue/voiture/erreur.php");
    else
      include("../vue/voiture/uneVoiture.php");
    include("../vue/fin.html");
  }



  
/* lire un commentaire */
public stati 
  
/* lire les commentaires */

  
/* ajouter un commentaire */

  
/* supprimer un commentaire */

}
?>