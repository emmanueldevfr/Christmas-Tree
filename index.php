<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Tree</title>
</head>
<body>
    <center>
        <?php

            $nb_star_current = 1;

            function display_star($nb_star) {
                while ($nb_star > 0) {
                    $nb_star -= 1;
                    echo "*";
                }
            }

            function display_line($nb_line) {
                global $nb_star_current;
                while($nb_line > 0) {
                    $nb_line -= 1;
                    display_star($nb_star_current);
                    echo "<br />";
                    $nb_star_current += 2;
                }        

            }

            function display_etage($nb_etage) {
                global $nb_star_current;
                $pos_etage = 1;
                while ($pos_etage <= $nb_etage) {
                    display_line($pos_etage + 3);
                    $pos_etage += 1;
                    $nb_star_current -= 4;
                }
            }
            
            display_etage(5); 

           
            $nb_barre = 5;

            function display_barre($nb_barre) {
                while ($nb_barre > 0) {
                    $nb_barre -= 1;
                    echo "|";
                }
            }

            function display_line_barre($nb_line_barre) {
                global $nb_barre;
                while($nb_line_barre > 0) {
                    $nb_line_barre -= 1;
                    display_barre($nb_barre);
                    echo "<br />";
                }        

            }

            display_line_barre(5);


?>
    </center>
</body>
</html>
