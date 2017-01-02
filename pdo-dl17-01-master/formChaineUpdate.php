<?php
require_once ("ChaineMethod.php");

$chaineMethode = new ChaineMethod();

if (isset($_GET)&&!empty($_GET)){
    if($_GET['one']){
        $chaine = new Chaine();
        $chaine->setId($_GET['id']);
        $oneChaine = $chaineMethode->getOneChaine($chaine);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section>
    <form action="index.php?id=<?= $oneChaine->getId()?>&update=true" method="post" >
        <fieldset>
            <legend>nouvelle chaine</legend>
            <div class="form-group">
                <label for="nomchaine">Nom de chaine</label>
                <input type="text" value="<?= $oneChaine->getNom()?>" name="nom" class="form-control" id="nomchaine" placeholder="saisissez un nom">
            </div>
            <div class="form-group">
                <label for="adressechaine">adresse</label>
                <input type="text" value="<?= $oneChaine->getAdresse()?>" name="adresse" class="form-control" id="adressechaine" placeholder="saisissez une adresse">
            </div>
            <div class="form-group">
                <label for="cpchaine">code postal</label>
                <input type="text" value="<?= $oneChaine->getCp()?>" name="cp" class="form-control" id="cpchaine" placeholder="votre code postal">
            </div>
            <div class="form-group">
                <label for="villechaine">Ville</label>
                <input type="text" value="<?= $oneChaine->getVille()?>" name="ville" class="form-control" id="villechaine" placeholder="ta ville">
            </div>
            <div class="form-group">
                <label for="telchaine">téléphone</label>
                <input type="text" value="<?= $oneChaine->getNumTel()?>" name="numTel" class="form-control" id="telchaine" placeholder="ton 06">
            </div>
            <div class="form-group">
                <label for="faxchaine">fax</label>
                <input type="text" name="numFax" value="<?= $oneChaine->getNumFax()?>" class="form-control" id="faxchaine" placeholder="tu en as encore????">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-2">
                    <button type="submit" class="btn btn-default">Valider</button>
                </div>
            </div>
        </fieldset>
    </form>
</section>
</body>
</html>