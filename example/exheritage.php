<?php

class Vehicule {
    private $marque;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }

    public function getMarque() {
        return $this->marque;
    }
}

class Voiture extends Vehicule
{
    public function klaxonne(){
        return 'tut tut!';
    }
}

class Moto extends Vehicule
{
    public function klaxonne(){
        return 'pouet pouet!';
    }
}

$voiture = new Voiture('Renault');

echo $voiture->getMarque() . PHP_EOL;
echo $voiture->klaxonne();


$moto = new Moto('Yamaha');

echo $moto->getMarque() . PHP_EOL;
echo $moto->klaxonne();