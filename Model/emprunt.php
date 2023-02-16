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
public function get_num_exemplaire() {return $this->id_utilisateur;}
public function get_id_utilisateur() {return $this->mdp_utilisateur;}
public function get_date_debut() {return $this->prenom_utilisateur;}
public function get_date_fin() { return $this->nom_utilisateur }

	// setter
public function set_num_exemplaire() {return $this->id_utilisateur = ;}
public function set_id_utilisateur() {return $this->mdp_utilisateur = ;}
public function set_date_debut() {return $this->prenom_utilisateur = ;}
public function set_date_fin() { return $this->nom_utilisateur =  
  public function __construct ($dd = NULL, $df = NULL){
    if(!is_null($dd) && !is_null($df)){
    $this->$datedébut = $dd;
    $this->$datefin = $df;  
    }
    
}
                                */
  public function afficher getAllDateEmprunt()
  {
		echo "<p>Date du début ($this->datedébut) et Date de fin ($this->datefin) </p>";
	}
  	public static function getAllCommentaires()
  {
		// écriture de la requête
		$requete = "SELECT * FROM Date_e;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Date_e');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}
}