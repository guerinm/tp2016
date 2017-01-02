<?php

class Paypal extends Transaction {
    public function __construct(Compte $compte) {
        $this->compte = $compte;
    }

    public function debiter($montant) {
        $this->compte->sub($montant);
    }
}