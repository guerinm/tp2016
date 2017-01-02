<?php
/*
Créer un script qui génère aléatoirement le placement des étudiants dans votre classe. 
Indice : placer le prénom de tous les étudiants dans un tableau
Indice 2 : regarder du côté de la fonction shuffle() ! 

Version 1 : à chaque chargement de page, un placement différent est affiché
Version 2 : en lancant le script une seule fois, les placements sont affichés pour toutes les semaines de l'année (avec le numéro de la semaine inscrit au-dessus de chacun des placements)
*/

$students = ["Laëticia", "Thomas", "Vincent", "Silvano", "Claire", 
"Marlène", "François", "Benjamin", "Tetiana", "Emmanuel", 
"Alexandre", "Gabriel", "Clémentine", "Morgan", "Romuald"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
	.container {
		width: 500px;
	}

	.container > div {
		width: 100px;
		height: 50px;
		float: left;
	}

	@media print {
	  h2:not(:first-child) { 
	    page-break-before: always;
	  }
	}
	</style>

</head>
<body>


<?php
//on affiche 10 plan de classes...
for($k = 0; $k < 10; $k++){
	//on remélange pour cette semaine
	shuffle($students);
?>
	<div class="container">
		<h2><?php echo $k; ?></h2>
	<?php 
		//pour la performance...
		$count = count($students);
		//on affiche tous les étudiants dans des divs
		//le css fera le retour à la ligne :)
		for($i = 0; $i < $count; $i++){
			echo '<div>' . $students[$i] . '</div>';
		}
	?>
	</div>
<?php
}
?>


<?php
	//version avec une table
	echo '<table>';
	echo '<tr>';

	for($i = 0; $i < $count; $i++){
		echo '<td>' . $students[$i] . '</td>';
		if ($i == 4 || $i == 9){
			echo '</tr><tr>';
		}
	}

	echo '</tr>';
	echo '</table>';

?>

</body>
</html>