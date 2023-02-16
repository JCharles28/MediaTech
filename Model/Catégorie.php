
<?php
class Categorie extends Modele {
  protected static $objet = "CATEGORIE" ;
  
	protected $num_categorie;
	protected $nom_categorie;
  protected $sonOuvrage;

/*
	// getter
  public function get_num_categorie() {return $this->num_categorie;}
  public function get_nom_categorie() {return $this->nom_categorie;}



	// setter
	public function setNum_categorie($l) {$this->num_categorie = $l;}
	public function setNom_categorie($m) {$this->nom_categorie = $m;}



	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL)
  {
		if (!is_null($id) && !is_null($m))
    {
			$this->num_categorie = $id;
			$this->nom_categorie = $m;
		}
	}
  */

	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Catégorie ($this->num_categorie $this->nom_categorie)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllCategories()
  {
		// écriture de la requête
		$requete = "SELECT * FROM categorie;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Categorie');
    $tableau = $resultat->fetchAll();
		return $tableau ;
	}
}
?>

