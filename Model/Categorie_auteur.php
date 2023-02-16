<?php
class Catégorie_a extends Modele {
  protected private $objet = "CATEGORIE_AUTEUR" ;
  
	protected $num_profession;
	protected $nom_profesion;
  protected $sesAuteurs; 
/*
	// getter
  public function get_num_profession() {return $this->num_profession;}
  public function get_nom_profesion() {return $this->nom_profesion;}
 
	// setter
  public function set_num_profession($num) {return $this->num_profession = $num;}
  public function set_nom_profesion($nom) {return $this->nom_profesion = $nom;}

	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($num = NULL, $nom = NULL) 
  {
		if (!is_null($num) && !is_null($nb) && !is_null($id) ) {
			$this->num_profession = $num ;
			$this->nom_profesion = $nom ;
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>numProfesion =  (		$this->num_profession $this->nom_profesion) </p>";
	}
}
?>

