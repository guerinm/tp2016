<?php

require 'Operation.php';
require 'Compte.php';
require 'Transaction.php';
require 'Distributeur.php';
require 'Paypal.php';

$compte = new Compte(1000);

$distributeur = new Distributeur($compte);
$distributeur->debiter(100);
//
//echo $distributeur->donnerSolde().PHP_EOL;
//
//$payal = new Paypal($compte);
//$payal->debiter(100);
//
//echo $distributeur->donnerSolde().PHP_EOL;


$distributeur->afficherOperation();

//var_dump($compte);