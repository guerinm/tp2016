<?php

// les fonctions

// DRY :DON'T REPEAT YOURSELF

function bonjour(string $prenom, $nomDeFamille= "")//l'ordre des arguments est important, c'est ce qu'il y a entre parenthèses
{
  
    echo '<h1>';
    echo "Bonjour  $prenom $nomDeFamille!";
    echo '</h1>';
}
//appelle la fonction
bonjour("Jérôme", "Blake");
bonjour("Poutine");

//echo strlen("asdfasdf");

$nombre0=100;

function additionne (int $nombre1, $nombre2)
{
   //ne pas faire sauf danger de mort
   global $nombre0;
 

    $res = $nombre1+$nombre2+$nombre0;
    return $res;
}
 $resultat = additionne(2,3);
 echo $resultat;



//crée une constante
define("UNE CONSTANTE", "valval");
echo UNE_CONSTANTE;

//passage par référence
function test(&$yo)
{
    $yo++;
    echo "<br />" . $yo;
    echo UNE_CONSTANTE;
}
test ($nombre0);
test ($nombre0);
test ($nombre0);

//tableaux super globaux
// $SESSION, $POST, $GET
print_r($SERVER['REMOTE_ADDR']);

echo'<br>';