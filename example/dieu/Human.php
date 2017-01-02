<?php

class Human	{
    private $humanName; // création de l'attribut de la classe

    public function __construct($humanName)	// Permet de creer un humain lors de l'instanciation
    {
        $this->humanName = $humanName;

        echo "Hello je suis : " . $this->humanName . PHP_EOL;
    }

    public function getHumanName() { 	// creation d'une fonction qui permet de recuperer le guetteur hors de la class
        return $this->humanName;
    }

    public function setHumanName($humanName) { // le setteur permet de modifier l'humain hors de la class
        $this->humanName = $humanName;
    }

    public function meurt() {
        return "Oh non !!!" . PHP_EOL;
    }

//    public function __destruct()
//    {
//        echo "AAAAAAhhhhhh !!!!" . PHP_EOL; // va apparaitre qd PHP va decider de faire la destruction de la fonction (tps aleatoire)
//    }
}