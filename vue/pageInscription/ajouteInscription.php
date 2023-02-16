<?php
echo "<pre>";
print_r ($_POST);
echo "</pre>";

session_start();
if(
isset($_POST['username']) && isset($_POST['password']) && isset($_POST['prenom'])   && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['profesionActivite']) && isset($_POST['indentifiant']) && isset($_POST['creeUnMotDePasse']))
{
 // connexion à la base de données les id de l'admin charles 
 $db_username = 'sae-s3-jmchang';
 $db_password = 'sae-s3uUEVPJ7r40Wi11sijmchang';
 $db_name = 'jmchang';
 $db_host = 'localhost';
 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database');
   
  $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
 
 $prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom']));
  
  $nomTypeUtilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['Statut']));
  
$tel = mysqli_real_escape_string($db,htmlspecialchars($_POST['tel']));
 $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail']));
 $profesionActivite = mysqli_real_escape_string($db,htmlspecialchars($_POST['profesionActivite']));
 $indentifiant = mysqli_real_escape_string($db,htmlspecialchars($_POST['indentifiant']));
 $creeUnMotDePasse = mysqli_real_escape_string($db,htmlspecialchars($_POST['creeUnMotDePasse']));
}


  public function trouveNumTypeUtilisateur($nomTypeUtilisateur){
	$requete = "Select num_typeutilisateur from TypeUtilisateur where nom_typeutilisateur=$nomTypeUtilisateur ";
  	$resultat = connexion::pdo()->query($requete);
     $resultat->setFetchmode(PDO::FETCH_CLASS,"TypeUtilisateur");
  return $resultat;
  }
  $nymtype=trouveNumTypeUtilisateur($nomTypeUtilisateur);
  public function ajouteInscprition {
		// écriture de la requête
		$requete = "INSERT INTO Utilisateur VALUES($indentifiant,$creeUnMotDePasse,$username,$prenom,...,$mail,$tel,$nymtype,$profesionActivite) ";
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,"Utilisateur");
    
	    }
?>

  