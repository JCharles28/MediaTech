
<?php
class Auteur extends Modele {
  protected static $objet = "AUTEUR";
  
	protected $num_auteur;
	protected $nom_auteur;
	protected $num_edition;
  protected $sesProfesions; 
  protected $SesOuvrages;
  protected $saMaisonEdition;
/*
	// getter
  public function get_num_auteur() {return $this->num_auteur;}
  public function get_nom_auteur() {return $this->nom_auteur;}
  public function get_num_edition() {return $this->num_edition;}

	// setter
	public function setNum_auteur($l) {$this->login = $l;}
	public function setNom_auteur($m) {$this->mdp = $m;}
	public function setNum_edition($n) {$this->nom = $n;}

	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL, $n = NULL)
  {
		if (!is_null($id) && !is_null($m) && !is_null($n)) {
			$this->num_auteur = $id;
			$this->nom_auteur = $m;
			 $this->num_edition = $n;
		}
	}
  */

	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Auteur ($this->num_auteur $this->nom_auteur)</p>";
	}
}
?>

