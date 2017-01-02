<?php

class Operation
{
    private $soldePre;
    private $operation;
    private $nouveauSolde;

    public function __construct($pre, $op, $nouveauSolde)
    {
        $this->soldePre = $pre;
        $this->operation = $op;
        $this->nouveauSolde = $nouveauSolde;
    }

    /**
     * @return mixed
     */
    public function getSoldePre()
    {
        return $this->soldePre;
    }

    /**
     * @param mixed $soldePre
     */
    public function setSoldePre($soldePre)
    {
        $this->soldePre = $soldePre;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param mixed $operation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function getNouveauSolde()
    {
        return $this->nouveauSolde;
    }

    /**
     * @param mixed $nouveauSolde
     */
    public function setNouveauSolde($nouveauSolde)
    {
        $this->nouveauSolde = $nouveauSolde;
    }


}