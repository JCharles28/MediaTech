<?php

  class Etat extends Modele
  {
    protected static $objet = "ETAT" ;
  
  	protected $num_etat;
  	protected $nom_etat;
    protected $description_etat;
    protected $sesExemplaires; 
  /*
  	// getters
    public function get_num_droit() {return $this->num_etat;}
    public function get_nom_droit() {return $this->nom_etat;}
    public function get_description_etat() {return $this->description_etat;}
  
  	// setters
  	public function setNumDroit($num) {$this->num_etat = $num;}
  	public function setNomDroit($nom) {$this->nom_etat = $nom;}
    public function setDescription_etat($nom) {$this->description_etat = $nom;}
  
  	// constructeur polyvalent d'un objet Utilisateur
  	public function __construct($id = NULL, $m = NULL, $n = NULL)
    {
  		if (!is_null($id) && !is_null($m))
      {
  		  $this->num_etat = $id ; 
        $this->nom_etat = $m ; 
        $this->description_etat = $n ; 
  		}
  	}
  */
  	// une methode d'affichage.
  	public function afficher()
    {
  		echo "<p> Droit ( $this->num_droit ,  $this->nom_droit )</p>";
  	}
  
  }

?>

