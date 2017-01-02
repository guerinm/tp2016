<?php
require 'transaction.php';
require 'distributeur.php';
require 'compte.php';
require 'paypal.php';



$compte = new Compte (1000);

$distributeur = new Distributeur($compte);
$distributeur-> debiter(100);


$paypal = new Paypal($compte);
$paypal->debiter(100);

var_dump($compte);
var_dump($operations);
?>