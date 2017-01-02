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
    		unset($this->planetes[$planetName]);
 	 	}
}

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

$dieu->killHuman('Human1', 'Terre');

var_dump($dieu);

//var_dump($dieu);

//$dieu->creerHuman('Human2');
//$dieu->humanToPlanet('Human2', 'Terre');
//
//var_dump($dieu);

