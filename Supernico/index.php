<?php
session_start();

include 'utils.php';
var_dump($_SESSION);
$message = "";

$id= -1;
$type=
$nom_scene='';
$cri_guerre='';
$super_pouvoir='';
$button = 'Go !';


if (isset($_GET['action']) AND $_GET['action'] == "mod" AND !empty($_GET['id'])) {
    //Ici je suis en mode modif de super
    $id=$_GET['id'];
    $type=$_SESSION['supers'][$_GET['id']]['type'];
    $nom_scene=$_SESSION['supers'][$_GET['id']]['nom_scene'];
    $cri_guerre=$_SESSION['supers'][$_GET['id']]['cri_guerre'];
    $super_pouvoir=$_SESSION['supers'][$_GET['id']]['super_pouvoir'];
    $button = 'Modifier !';
    
    
}
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <title>Les Supers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">

      <div id="exTab2" class="container">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#1" data-toggle="tab">Supers</a>
          </li>
          <li><a href="#2" data-toggle="tab">Battles</a>
          </li>
          <li><a href="#3" data-toggle="tab">Historique</a>
          </li>
        </ul>

        <div class="tab-content ">
          <div class="tab-pane active" id="1">
            <h3>Créez, modifez, supprimez et visualisez les Supers !</h3>
          </div>
          <div class="tab-pane" id="2">
            <h3>Notice the gap between the content and tab after applying a background color</h3>
          </div>
          <div class="tab-pane" id="3">
            <h3>add clearfix to tab-content (see the css)</h3>
          </div>
        </div>
      </div>

      <hr></hr>





      <div class="row">
        <div class="col-sm-4">
          Toutes les informations sont obligatoires.
          <form action="traitement_super.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="radio" name="type" value="1" <?php if( $type==1 ) echo 'checked';?>>Gentil</option>
            <input type="radio" name="type" value="2" <?php if( $type==2 ) echo 'checked';?>>Méchant</option>

            <input type="radio" name="type" value="3" <?php if( $type==3 ) echo 'checked';?>>Neutre</option>
            <br>
            <br> Nom de scène:
            <br>
            <input type="text" name="nom_scene" value="<?= $nom_scene?>">
            <br> Cri de guerre :
            <br>
            <input type="text" name="cri_guerre" value="<?= $cri_guerre?>">
            <br> Super pouvoir:
            <br>
            <input type="text" name="super_pouvoir" value="<?= $super_pouvoir?>">
            <br>
            <br>

            <input type="submit" name="creation" value="<?= $button?>">
          </form>
        </div>


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
              <div class="col-sm-6">Neutres
                <ul>
                  <?php echo renderSuper(3);?>
                </ul>
              </div>
          </div>
        </div>
      </div>


      <h1></h1>

    </div>

  </body>

  </html>