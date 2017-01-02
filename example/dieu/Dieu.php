<?php

class Dieu
{
    const NAME = 'Dieu';  	// Donner un nom non-modifiable
    private $planetes = []; // enregistrer des planètes dans "Dieu" ->()
    private $humans = []; 	// enregistrer une liste d'humains

    // création d'un tableau associatif
    public function creerPlanete($namePlanete)
    {
        $this->planetes[$namePlanete] = new Planete($namePlanete);
    }

    // appelle une méthode pour créer ce tableau
    public function creerPlanetes($planetes) {
        foreach ($planetes as $name) {			// pour chaque planète du tableau donné en paramètre
            $this->creerPlanete($name);		// on appelle creerPlanete() pour instancier les planètes (de Dieu) $this->planetes
        }
    }

    public function getPlanetes() // pour obtenir la liste des planètes
    {
        return $this->planetes;
    }

    // dieu veut créer un humain (il attend un nom en paramètre)            i ♥ Picsou
    public function creerHuman($humanName)
    {
        $this->humans[$humanName] = new Human($humanName);
    }

    public function getHumans() // pour obtenir la liste des humains
    {
        return $this->humans;
    }

    // pour ajouter un humain sur une planète
    public function humanToPlanet($humanName, $planetName){
        $planet = $this->planetes[$planetName]; //variable locale
        $human = $this->humans[$humanName];

        if(!empty($human)){
            echo "J'ajoute l'humain sur la planete !". PHP_EOL;
            $planet->addHuman($human);
        } else {
            echo "L'humain existe !". PHP_EOL;
        }
    }

    public function killHuman($humanName, $planetName) {
        $planet = $this->planetes[$planetName]; // recupère une planète par sa clé dans une variable locale
        $human = $planet->getHuman($humanName);

        if($human != NULL) {
            echo $human->meurt();

            $planet->eraseHuman($human->getHumanName()); // appel de la méthode eraseHuman de la planète pour effacer l'humain

            echo "Cool il est mort !" . PHP_EOL;
        } else {
            echo "Je ne peux pas tuer un humain qui n'existe pas encore !";
        }
    }

    public function destroyPlanet($planetName)
    {
        unset($this->planetes[$planetName]); // on supprime la planète du tableau des planètes de Dieu
    }
}