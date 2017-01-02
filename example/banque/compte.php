<?php
Class Compte
{
    private $solde;
    private $operations = [];
    

    public function __construct($solde)
    {
        $this->solde= $solde;
        
    }
    public function creerLivrets($comptes)
    {
        $this->operations[$operations] = new Livret($operations);
    }

    public function creerLivret($comptes) {
        foreach ($comptes as $operations) {			
            $this->creerLivret($operations->add && sub($montant));
            var_dump ($operations);		
        }
    }
    
    public function setSolde()
    {
        
        $this->solde=$newSolde;
    }
    public function getSolde()
    {
        
        return $this->solde;
    }
    
    public function sub($montant)
    {
        return $this->solde-=$montant;
    }
    public function add($montant)
    {
        return $this->solde+=$montant;
    }
}