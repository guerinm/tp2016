<?php
require 'pikachu.php';
require 'ratatac.php';

abstract class Pokemon //on ne peux pas isntancer un pokemon mais seulement un pickachu ou un tatac (ou tout autre classe qui extend pokemon)
{
    private $pointDeVie;
    private $nomPokemon;
    private $valeurMaxAttack;
    
    public function __construct ($nomPokemon, $pointDeVie, $valeurMaxAttack)
    {
        $this->nomPokemon = $nomPokemon;
        $this->pointDeVie = $pointDeVie;
        $this->valeurMaxAttack = $valeurMaxAttack;
    }
    
    public function getInfo(){
        return $this->nomPokemon." a ".$this->pointDeVie;
        
    }
    public function setNomPokemon($nom)
    {
        $this->nomPokemon = $nom;
    }
    
    public function getNomPokemon()
    {
        return $this->nomPokemon;
        
    }
    public function setValeurMaxAttack($maxAttack){
        $this->valeurMaxAttack = $maxAttack;
    }
    
    public function getValeurMaxAttack(){
        return $this->valeurMaxAttack;
    }
    
    public function setPointDeVie($pointDeVie)
    {
        $this->pointDeVie = $pointDeVie;
    }
    
    public function getPointDeVie()
    {
        return $this->pointDeVie;
    }
    
    public function attack($pokemon)
    {
        echo ($this->nomPokemon." attaque ".$pokemon->getNomPokemon().PHP_EOL);
        $pokemon->damage($this->valeurMaxAttack);
        
        
    }
    
    
    public function damage($valeurAttack)
    {
        if($this->pointDeVie - $valeurAttack<=0){
            echo $this->getNomPokemon() . '=> Ahhhhhhhhhhh !!!!' . PHP_EOL;
            
            $this->pointDeVie = 0;
            return;
        }
        
        $this->pointDeVie -= $valeurAttack;
    }
}



?>