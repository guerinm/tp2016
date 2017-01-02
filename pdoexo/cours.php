<?php

	/*
	Passage par référence ->
	la valeur de l'objet peut être modifiée

	Passage par valeur ->
	la valeur de l'objet NE peut PAS être modifiée
	*/




	//ici propriétés obligatoires pour instancier la classe PDO
	$host='127.0.0.1';
	$port=3306;
	$db='tele';
	$user='root';
	$pwd='';
	$con = 'mysql:host='.$host. ';port=' . $port. ';dbname=' .$db;


	//création de l'objet $pdo
	try{
		$pdo = new PDO($con, $user, $pwd);
		
	}


	catch(Exception $e){
		echo "votre erreur : " . $e;
	}

	
	//on créer un objet $sql avec 
	$sql= "SELECT * FROM chaine";

	
	//l'objet $pdo appelle la fonction query(=requete)
	//de l'objet $sql
	//on l'affecte ensuite à l'objet $result 
	//ATTENTION $result est un objet de type PDO Statement
	$result = $pdo->query($sql);

	// la fonction fetch va chercher le 1er résultat de la requête sous forme de tableau
	//var_dump($result->fetch());

	//la méthode fetchAll permet d'aller chercher TOUS les éléments de la requête
	//var_dump($result->fetchAll());

	//possibilité de récupérer les éléments avec la boucle while
	//on utilise fetch (donc on récupère le 1er élément du tableau )
	//et le while fait une boucle qui récupère le 2ème, le3ème,...
	while($row =$result->fetch()){
		var_dump($row);
	}



	//LES REQUETES PREPAREES
	//l'objet $stmt prépare la requête grâce à la méthode prepare
	$stmt = $pdo->prepare("SELECT nom, prenom FROM clients ORDER BY nom;");

	//la méthode execute lance la requête
	$stmt->execute();

	//la boucle récupère les les infos
	while($row = $stmt->fetch()){
	echo 'Nom : ' . $row['nom'] . ' ; Prenom : ' . $row['prenom'];
	}

	//MARQUEURS NOMMES
	//un marqueur est défni par ":"
	//il correspond à un alias
	$stmt = $pdo->prepare("INSERT INTO CLIENT(nom) VALUES (:unNom);"));
	// ci-dessous on dit que le marqueur :unNom vaut la variable $nom
	//grâce à la méthode bindParam
	$stmt->bindParam(':unNom', $nom);
	$nom = "Block";
	$stmt->execute();
	$nom = "Fournel";
	$stmt->execute();


	//MARQUEURS "?"
	// le marqueur ? permet de ne pas rentrer de nom de marqueur
	$stmt = $pdo->prepare("INSERT INTO CLIENT(id, nom) VALUES (?,?);");

	//il faut alors rentrer,un ordre (1 étant le premier ? de VALUES)
	//l'id et le type de champ (ici PDO::PARAM_INT)
	//l'objet est passé en référence
	$stmt->bindParam(1, $id, PDO::PARAM_INT);
	$stmt->bindParam(2, $nom, PDO::PARAM_STR);
	$id = 12;
	$nom = "Gabriel";

	//la méthode execute se fait OBLIGATOIREMENT après l'affectation aux variables
	$stmt->execute();



	//pour libérer la mémoire il faut utiliser la méthode closeCursor
	//cela permet de na pas garder les données en mémoire
	//ATTENTION ne pas mettre dans la boucle While
	$res->closeCursor();
?>