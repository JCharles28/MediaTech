<?php
 Class Emprunt extends Modele {
  protected static $objet = "EMPRUNT" ;
   
  protected $num_exemplaire; 
  protected $date_debut;
  protected $date_fin;
  protected $sonUtilisateur; // corespond objet utilisatuer
  protected $sesExemplaires; 
/*
// getter
public function get_num_exemplaire() {return $this->num_exemplaire;}
public function get_sonUtilisateur() {return $this->sonUtilisateur;}
public function get_date_debut() {return $this->date_debut;}
public function get_date_fin() { return $this->date_fin; }
public function get_sesExemplaires() { return $this->sesExemplaires ; } ;

// setter
public function set_num_exemplaire($i) {return $this->num_exemplaire = $i ;}
public function set_date_debut($i) {return $this->prenom_utilisateur = ;}
public function set_date_fin($i) { return $this->nom_utilisateur =  $i}
public function set_sonUtilisateur($i) {return $this->sesExemplaires = $i ;}

 
  public function __construct ($dd = NULL, $df = NULL)
{
    if(!is_null($dd) && !is_null($df))
    {
      $this->date_debut = $dd ;
      $this->date_fin = $df ;  
    }
    
}
                                */

  public static function getAllEmprunts()
  {
        // écriture de la requête
        $requete = "SELECT img_couverture, nom_ouvrage, nom_auteur, num_exemplaire, nom_edition, date_debut, date_fin FROM EMPRUNTE NATURAL JOIN  EXEMPLAIRE NATURAL JOIN OUVRAGE NATURAL JOIN ECRIT NATURAL JOIN AUTEUR NATURAL JOIN MAISON_EDITION ;";
    
    // envoi de la requête et stockage de la réponse
   $resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Date_e');
    $tableau = $resultat->fetchAll();
        return $tableau;
    }
}
