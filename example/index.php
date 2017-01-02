<?php

require 'dieu/Dieu.php';
require 'dieu/Planete.php';
require 'dieu/Human.php';

//$dieu->creerPlanetes(['Terre', 'Saturne']);

//$planetes = $dieu->getPlanetes();
//var_dump($planetes);
//
//foreach ($planetes as $planete) {
//    echo $planete->getNamePlanete() . PHP_EOL;
//}

//$dieu->creerHuman('BIBI');
//$dieu->creerHuman('BOBO');
//
//$humans = $dieu->getHumans();

//var_dump($humans);
//
//foreach ($humans as $human) {
//    echo $human->getHumanName() . PHP_EOL;
//}

//$dieu->humanToPlanet('BIBI', 'Terre');
//$planete->humanToPlanet('BIBI');

//$human = new Human('BIBI');
//$planete = new Planete('Terre');
//$planete->addHuman($human);
//var_dump($planete->getHumans());

$dieu = new Dieu();

$dieu->creerPlanete('Terre');
$dieu->creerHuman('Human1');
$dieu->humanToPlanet('Human1', 'Terre');

//$dieu->killHuman('Human1', 'Terre');

$dieu->destroyPlanet('Terre');

var_dump($dieu);

//var_dump($dieu);

//$dieu->creerHuman('Human2');
//$dieu->humanToPlanet('Human2', 'Terre');
//
//var_dump($dieu);