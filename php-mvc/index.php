<?php
//ceci est le contrôleur frontal
//il doit être short et sweet


//on charge nos définitions de routes
require("app/configs/routes.php");

//configuration de l'appli
require("app/config/config.php");

//inclue toutes nos dépendances composer
require("vendor/autoload.php");


//auto chargement de nos classes
spl_autoload_register(function ($className) {

    $path = "app" . DIRECTORY_SEPARATOR .
        str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";


    require($path);

});
//$p= new \Model\Entity\Post;
//le dispatcher trouve la correspondance entre nos routes et l'url
$p = (empty($_GET['p'])) ? "/" : $_GET['p'];
$dispatcher = new Controller\Dispatcher();
$dispatcher->dispatch($routes, $p);
