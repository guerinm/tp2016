<?php

class Ratatac extends Pokemon
{
    
    public function damage($valeurAttack)
    {
        echo "damage de Ratatac".PHP_EOL;
        echo $this->pointDeVie;
        $this->setPointDeVie($this->getPointDeVie() - $valeurAttack/2);
    }
    
}
?>