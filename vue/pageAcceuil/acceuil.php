<?php
require_once("config/connexion.php");
include("Model/Ouvrage.php");

function TroisLivrePopulaire(){
	$req="SELECT Ouvrage.nom_ouvrage,img_couverture,nom_auteur,COUNT(Ouvrage.num_ouvrage) AS nb_emprunts
		FROM EMPRUNTE
		NATURAL JOIN ÉCRIT
		NATURAL JOIN AUTEUR
		NATURAL JOIN EXEMPLAIRE
		NATURAL JOIN Ouvrage
        GROUP BY Ouvrage.nom_ouvrage,img_couverture,nom_auteur,Ouvrage.num_ouvrage
        ORDER BY nb_emprunts DESC
		LIMIT 3";
		
		$result=Connexion::pdo()->query($req);
		$result->setFetchMode(PDO::FETCH_CLASS,'Acceuil');
		$tab_imgcouv=$result->fetchAll();
		return $tab_imgcouv;
}
function afficherLivreImg($i){
	$requetePreparee="SELECT img_couverture FROM Ouvrage WHERE num_ouvrage = :num_ou;";
	$req_prep=Connexion::pdo()->prepare($requetePreparee);
	$valeurs=array("num_ou"=>$i);
		$req_prep->execute($valeurs);
	    $req_prep->setFetchmode(PDO::FETCH_CLASS,'Ouvrage');
		$o = $req_prep->fetch();
		return $o;
}

$Livre1=TroisLivrePopulaire()[0];
$Livre2=TroisLivrePopulaire()[1];
$Livre3=TroisLivrePopulaire()[2];
//$Livre1_img=afficherLivreImg($Livre1);
echo "$Livre1[0]";
echo "$Livre1[1]";
echo "$Livre1[2]";
// Fermeture de la connexion à la base de données
?>