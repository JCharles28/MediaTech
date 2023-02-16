<html>
   <head>
     <meta charset="utf-8">
   <!-- importer le fichier de style -->
   <link rel="stylesheet" href="css/pageConexion.css">
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 <a href="index.php?page=connexioon">log in</a>

    <a href="index.php?page=inscription">sign up</a>
</form>

<form action="index.php" method="get">
  <input type="hidden" name="page" value="connecterUtilisateur">

    <input type="text" placeholder="Entrer le nom d'utilisateur" name="id_utilisateur" required>

 <input type="password" placeholder="Entrer le mot de passe" name="mdp_utilisateur" required>

 <input type="submit" id='sudmit' value='login' >
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
  </form>
</html>
