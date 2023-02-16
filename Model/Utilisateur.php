<?php
include("Model/modele.php");
class Utilisateur extends Modele {

  protected static $objet =  "UTILISATEUR" ;
        protected static $cle = "id_utilisateur";

	protected $id_utilisateur;
	protected $mdp_utilisateur;
	protected $nom_utilisateur;
	protected $prenom_utilisateur;
	protected $mail_utilisateur;
	protected $num_typeutilisateur;
  protected $adrs_utilisateur ;
  protected $tel_utilisateur;
  protected $nbemprunt;

  protected $sesComentaires;
  protected $sesAvis;
  protected $sesEmprunts;

	// méthode static qui retourne les voitures en un tableau d'objets

	public static function getAllUtilisateurs() {
		// écriture de la requête
		$requete = "SELECT * FROM UTILISATEUR;";
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Utilisateur');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}

    public static function checkTtypeNumUtilisateur($type) {
        $num;
        if ($type == "Bibliothécaire")
            $num= 4 ;
        if ($type == "Directeur")
            $num= 5 ;
        if ($type == "Admin")
            $num= 6;
        if ($type == "Etudiant")
            $num= 2 ;
        if ($type == "Professeur/Doctorant")
            $num= 3 ;
        return $num;

        }

public static function checkMDP($l,$m) {
		$requetePreparee = "SELECT * FROM UTILISATEUR WHERE id_utilisateur = :l_tag and mdp_utilisateur = :m_tag;";
		$req_prep = connexion::pdo()->prepare($requetePreparee);
		$valeurs = array(
			"l_tag" => $l,
			"m_tag" => $m
		);
		$req_prep->execute($valeurs);
		$req_prep->setFetchMode(PDO::FETCH_CLASS,"UTILISATEUR");
		$tabUtilisateurs = $req_prep->fetchAll();
		if (sizeof($tabUtilisateurs) == 1)
			return true;
		else
			return false;
	}

	public function isAdmin() {
	if ($this->num_typeutilisateur == 4 OR $this->num_typeutilisateur == 5 OR $this->num_typeutilisateur == 6)
    {
        return 1;

    }

    }

	public function affichable() {
	if (num_typeutilisateur == 4 or num_typeutilisateur == 5 or num_typeutilisateur == 6)
	return !$this-> num_typeutilisateur;

    }

// méthode d'insertion
	public static function addUtilisateur($indentifiant,$creeUnMotDePasse,$username,$prenom,$mail,$tel,$nymtype) {// prendre l parametre de numType
		// écriture de la requête
		$requetePreparee = "INSERT INTO UTILISATEUR(id_utilisateur,mdp_utilisateur,nom_utilisateur,prenom_utilisateur,adrs_utilisateur,mail_utilisateur,tel_utilisateur,nbemprunt,num_typeutilisateur) VALUES (:indentifiant_tag,:creeUnMotDePasse_tag,:username_tag,:prenom_tag,NULL,:mail_tag,:tel_tag,'10',:nymtype_tag);";
    // envoi de la requête et stockage de la réponse
		$resultat = Connexion::pdo()->prepare($requetePreparee);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,"UTILISATEUR");
		// préparation de la requête
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		// le tableau des valeurs
		$valeurs = array(
      "indentifiant_tag" => $indentifiant,
			"creeUnMotDePasse_tag" => $creeUnMotDePasse,
			"username_tag" => $username,
			"prenom_tag" => $prenom,
			"mail_tag" => $mail,
      "tel_tag" => $tel,
      "nymtype_tag" => $nymtype
		);
        try {
            // envoi de la requête
            $req_prep->execute($valeurs);
            return true;
            // traitement de la réponse
        } catch(PDOException $e) {
            // echo "<p>".$e->getMessage()."</p>";
            return false;
        }
	}
}

?>
