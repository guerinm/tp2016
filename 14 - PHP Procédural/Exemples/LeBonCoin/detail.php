<!-- detail.php -->
<?php 
	include "data.php";

	if(!empty($_GET) && isset($_GET['numero'])){
		$num = (int)$_GET['numero'];
		if($num >= 0 && $num < count($data)){
			$product = $data[$num];
		}
	}	
	//localhost/projects/DL12LeBonCoin/detail.php?numero=0&nom=Gabriel


 ?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Detail de l'annonce : </title>
</head>
<body>
	<?php include "header.php" ?>
	
	<?php if (isset($product)){ ?>

		<h2><?= $product["nom"] ?></h2>
		<img src="<?= $product["image"] ?>" alt="<?= $product["nom"] ?>"/>
		<ul>
			<li>Etat : <?= $product["etat"] ?></li>
			<li>Vendeur : <?= $product["vendeur"] ?></li>
			<li>Description : <?= $product["description"] ?></li>
		</ul>
	<?php }else{ ?>
		Il y a eu une erreur dans la page, cliquez <a href="index.php">ici</a>
	<?php  } ?>

		<a href="index.php">Retour à l'accueil</a>
	<?php include "footer.php" ?>
</body>
</html>