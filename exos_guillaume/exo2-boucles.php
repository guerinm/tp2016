<html>
<head>
	<meta charset="utf-8" />
	<title>Arrays</title>
</head>
<body>
	<?php

////////////à l'aide d'une boucle for()....


		//affichez les nombres de 1 à 100
for($i=0; $i<=100; $i++){
    echo $i .'<br>';
}


//for($i=20; $i>0; $i--){ //pour aller de 20 à 0
    //echo "hihi<br>";
//}


		//affichez les nombres de 5 à 25, séparé par des virgules

for($i=5; $i<=25; $i++){
    echo $i;
}
    //pour ne pas l'afficher à la final
    if($i<25){
        echo ",";
    }

		//affichez les multiples de 5 compris entre 0 et 100

for($i=0; $i<=100; $i+=5){
    echo $i . "," . '<br>';
}
		//affichez les nombres pairs de 20 à 60, séparés par des balises "<br />"

    
    for($i=20; $i<+60; $i++){ 
        if ($i%2 == 0){
    echo "$i est pair" . '<br>';
        }
    }

		//affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "<p>"
		//ayant une classe de "birth_date"

    for($year=1982; $year<= date("Y"); $year++){

//echo '<p class="birth_date">' . $year . '</p>';
echo "<p class='birth_date'> $year</p>";
    }




		//affichez les nombres de 50 à 25, en ordre décroissant, sauf le nombre 30.

for($i=50; $i>=25; $i--){ 
    if($i==30){ 
        continue;
    }
    echo $i;
}

		//construisez un array nommé "nums" contenant les nombres 10 à 20 (avec une boucle toujours)

$nums= [];
for($i=10; $i<=20; $i++){
    $nums[] = $i;
}
var_dump($nums);


///////////////avec boucles foreach() maintenant.....

		//voici un array numérique
		$tiroir = array("clef", "monnaie", "facture", "facture", "facture");

		//faites un print_r
print_r($tiroir);
		//affichez toutes les valeurs de l'array avec un foreach
foreach($tiroir as $objet){
    echo $objet;
}
		//affichez toutes les valeurs, séparés par des "<br />"

foreach($tiroir as $key=>$objet){
    
        echo "$key : $objet<br>";
    }


		//voici un array associatif
		$livre = array(
			"titre" => "le grand cahier",
			"annee" => 1995,
			"pages" => 167,
			"auteur" => "Agota Kristoff"
		);

		//affichez toutes les clefs et toutes les valeurs dans ce format, sans utiliser directement
		//les clefs dans votre code :
		//clef : valeur<br />
		//clef : valeur<br />
echo '<ul>';
foreach($livre as $key=>$valeur){
    echo "<li>$key : $valeur</li>";
}
echo'</ul>';

		//idem, mais dans une liste cette fois (ul et li)

		//voici un array multidimensionnel
		$paiements = array(
			array(
				"montant" => 12.55,
				"date"=>"12/02/2013"
			),
			array(
				"montant" => 132.11,
				"date"=>"21/11/2013"
			),
			array(
				"montant" => 125.00,
				"date"=>"09/03/2013"
			),
			array(
				"montant" => 128.11,
				"date"=>"11/12/2012"
			)
		);


		//affichez tous les paiement.
		//chaque paiement doit être contenu dans un div
		//et être affiché sous cette forme :
		//<div class="payment">
		//<h3>PAIEMENT</h3>
		//montant : 999.99
		//date : 11/11/1911
		//</div>
		//à l'intérieur de votre boucle foreach, vuos pouvez directement utiliser les clefs 
		//pour faire votre affichage
		
foreach($paiements as $paiement){
	echo '<div class= "payment">';
	echo '<h3>PAIEMENT</h3>';
	echo 'montant : ' . $paiement['montant'] . '<br>';
	echo  'date : ' . $paiement['date'];
	echo '</div>';
 
}                                                      

	?>
</body>
</html>