<?php

class Config {
    private static $nbPortes = 4;

    /**
     * @return mixed
     */
    public static function getNbPortes()
    {
        return self::$nbPortes;
    }
}

class Voiture
{
    private $nbPortes;

    public function __construct($nbPortes = null)
    {
        if(!empty($nbPortes)) {
            $this->nbPortes = $nbPortes;
        } else {
            $this->nbPortes = Config::getNbPortes();
        }
    }

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
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }
}

$voiture1 = new Voiture();

echo $voiture1->getNbPortes() .PHP_EOL;


$voiture2 = new Voiture(5);

echo $voiture2->getNbPortes();

