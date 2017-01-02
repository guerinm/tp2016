<?php

require_once ("ChaineMethod.php");

$chaineMethod  = new ChaineMethod();


if(isset($_POST) && !empty($_POST)) {
    $newChaine = new Chaine();
    $newChaine->hydrate($_POST);

   // var_dump($newChaine);die();
    $chaineMethod->insert($newChaine);
}
if(isset($_GET) && !empty($_GET))
if($_GET['del']){
    $newChaine= new Chaine();
    $newChaine->setId($_GET['id']);
    $chaineMethod->del($_GET["id"]);



}
$chaines=$chaineMethod->getAllChaine();
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaine</title>
</head>
<body>
<main>
    <section>
        <form action="index.php" method="post">
        <fieldset>
            <legend>nouvelle chaine</legend>
            <div class="form-group">
            <label for="nomchaine">nom</label>
            <input type="text" name= "nom" class="form-control" id="nomchaine" placeholder="saisissez un nom">
            </div>
            <div class="form-group">
            <label for="adressechaine">adresse</label>
            <input type="text" name= "adresse" class="form-control" id="adressechaine" placeholder="saisissez une adresse">
            </div>
            <div class="form-group">
            <label for="cpchaine">code postal</label>
            <input type="text" name= "cp" class="form-control" id="cpchaine" placeholder="saisissez un code postal">
            </div>
            <div class="form-group">
            <label for="villechaine">ville</label>
            <input type="text" name= "ville" class="form-control" id="villechaine" placeholder="saisissez une ville">
            </div>
            <div class="form-group">
            <label for="telchaine">telephone</label>
            <input type="text" name= "numTel" class="form-control" id="telchaine" placeholder="saisissez un numero de telephone">
            </div>
            <div class="form-group">
            <label for="faxchaine">fax</label>
            <input type="text" name= "numFax" class="form-control" id="faxchaine" placeholder="saisissez un numero de fax">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">valider</button>
            </div>
        </fieldset>
        </form>
    </section>
    <hr>
</main>
<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>nom de la chaine</th>
        <th>adresse</th>
        <th>CP</th>
        <th>Ville</th>
        <th>Tel</th>
        <th>Fax</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($chaines as $chaine){
        ?>
        <tr>
            <td><?= $chaine->getId()?></td>
            <td><?= $chaine->getNom()?></td>
            <td><?= $chaine->getAdresse()?></td>
            <td><?= $chaine->getCp()?></td>
            <td><?= $chaine->getVille()?></td>
            <td><?= $chaine->getNumTel()?></td>
            <td><?= $chaine->getNumFax()?></td>
            <td><a href="index.php?id=<?=$chaine->getId()?>&del=true">DELETE</a><td>
            <td><a href="formChaineUpdate.php? id=<?= $chaine->getId()?>&one=true"></a></td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>