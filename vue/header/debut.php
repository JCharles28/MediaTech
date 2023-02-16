<?php 

@$keywords=$_GET[ "keywords"];
@svalider=$ GET ["valider"];
if(isset ($valider) && !empty (trim($keywords) )) {
§words=explode(" ", trim($keywords) ) ;
for ($i=0; $i<count ($words) ; $i++); $kw[$i]="descg like '‰" Swords|$i]. "‰'";
include ("connexion. php");
$res=$pdo->prepare ("select descg from glossaire where ". implode(" or ", $kw)) ;
$res->setFetchMode (PDO::FETCH_ASSOC) ;
$res->execute();
$tab=$res->fetchAll();
  ?>



  <body>
<form name= "fo" method-"get" action="">
<input type="text" name= "keywords" value="<?php echo $keywords ?>" placeholder="recherche"/>
<input type="submit" name="valider" value="Rechercher" />
</form>
<?php if (@$afficher=="oui") { ?>
<div id="resultats">
<div id="nbr"><?=count ($tab)." ". (count ($tab)>1?"résultats trouvés": "résultat trouvé") ?></div>
<01>
<?php for ($i=0; $i<count ($tab);$i++) { ?>
<1i><?php echo $tab[$i]["descg" ] ?></li>
<?php } ?>
</01>
</div>
<?php } ?>
</body>