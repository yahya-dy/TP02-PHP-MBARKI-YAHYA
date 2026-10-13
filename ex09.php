<!DOCTYPE html>
<html>
    <head>
        <title>Ex 9</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $notes = [
                "Amine" => 12,
                "Sara" => 16,
                "Youssef" => 8,
                "Lina" => 14,
                "Adam" => 10
            ];
        ?>
        <h2>Note des etudiants : </h2>
        <table>
            <tr>
                <th>Etudiant </th>
                <th>Note</th>
                <th>Resultat</th>
            </tr>
            <?php 
                $somme = 0;
                $cmp = 0;
                foreach($notes as $nom => $note){
                    if($note>=10){
                        $resultat = "valide" ;
                        $cmp += 1;
                    }
                    else{
                        $resultat = "non valide";
                    }
                    echo "<tr><td>".$nom."</td><td>".$note."</td><td>".$resultat."</tr>";
                    $somme += $note;
                    
                }
                $moy = $somme / count($notes);
                echo "<tr><td>la somme : ".$somme."</td></tr>";
                echo "<tr><td>le moyenne : ".$moy."</td></tr>";
                echo "<tr><td>le nombre des etudiant valide : ".$cmp."</td></tr>";

                $pg_note = 0;
                $nom_du_pg_note = "";
                foreach($notes as $nom => $note){
                    if($note>=$pg_note){
                        $pg_note = $note;
                        $nom_du_pg_note = $nom;
                    }
                }
                echo "<tr><td>la meilleur note est : ".$pg_note."</td></tr>";
                echo "<tr><td>le nom de la meilleur note est : ".$nom_du_pg_note."</td></tr>";
            ?>

        </table>
    </body>
</html>