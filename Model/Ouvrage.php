<?php
include("Model/modele.php");
class Ouvrage extends modele
{
    protected static $objet = "Ouvrage" ;
  
    protected $num_ouvrage ;
    protected $nom_ouvrage ;
    protected $date_parution ;
    protected $img_couverture ;
    protected $sesAuteurs;
    protected $sesExemplaires; 
    protected $sesAvis; 
    protected $sescategorie; 
    protected $sesLangue; 
    protected $sonTypeOuvrage;
	
	// getters
  public function get_num_ouvrage() {return $this->num_ouvrage;}
  public function get_nom_ouvrage() {return $this->nom_ouvrage;}
  public function get_date_parution() {return $this->date_parution;}
  public function get_img_couverture() {return $this->$img_couverture;}
  public function get_num_type() { return $this->num_type ;}


	// setters
	public function setNum_ouvrage($n) {$this->num_ouvrage = $n;}
	public function setNom_ouvrage($n) {$this->nom_ouvrage = $n;}
	public function setDate_parution($d) {$this->date_parution = $d;}
  public function setImg_couverture() {$this->$img_couverture = $i;}
	public function setNum_type($n) {$this->num_type = $n;}


	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($id = NULL, $m = NULL, $n = NULL, $p = NULL) {
		if (!is_null($id) && !is_null($m) && !is_null($e))
    {
			$this->num_ouvrage = $id;
			$this->nom_ouvrage = $m;
			 $this->date_parution = $n;
			$this->num_type = $p; 
		}
	}

	// une methode d'affichage.
	function TroisLivrePopulaire(){
	$query="SELECT Ouvrage.img_couverture, COUNT(EMPRUNTE.num_exemplaire) AS nb_emprunts
		FROM EMPRUNTE
		JOIN EXEMPLAIRE ON EMPRUNTE.num_exemplaire = EXEMPLAIRE.num_exemplaire
		JOIN Ouvrage ON EXEMPLAIRE.num_ouvrage = OUVRAGE.num_ouvrage
		GROUP BY OUVRAGE.nom_ouvrage
		ORDER BY nb_emprunts DESC
		LIMIT 3";
		
		$result=Connexion::pdo()->prepare($query);
		$result->setFetchMode(PDO::FETCH_CLASS,'Acceuil');
		$tab_imgcouv=$result->fetchAll();
		return $tab_imgcouv;
}
	public function afficher()
	{
		echo "<div id=book> <p> <img src=$this->img_couverture width=200px></p> <h1> $this->nom_ouvrage </h1><p> $this->date_parution </p> </div> ";
		
	}
	
}
?>
