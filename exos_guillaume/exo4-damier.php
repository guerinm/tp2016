/*
Créer un damier de 9 cases par 9 cases, ressemblant à un jeu d'échec. 
Les cases doivent être alternativement noire et blanche, horizontalement et verticalement.
Vous devez absolument utiliser au moins une boucle PHP pour générer le damier en HTML et CSS. 
 */
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
    <table>
    <?php
for($i=0; $i<=8; $i++){
    echo '<tr>';
       for($j=0; $j<=8; $j++){
           if($i%2==0 && $j%2==0){
            echo' <td bgcolor="#FF00FF" width="50px" height="50px"></td>';
            } 
            elseif($i%2==1 && $j%2==1){
                echo ' <td bgcolor="#FF00FF" width="50px" height="50px"></td>';
            }   
            else{
                echo '<td bgcolor="000000" width="50px" height="50px"></td>';
            }

            /*if($i%2==0 && $j%2==0){
                $couleur="#FF00FF";
            } 
            elseif($i%2==1 && $j%2==1){
                 $couleur="#FF00FF";
            }   
            else{
                 $couleur="#000000";
            }

             echo '<td bgcolor='.$couleur.' width="50px" height="50px"></td>';*/
       }
    echo' </tr>';

}
        
        ?>
    </table>
    </body>
</html>