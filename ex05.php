<!DOCTYPE html>
<html>
    <head>
        <title>Ex 5 </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
            $moyenne = 16 ;
            if($moyenne >= 0 && $moyenne <= 20){
                echo "Note valide <br>";
            } 
            else{
                echo "Note invalide <br>";
            }
            if($moyenne >= 0 && $moyenne <= 20){
                if($moyenne < 10){
                    echo "Moyenne : ".$moyenne . "<br>";
                    echo "Mention : non valide";
                }
                elseif($moyenne >= 10 && $moyenne < 12){
                    echo "Moyenne : ".$moyenne . "<br>";
                    echo "Mention : Passable" ;
                }
                elseif($moyenne >= 12 && $moyenne < 14){
                    echo "Moyenne : ".$moyenne . "<br>";
                    echo "Mention : Assez Bien ";
                }
                elseif($moyenne >= 14 && $moyenne < 16){
                    echo "Moyenne : ".$moyenne . "<br>";
                    echo "Mention : Bien";
                }
                elseif($moyenne >= 16 && $moyenne <= 20){
                    echo "Moyenne : ".$moyenne . "<br>";
                    echo "Mention : Tres Bien";
                }
            }
        ?>
    </body>
</html>