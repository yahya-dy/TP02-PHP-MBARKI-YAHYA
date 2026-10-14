<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 10 post</title>
    </head>
    <body>
        <?php 
            echo "Bonjour ".$_POST['nom'] ." ".$_POST['prenom'] ." votre groupe est ". $_POST['groupe'];
        ?>
    </body>
</html>