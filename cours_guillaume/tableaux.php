<?php
//Les tableaux

//vieille méthode pour créer un tableau vide
$unTableau = array ();

//aujourd'hui on fait comme ça
$unTableau = [];

//initialise le tableau avec des données
$unTableauAvecDesDonnes = ["jaune", "rouge", "bleu"];

//marche pas
//echo $unTableauAvecDesDonnes;

//pour débugguer, à utiliser sans modération :
print_r( $unTableauAvecDesDonnes );
echo "<br>";
//ou
//avex xdebug, var_dump est mieux" 
var_dump ($unTableauAvecDesDonnes); //faire controle + U pour voir plus de descriptif

//on accède à un élément du tableau par son index (ou sa clé)
echo $unTableauAvecDesDonnes[1];

//modifie un élément du tableau
$unTableauAvecDesDonnes [1] = "violet";

//on vérifie que ça a marché
var_dump($unTableauAvecDesDonnes);

//avant on faisait comme ça :
array_push($unTableau, 55);

//maintenant on fait comme ça :
//la donnée est ajoutée à la fin du tableau
$unTableau [] = 35;

//ajoute au début
array_unshift($unTableau, 22);

//enlève le dernier élément du tableau, et le retourne
$last= array_pop($unTableau);
echo $last;


//voir les fonctions la:
//http://php.net/manual/en/ref.array.php

//enlève complètement un élément
unset($unTableau[0]);

var_dump($unTableau);


//tableau associatif
//avec des clés textuelles

$user = ["yo@yo.com", "poufpif", 53, true];
echo $user[2]; //affiche l'age'


$user = [
"email" => "yo@yo.com",
"username" => "poufpif",
"age" => 63,
"isActive" => true
];

echo $user["age"]; //affiche l'âge'

//var_dump($user);

//un tableau peut contenir d'autres tableaux !'
$user["musicStyles"] = ["rock", "pop","metal"];

//on enchaine les paires de crochets pour s'enfoncer
//dans le tableau'
echo $user["musicStyles"][0];

echo "<br>";
print_r($user)