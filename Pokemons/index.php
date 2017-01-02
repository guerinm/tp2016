<?php
require 'Pokemon.php';
//require 'pikachu.php';
//require 'ratatac.php';


$barney = new Pikachu("Barney", 100, 15);
$zanzan = new Pikachu("zanzan", 150, 10);
$reglisse = new Ratatac("reglisse", 60, 10);
echo $barney->getInfo() . PHP_EOL; 
$zanzan->attack($barney);
echo $barney->getInfo() . PHP_EOL;
$barney->attack($zanzan);
echo $zanzan->getInfo() . PHP_EOL;
$barney->attack($reglisse);
echo $reglisse->getInfo() . PHP_EOL;




//plein de cmbag


/*$pokemon = new Pokemon();
$pokemons->attaquer;
var_dump ($pokemons);
$nomPokemon = ["pikachu", "ratatac"];
var_dump ($nomPokemon);
var_dump($pointDeVie);
echo $pokemon->attack($nomPokemon);

$pikatchu = new Pikachu();
$ratatac = new Ratatac();

$pointDeVie = $pikachu->attack();
$ratatac->damage($point);

echo $ratatac->getPointDeVie();
*/