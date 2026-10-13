<!DOCTYPE html>
<html>
    <head>
        <title>Ex 7</title>
        <meta charset="utf-8">
    </head>
    <body>
        <section>
            <?php 
            $nombre = 7 ;
            for($i=1 ; $i<=10 ; $i++){
                echo $nombre . " * " .$i ." = " .$nombre * $i ."<br>" ;
            }
        ?>
        </section>
        <section>
            <?php 
                for($i=0 ; $i<6 ; $i++){
                    for($j=0 ; $j<$i ; $j++){
                        echo "*";
                    }
                    echo "<br>";
                }
            ?>
        </section>
        
    </body>
</html>