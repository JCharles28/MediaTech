                                            
<?php
class Commentaire extends Modele {
  protected static $objet = "COMMENTAIRE" ;
  
	protected $num_commentaire;
	protected $obj_commentaire;
	protected $texte_commentaire;
	protected $num_commentaire_1;
  protected $sonAvis;
  protected $sonUtilisateur;

	// getter
  public function get_num_commentaire() {return $this->num_commentaire;}
  public function get_obj_commentaire() {return $this->obj_commentaire;}
  public function get_texte_commentaire() {return $this->texte_commentaire;}
  public function get_num_commentaire_1() {return $this->num_commentaire_1;}


	// setter
	public function setNum_commentaire($l) {$this->num_commentaire = $l;}
	public function setObj_commentaire($m) {$this->obj_commentaire = $m;}
	public function setTexte_commentaire($n) {$this->texte_commentaire = $n;}
	public function setNum_commentaire1($n) {$this->num_commentaire_1 = $n;}


	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL, $n = NULL, $n1 = NULL)
  {
		if (!is_null($id) && !is_null($m)) {
			$this->num_commentaire = $id;
			$this->obj_commentaire = $m;
			$this->texte_commentaire = $n;
      $this->num_commentaire_1 = $n1;
		}
	}

	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>Commentaire ($this->num_commentaire $this->obj_commentaire)</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllCommentaires()
  {
		// écriture de la requête
		$requete = "SELECT * FROM Commentaire;";
    
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Commentaire');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}
}
?>

