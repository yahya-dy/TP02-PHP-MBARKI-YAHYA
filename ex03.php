<!DOCTYPE html>
<html>
    <head>
        <title>Ex 3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            const TAUX_TVA = 20;
            const DEVISE = "MAD";
            $prix_uni_HT = 60;
            $quantite = 3;
            $totale_HT = $prix_uni_HT * $quantite;
            $montant_TVA = $totale_HT * TAUX_TVA / 100;
            $totale_TTC = $totale_HT + $montant_TVA ;
            $totale_TTC += 15 ;

        ?>
        <h1>recapsulation:</h1>
        <ul>
            <li>le totale HT : <?php echo $totale_HT ?><?php echo DEVISE ?></li>
            <li>le TAUX TVA : <?php echo TAUX_TVA ?><?php echo "%" ?></li>
            <li>le prix totale TTC : <?php echo $totale_TTC ?><?php echo DEVISE ?></li>
        </ul>
        <p>verification du TAUX_TVA <?php echo defined("TAUX_TVA") ? "oui" : "non" ?></p>
    </body>
</html>