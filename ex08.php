<!DOCTYPE html>
<html>
    <head>
        <title>Ex 8</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $x = 0;
            while($x<=20){
                if($x % 2 == 0){
                    if($x==10){
                        echo "<strong>".$x."</strong>";
                    }
                    else{
                        echo $x ;
                        }
                }
                echo "<br>";
                $x++;
            }

            $compteur = 5;
            $while = 0;
            $dowhile = 0;
            while ($compteur < 5) {
                $while++ ;
            }            
            do {
                $dowhile++;
            } while ($compteur < 5);

            for($k=1 ; $k <= 20 ; $k++){
                if($k == 16){
                    break;
                }
                if ($k % 3 == 0) {
                    continue; 
                }
                echo $k."<br>";
            }
        ?>
    </body>
</html>