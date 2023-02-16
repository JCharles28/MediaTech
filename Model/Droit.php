                                           
<?php
class Droit extends Modele {
  protected static $objet = "DROIT" ;

	protected $num_droit;
	protected $nom_droit;
  protected $sesTypeUtilisateur;
/*
	// getters
  public function get_num_droit() {return $this->num_droit;}
  public function get_nom_droit() {return $this->nom_droit;}

	// setters
	public function setNum_droit($l) {$this->num_droit = $l;}
	public function setNom_droit($m) {$this->nom_droit = $m;}

	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL)
  {
		if (!is_null($id) && !is_null($m)) {
			$this->num_droit = $id;
			$this->nom_droit = $m;
		}
	}
  */

	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Droit ($this->num_droit $this->nom_droit)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
}
?>

