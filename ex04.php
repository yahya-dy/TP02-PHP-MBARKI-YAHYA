<!DOCTYPE html>
<html>
    <head>
        <title>Ex 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $a = 42 ;
            $b = "42" ;
            $c = 15.8 ;
            $d = True ;
            $e = False ;
            $f = Null ;
        ?>
        <pre>
            <?php 
                var_dump($a);
                var_dump($b);
                var_dump($c);
                var_dump($d);
                var_dump($e);
                var_dump($f);
            ?>
        </pre>
        <h2>la conversion : </h2>
        <?php 
            $x = (int) $b ;
            $y = (int) $c ;
            $z = (string) $a ;
            echo $x ;
            echo "\n";
            var_dump($x);
            echo "\n";
            echo $y ;
            echo "\n";
            var_dump($y);
            echo "\n";
            echo $z ;
            echo "\n";
            var_dump($z);
        ?>
        <h2>True et False :</h2>
        <?php 
            
            echo "echo true : ";
            echo $d;
            echo "\n";
            echo "echo false : ";
            echo $e;
            echo "\n";
            echo "var_dump true : ";
            var_dump($d);
            echo "var_dump false : ";
            var_dump($e);
        ?>
        <h2>conversion en booleen : </h2>
        <?php 
            var_dump((bool) 0);
            echo "\n";
            var_dump((bool) "0");
            echo "\n";
            var_dump((bool) "PHP");
            echo "\n";
            var_dump((bool) []);     
        ?>
    </body>
</html>