<?php

//les boucles (loop)

//boucle while (tant que)
$i= 1;
while($i<=10){
echo "passage dans la boucle $i<br>"; //c'est une itération'
$i++;
}

//boucle for
//for($i=0; $i<20; $i++){//sur un pas de 5 en 5 il faudrait écrire $i+=5
    //echo "hihi<br>";
//}


//for($i=20; $i>0; $i--){ //pour aller de 20 à 0
    //echo "hihi<br>";
//}

for($i=20; $i>0; $i--){ 
    if($i==15){
        //arrete l'execution de l'iteration
        //et passe à la suivante
        continue;
    }
    if($i ==5){
        //sort complètement de la boucle
        break;
    }
    echo "hihi $i<br>";
}

$a = ["john", "joe", "jim", "jane", "janis", "jerome"];
echo '<ul>';
echo '<li>' . $a[0] . '</li>';
echo '<li>' . $a[1] . '</li>';
echo '<li>' . $a[2] . '</li>';
echo '<li>' . $a[3] . '</li>';
echo '<li>' . $a[4] . '</li>';
echo'</ul>';

echo'<ul>';
//parcourt le tableau
$lenght = count($a);
for ($i =0; $i<$lenght; $i++){
    //on accède à tous les index du tableau
    //grâce au $i
    echo'<li>' . $a[$i] . '</li>';// en mettant [$i] apres $a ca veut dire qu'on accede a chaque nom l'un apres l'autre listés'
}
echo '</ul>';

//boucle foreach
//ne seet qu'à parcourir des tableaux'
foreach($a as $name){
    echo $name;
}

foreach($a as $key=>$name){
    echo $key . ":" . $name . "<br>";
}
$names = [
    ["prenom" => "joe", "famille" => "black"],
    ["prenom" => "jim", "famille" => "white"],
    ["prenom" => "jane", "famille" => "grey"],
];

print_r($names);

foreach($names as $person){
    foreach($person as $key => $info){
        echo "$key : $info<br>";
    }
}