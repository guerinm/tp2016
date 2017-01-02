<?php

class Chat {
    private $name;
    private $nbPattes;
    private $sound;

    public function __construct($name, $nbPattes, $sound) {
        $this->name = $name;
        $this->nbPattes = $nbPattes;
        $this->sound = $sound;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getnbPattes()
    {
        return $this->nbPattes;
    }

    public function setnbPattes($nbPattes)
    {
        $this->nbPattes = $nbPattes;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    public function getElem()
    {
        return
            $this->sound;
    }
}

$mistigri = new Chat('Mistigri', '4', 'Miaou!');

/*$mistigri->setName('Mistigri');
$mistigri->setnbPattes('4');
$mistigri->setSound('Miaou!');*/

echo $mistigri->getElem() . PHP_EOL;

$mistigri->setSound('...');

echo $mistigri->getElem();