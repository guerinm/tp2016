<?php

Class Paypal extends Transaction
{
    public function __construct(Compte $compte)
    {
        $this->compte= $compte;
        
        echo "distributeur" . PHP_EOL;
    }
    public function debiter($montant)
        {
            $this->compte->sub($montant);
            echo "debit de:" .$montant;
            echo "reste :" .  $this->compte->getSolde();
        }   
}