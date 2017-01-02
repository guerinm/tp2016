<?php

class Distributeur extends Transaction {
    public function __construct(Compte $compte) {
        $this->compte = $compte;
    }

    public function donnerSolde() {
        return $this->compte->getSolde();
    }

    public function afficherOperation() {
        $operations = $this->compte->getOperations();

        foreach ($operations as $operation) {
            echo $operation->getSoldePre() . ' => ' . $operation->getOperation() . ' => ' . $operation->getNouveauSolde() . PHP_EOL;
        }
    }

    public function debiter($montant) {
        $this->compte->sub($montant);
    }
}