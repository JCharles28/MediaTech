
<?php
class Exemplaire extends Modele{
  protected static $objet = "EXEMPLAIRE" ;
  
	protected $num_exemplaire ;
	protected $prix_achat ;
	protected $empruntable ;
  protected $num_ouvrage ;
  protected $num_etat ;
  protected $sonEmprunt; 
  protected $sonEtat; 
  protected $sonOuvrage; 

/*

	// getter
  public function get_num_exemplaire() {return $this->num_exemplaire;}
  public function get_prix_achat() {return $this->prix_achat;}
  public function get_empruntable() {return $this->empruntable;}
  public function get_num_ouvrage() {return $this->num_ouvrage;}
  public function get_num_etat() {return $this->num_etat;}

	// setter
	public function setNum_exemplaire($l) {$this->num_exemplaire = $l;}
	public function setPrix_achat($m) {$this->prix_achat = $m;}
	public function setEmpruntable($n) {$this->empruntable = $n;}
  public function setNum_ouvrage($n) {$this->num_ouvrage = $n;}
  public function setNum_etat($n) {$this->num_etat = $n;}


	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL, $n = NULL, $m = NULL, $n = NULL)
  {
		if (!is_null($id) && !is_null($m) && !is_null($n)) {
			$this->num_exemplaire = $id;
			$this->prix_achat = $m;
			$this->empruntable = $n;
      $this->num_ouvrage = $m;
			$this->num_etat = $n;
		}
	}
*/
	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Exemplaire ($this->num_exemplaire, $this->prix_achat euros)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllExemplaires()
  {
		// écriture de la requête
		$requete = "SELECT * FROM Exemplaire;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Exemplaire');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}
}
?>

