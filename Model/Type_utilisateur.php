<?php

class Type_utilisateur extends Modele
{
    protected static $objet = "TYPE_UTILISATEUR" ;
  
    protected $nom_type_utilisateur ;
    protected $num_type_utilisateur ;
    protected $sesUtilisateurs;
    protected $sesDroits
    protected $temps_emprunt_max ;
/*
	// getters
  public function get_num_type_utilisateur() {return $this->num_type_utilisateur;}
  public function get_nom_type_utilisateur() {return $this->nom_type_utilisateur;}
  public function get_temps_emprunt_max() {return $this->temps_emprunt_max;}


	// setters
	public function set_num_type_utilisateur($n) {$this->num_ouvrage = $n;}
	public function set_nom_type_utilisateur($n) {$this->nom_ouvrage = $n;}
	public function set_temps_emprunt_max($d) {$this->temps_emprunt_max = $t;}



	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($num = NULL, $nom = NULL, $temps = NULL) {
		if (!is_null($num) && !is_null($nom) && !is_null($temps))
    {
			$this->num_type_utilisateur = $num;
			$this->num_type_utilisateur = $nom;
			 $this->temps_emprunt_max = $temps;
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>type de l'utilisateur est ($this->num_type_utilisateur, $this->type_utilisateur),le temps d'emprunt max est de $this->temps_emprunt_max jours </p>";
	}
}

?>