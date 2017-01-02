//https://www.grafikart.fr/tutoriels/php/introduction-poo-php-114

<?php

class Config {
    private $nbPortes = 4;
    
    /**
    * @return mixed
    */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }
    
}

class Voiture
{
    private $nbPortes;
    
    
    
    /**
    * @return mixed
    */
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    
    /**
    * @param mixed $nbPortes
    */
    public function setNbPortes($config)
    {
        $this->nbPortes = $config->getNbPortes();
    }
}

$config = new Config();
$voiture = new Voiture($config);

echo $voiture->getNbPortes() .PHP_EOL;


//$voiture2 = new Voiture(5);
//
//echo $voiture2->getNbPortes();