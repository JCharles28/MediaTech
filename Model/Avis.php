
<?php
class Avis extends Modele {
  protected static $objet = "AVIS";
  
	protected $num_Avis;
	protected $nb_etoile;
	protected $id_utilisateur;
  protected $num_commentaire;
  protected $sonUtilisateur; 
  protected $sesCommentaire; 
  protected $sonOuvrage;
/*
	// getter
  public function get_num_Avis() {return $this->num_Avis;}
  public function get_nb_etoile() {return $this->nb_etoile;}
  public function get_id_utilisateur() {return $this->id_utilisateur;}
  public function get_num_commentaire(){return $this->num_commentaire ; }

	// setter
  public function set_num_Avis($num) {return $this->num_Avis = $num;}
  public function set_nb_etoile($nb) {return $this->nb_etoile = $nb;}
  public function set_id_utilisateur($id) {return $this->id_utilisateur = $id;}
  public function set_num_commentaire($num_Com){return $this->num_commentaire = $num_Com; }

	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($num = NULL, $nb = NULL, $id = NULL , $num_Com = NULL) 
  {
		if (!is_null($num) && !is_null($nb) && !is_null($id) ) {
			$this->num_Avis = $num;
			$this->nb_etoile = $nb;
			$this->id_utilisateur = $id;
      $this->num_commentaire = $num_com ; 
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Auteur (	$this->num_Avisr $this->nb_etoile ) ecrit par($this->id_utilisateur) </p>";
	}
}
?>

