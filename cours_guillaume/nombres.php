<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les nombres</title>
</head>
<body>

<?php
    
    // additionnez 2 et 2
$res= 2+2;
    // multipliez 5 par 6,12
    
    $res = 5*6.12;
   
    // divisez 3 par 2
$res = 3/2;

   
    // incrémentez de 1 le résultat précédent (sans faire + 1)
$res++;
echo $res;
 
    // divisez 2 par 3, et arrondir vers le BAS
$div = 2/3;
$div = floor($div);
echo $div;
    
    // divisez 45 par 99, et arrondir vers le HAUT
echo ceil(45/99);

    
    // affichez le sinus hyperbolique de 29

echo sinh(29);
    
    // générez un nombre aléatoire entre 12 et 22


echo $r= rand(12, 22);
echo '<br>';
echo $r;

    
    // si un blog contient x articles, et qu'il en affiche y par pages, combien y a-t-il de pages ?
    $x = 212;
    $y = 20;
    $res = $x / $y;
    echo ceil ($x/$y);

    // si un produit vaut z euros hors taxe, combien coûte-t-il taxes incluses en France ? 
    $z = 11.56;
    $taxAmount = $z*20/100;
    $res = $z +$taxAmount;
    $z*= 1.2;
    echo $z;


?>

</body>
</html>