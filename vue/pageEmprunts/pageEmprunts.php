
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="">
        <title>Liste des emprunts</title>
    </head>

    <body>
        <h1>Liste des emprunts</h1>
        <?php

            $emprunts = ControleurEmprunt::lireEmprunts();
            echo $emprunts ;
        ?>
     </body>
</html>