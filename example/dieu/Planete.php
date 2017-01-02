<?php

class Planete
{
    private $namePlanete;
    private $humans = []; // tableau dans lequel on ajoutera les humains de la planète courante

    public function __construct($namePlanete) // création d'une planète lors de l'instanciation
    {
        $this->namePlanete = $namePlanete;
    }

    public function getNamePlanete() // obtenir le nom de la planète en dehors de la class
    {
        return $this->namePlanete;
    }

    private function setNamePlanete($namePlanete) // modifier le nom de la planète en dehors de la class
    {
        $this->namePlanete = $namePlanete;
    }

    public function addHuman($humans) // ajout des humains dans un tableau dans l'objet planete courant
    {
        if(!empty($this->humans[$humans->getHumanName()])) {
            throw new Exception("Tu as fait de la ....");
        }

        return $this->humans[$humans->getHumanName()] = $humans;
    }

    public function getHumans() { // récupère la liste de tous les humains sur la planète
        return $this->humans;
    }

    public function getHuman($humanName) {
        //	if(!empty($this->humans[$humanName])) {
        //  	return $this->humans[$humanName];
        //	}
        //  else{
        //    return null;
        //  }

        return !empty($this->humans[$humanName]) ? $this->humans[$humanName] : null; //ternaire
    }

    public function eraseHuman($humanName){
        unset($this->humans[$humanName]);
    }
}