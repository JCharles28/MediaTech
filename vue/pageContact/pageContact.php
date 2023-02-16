<html>
   <head>
     <meta charset="utf-8">
   <!-- importer le fichier de style -->
    <link href="css/pageContact.css" rel="stylesheet" type="text/css" />
</head>
   </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
   
    <input type="bouton1" id='bouton1' value='CONTACT' >
 
 
 <input type="text" placeholder="prenom" name="username" required>

 <input type="password" placeholder="nom de Famille" name="password" required>
    <input type="email" placeholder="mail" name="mail" required>

    <input type="textarea" placeholder="ecrire ici" name="password" required>
   
 <input type= "submit" id= 'submit' value= 'envoyer'required>
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
