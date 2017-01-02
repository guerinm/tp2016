<?php

abstract Class Transaction
{
    private $compte;
    public abstract function debiter($montant);
    
    public function __construct ($montant)
    {
        $this->montant = $montant;
        
    }
    
    
}