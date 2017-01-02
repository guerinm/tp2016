<!-- leboncoin.php -->
<?php 
	include "data.php";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Le bon coin</title>
</head>
<body>
	<?php include "header.php" ?>

	<form action="login.php" method="POST">
		<label>
			Login :
			<input type="text" name="login">
		</label>
		<label>
			Password :
			<input type="password" name="pwd">
		</label>
		<input type="submit">
	</form>

	<main>
		
		<?php	foreach($data as $key => $product): ?>
				<section>
					<h2><?= $product["nom"]?> <strong><?= $product["prix"] ?></strong> €</h2>
					<img alt="<?=$product["nom"]?>" src="<?= $product["image"]?>" />
					<p>
						<a href="detail.php?numero=<?= $key ?>">Voir le detail...</a>
					</p>
				</section>
		<?php endforeach ?>	

	</main>

	<?php include "footer.php" ?>	
</body>
</html>