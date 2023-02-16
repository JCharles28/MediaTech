
<?php
class Langue extends Modele {
  protected static $objet = "LANGUE" ;
  
	protected $num_langue;
	protected $nom_langue;
  protected $sesOuvrages;

/*
	// getter
  public function get_num_langue() {return $this->num_langue;}
  public function get_nom_langue() {return $this->nom_langue;}



	// setter
	public function setNum_langue($l) {$this->num_langue = $l;}
	public function setNom_langue($m) {$this->nom_langue = $m;}



	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL)
  {
		if (!is_null($id) && !is_null($m))
    {
			$this->num_langue = $id;
			$this->nom_langue = $m;
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Langue ($this->num_langue $this->nom_langue)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllLangues()
  {
		// écriture de la requête
		$requete = "SELECT * FROM langue;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Langue');
    $tableau = $resultat->fetchAll();
		return $tableau ;
	}
}
?>

