<?php
class Modele
{

  public function get($attribut)
  {
    return $this->attribute;
  }

  public function set($attribut, $valeur){
    $this->$attribute = (int) $valeur;
  }

  public function __construct($données = NULL){
    if(!is_null($données)){
      foreach($données as $attribut => $valeur){
        $this->set($attribut, $valeur);
      }
    }
  }

  public static function getAll() {
    $table = static::$objet;
		$classe = ucfirst($table);
		// écriture de la requête
		$requete = "SELECT * FROM $table;";
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,$classe);
    $tableau = $resultat->fetchAll();
		return $tableau;
	    }

 public static function getObjetById($id) {
        $table = static::$objet;
        $identifiant = static::$cle;
        $classe = ucfirst($table);
        // écriture de la requête
        $requetePreparee = "SELECT * FROM $table WHERE $identifiant = :id_tag;";
        // préparation de la requête
        $req_prep = Connexion::pdo()->prepare($requetePreparee);
        // le tableau des valeurs
        $valeurs = array("id_tag" => $id);
        try {
            // envoi de la requête
            $req_prep->execute($valeurs);
            // traitement de la réponse
        $req_prep->setFetchmode(PDO::FETCH_CLASS,$classe);
            // récupération de l'objet
            $u = $req_prep->fetch();
            // retour
            return $u;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // méthode de suppression
    public static function deleteObjetById($id) {
      $table = static::$objet;
      $identifiant = static::$cle;
      $classe = ucfirst($table);
      // écriture de la requête
      $requetePreparee = "DELETE FROM $table WHERE $identifiant = :id_tag;";
      // préparation de la requête
      $req_prep = Connexion::pdo()->prepare($requetePreparee);
      // le tableau des valeurs
      $valeurs = array(
        "id_tag" => $id,
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
