<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sapin de Noël</title>
</head>
<body>
    <center>
        <?php

            $nb_etoile_current = 1;

            function affiche_etoile($nb_etoile) {
                while ($nb_etoile > 0) {
                    $nb_etoile -= 1;
                    echo "*";
                }
            }

            function affiche_ligne($nb_ligne) {
                global $nb_etoile_current;
                while($nb_ligne > 0) {
                    $nb_ligne -= 1;
                    affiche_etoile($nb_etoile_current);
                    echo "<br />";
                    $nb_etoile_current += 2;
                }        

            }

            function affiche_etage($nb_etage) {
                global $nb_etoile_current;
                $pos_etage = 1;
                while ($pos_etage <= $nb_etage) {
                    affiche_ligne($pos_etage + 3);
                    $pos_etage += 1;
                    $nb_etoile_current -= 4;
                }
            }
            
            affiche_etage(5); 

           
            $nb_barre = 5;

            function affiche_barre($nb_barre) {
                while ($nb_barre > 0) {
                    $nb_barre -= 1;
                    echo "|";
                }
            }

            function affiche_ligne_barre($nb_ligne_barre) {
                global $nb_barre;
                while($nb_ligne_barre > 0) {
                    $nb_ligne_barre -= 1;
                    affiche_barre($nb_barre);
                    echo "<br />";
                }        

            }

            affiche_ligne_barre(5);
        ?>
        
    </center>
</body>
</html>
