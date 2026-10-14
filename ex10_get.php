<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 10 get</title>
    </head>
    <body>
        <?php 
            echo "Bonjour ".$_GET['nom'] ." ".$_GET['prenom'] ." votre groupe est ". $_GET['groupe'];
        ?>
    </body>
</html>