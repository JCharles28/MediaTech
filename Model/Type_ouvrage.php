<?php

class type_ouvrage extends Modele
{
    protected static $objet = "TYPE_OUVRAGE";
  
    protected $nom_type_ouvrage ;
    protected $num_type_ouvrage ;
    protected $temps_emprunt_max ;
/*
	// getters
  public function get_num_type_ouvrage() {return $this->num_type_ouvrage;}
  public function get_nom_type_ouvrage() {return $this->nom_type_ouvrage;}


	// setters
	public function set_num_type_ouvrage($n) {$this->num_ouvrage = $n;}
	public function set_nom_type_ouvrage($n) {$this->nom_ouvrage = $n;}



	// constructeur polyvalent d'un objet ouvrage
	public function __construct($num = NULL, $nom = NULL) {
		if (!is_null($num) && !is_null($nom) && !is_null($temps))
    {
			$this->num_type_ouvrage = $num;
			$this->num_type_ouvrage = $nom;
		}
	}
  */

	// une methode d'affichage.
	public function afficher()
  {
		echo "<p>type de l'ouvrage est ($this->num_type_ouvrage, $this->type_ouvrage)</p>";
	}
}

?>