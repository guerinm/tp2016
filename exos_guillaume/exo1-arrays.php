<?php

    //Arrays !


    //Créer un array vide. Nommer la variable $a. 
    $a = [];

    //Ajouter dans l'array la chaîne "potiron".
    $a[] ="potiron";

    //Afficher l'array et son contenu à l'écran (pour débugger).
    print_r($a);
    echo "<br>";

    //Ajouter à la fin de l'array la chaîne "moustique". 
    $a [] = "moustique";

    //Afficher l'array et son contenu à l'écran (pour débugger).
    print_r($a);


    //Créer un array nommé $b contenant les nombres 6, 9, 1, 7 et 25
    $b = [6, 9, 7, 25];

    //Afficher l'array $b et son contenu à l'écran (pour débugger).
    var_dump($b);

    //Afficher le nombre d'éléments contenus dans l'array
    $arrayLenght = count($b);
    echo $arrayLenght;

    //Afficher la dernière valeur de l'array $b à l'écran, dans une balise h3
    $last= end($b);
    //$last = $b[4];
    echo "<h3>" . $last . "</h3>";

    //Ajouter au DÉBUT de l'array $b le nombre 66
    array_unshift($b, 66);   

    //Afficher la somme de tous les nombres de l'array $b à l'écran
    echo array_sum($b);

    //Classer l'array $b en ordre DÉcroissant
    sort($b);
    print_r($b);

    //Afficher l'array et son contenu à l'écran (pour débugger).
    var_dump($b);

    //Calculer la moyenne des nombres contenus dans l'array $b et l'afficher
    echo array_sum($b)/count($b);


    //Créer un array ASSOCIATIF nommé $book, et contenant les données suivantes : 
        /* 
        Catégorie : Science-fiction & Fantastique
        Auteur : mathieu blais ET joël casséus
        Titre : L'Esprit du temps
        Date de parution :  juillet 2013
        Éditeur :   LEMEAC
        ISBN :  9782760933651
        */
$book = [
"categorie" => "Science-fiction & fantastique",
"auteur" => ["mathieu blais", "joël casseus"],
"titre" => "Esprit du temps",
"date de parution" => "juillet 2013",
"editeur" => "LEMEAC",
"isbn" => "9782760933651",
];

    //Afficher l'array et son contenu à l'écran (pour débugger).
print_r($book);

    //Afficher le titre du livre
echo $book["titre"]; 

    //Modifier la date de parution pour "août 2013"
$book ["date"] = "août 2013";


    //Créer un nouvel array nommé $c. 


    //Ajouter dans l'array $c les 3 arrays précédents : $a, $b et $book
$c= [$a, $b, $book];

    //Afficher l'array $c et son contenu à l'écran (pour débugger).
print_r($c);

    //Dans l'array $c :
        //Modifier "moustique" pour "papillon"

$c[0][1] = "papillon";



        //Modifier le chiffre 25 pour 34
$c[1][4] = 34;

        //Supprimer la catégorie du livre
unset($c[2]["categorie"]);

        //Afficher l'éditeur du livre (toujours depuis l'array $c)
echo $c[2]["date de parution"];
print_r($c);

    //Effacer l'array $c
    unset($c);