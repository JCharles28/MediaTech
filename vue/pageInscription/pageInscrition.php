<html>
   <head>
     <meta charset="utf-8">
   <!-- importer le fichier de style -->
   <link rel="stylesheet" href="css/pageinscription.css" media="screen" type="text/css"   />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
<form action="index.php" method="get">
<input type="hidden" name="page" value="creerUtilisateur">
    
<a href="index.php?page=connexioon">log in</a>
<a
href="index.php?page=inscription">sign up</a>
   
   <div class="row row-space">
<div class="col-2">
<div class="input-group">
   <input type="text" placeholder="Nom" name="nom" required>
</div>
</div>
<div class="col-2">
<div class="input-group">
<input type="text" placeholder="Prénom" name="prenom" required>
</div>
</div>
</div>

      <div class="row row-space">
<div class="col-2">
<div class="input-group">
    <input type="text" placeholder="Numéro de téléphone" name="tel" required >
</div>
</div>
<div class="col-2">
<div class="input-group">
  <input type="email" placeholder="Adresse e-mail" name="mail" required>
</div>
</div>
</div>


   <select name="Statut" id="pet-select">
    <option value="">--merci de choisir une option--</option>
    <option value="Etudiant">Etudiant</option>
    <option value="Professeur/Doctorant">Professeur/Doctorant</option>
    <option value="Bibliothécaire">Bibliothécaire</option>
    <option value="Directeur">Directeur</option>
    <option value="Admin">Admin</option>
    <input type="text" placeholder="Identifiant" name="indentifiant" required>
   
      <div class="row row-space">
<div class="col-2">
<div class="input-group">
    <input type="password" placeholder="Mot de passe"
      name="creeUnMotDePasse" required>
</div>
</div>
<div class="col-2">
<div class="input-group">
 <input type="password" name="re_pass" id="re_pass" placeholder="Répéter le mot de passe ">
</div>
</div>
</div>
      
 <input type="submit" id='submit' value= "S'inscrire">
    
          </div>
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
       </form>
     </div>
   </body>
</html>
