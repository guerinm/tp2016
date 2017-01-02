<?php
//notre table de correspondance entre les urls et les fonctions de controleur à appeler

$routes = [

    "/"=>"home",
    "/accueil"=> "home",
    "/details"/*c'est l'url*/=> "postDetails",/*c'est la fonction*/
    "/contact"=> "contact",
    "/foire/aux/questions"=> "faq",
    "/admin/articles/ajout"=>"createPost"

    
];