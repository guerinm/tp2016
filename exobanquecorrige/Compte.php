<?php

class Compte
{
    private $solde;
    private $operations = [];

    public function __construct($solde) {
        $operation = new Operation(0, $solde, $solde);

        $this->operations[] = $operation;

        $this->solde = $solde;
    }

    public function sub($montant) {
        $operation = new Operation($this->solde, $montant, 0);

        $this->solde -= $montant;

        $operation->setNouveauSolde($this->solde);

        $this->operations[] = $operation;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param mixed $operations
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }
}