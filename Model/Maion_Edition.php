
<?php
class Maison_Edition extends Modele {
  protected static $objet = "MAISON_EDITION" ;

  protected $num_edition;
  protected $nom_edition;
  protected $sesAuteur;
/*
	// getter
  public function get_num_edition() {return $this->num_edition;}
  public function get_nom_edition() {return $this->nom_edition;}

	// setter
	public function setNum_edition($m) {$this->num_edition = $m;}
	public function setNum_edition($n) {$this->nom_edition = $n;}


	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL)
  {
		if (!is_null($id) && !is_null($m))
    {
			$this->num_edition = $id;
			$this->nom_edition = $m;
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Maison d'édition ($this->num_edition $this->nom_edition)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllEditions()
  {
		// écriture de la requête
		$requete = "SELECT * FROM Maison_Edition ;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Maison_Edition');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}
}
?>

