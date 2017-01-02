<?php

abstract class Transaction
{
    protected $compte;

    public abstract function debiter($montant);
}