<?php
session_start();

include 'outils.php';

$message = "";

$id= -1;
$type='';
$nom='';
$cri='';
$sp='';
$button = 'Go !';


if (isset($_GET['action']) AND $_GET['action'] == "mod" AND !empty($_GET['id'])) {
    //Ici je suis en mode modif de super
    $id=$_GET['id'];
    $type=$_SESSION['supers'][$_GET['id']]['type'];
    $nom=$_SESSION['supers'][$_GET['id']]['nom'];
    $cri=$_SESSION['supers'][$_GET['id']]['cri'];
    $sp=$_SESSION['supers'][$_GET['id']]['sp'];
    $button = 'Modifier !';
    
    $pdvGentil= rand (60,99);
    $pdvMechant= rand(60,99);


    $tabGentils = ListeSupersParType(1);
    $tabMechants = ListeSupersParType(2);

    pre($tabGentils);
    $rand = array_rand($tabGentils ["gentils"], 1);
    $monGentil = $tabGentils["gentils"] [$rand];

    pre($monGentil);

}
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  </head>

  <body>
    <h1>Tournoi de Supers</h1>
    <br>

   

 <div class="row">
        <div class="col-sm-4">
          Toutes les informations sont obligatoires.
          <form action="traitement.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="radio" name="type" value="1" <?php if( $type==1 ) echo 'checked';?>>Gentil</option>
            <input type="radio" name="type" value="2" <?php if( $type==2 ) echo 'checked';?>>Méchant</option>

            
            <br>
            <br> Nom de scène:
            <br>
            <input type="text" name="nom" value="<?= $nom?>">
            <br> Cri de guerre :
            <br>
            <input type="text" name="cri" value="<?= $cri?>">
            <br> Super pouvoir:
            <br>
            <input type="text" name="sp" value="<?= $sp?>">
            <br>
            <br>

            <input type="submit" name="creation" value="<?= $button?>">
          </form>
        </div>

<br>
        <div class="col-sm-8">
          <div class="row">
            <?php //pre($_SESSION['supers']);?>
              <div class="col-sm-6">Gentils
                <ul>
                  <?php echo renderSuper(1);?>
                </ul>
              </div>
              <div class="col-sm-6">Méchants
                <ul>
                  <?php echo renderSuper(2);?>
                </ul>
              </div>
              
          </div>
        </div>
      </div>


      <h1></h1>

    </div>

 

  </body>

  </html>