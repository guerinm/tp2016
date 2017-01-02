<?php
var_dump ($_GET);
$message = "";

if(isset($_GET["error"])){
    
    if ($_GET["error"] == 1)$message ="Vous avez des infos obligatoires à remplir, non mais !";
    if ($_GET["error"] == 2)$message ="Le code postal doit etre en chiffres et avoir une longueur max de 5 !";
}

if(isset($_GET["success"])){
    if($_GET["success"] ==1) $message= " vous voilà inscrit !";
}
if(1 == 1) echo"1"; else echo "2";
    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title> Mon titre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <h1> hello</h1>
    <h4><?= $message ?></h4> *Info obligatoire
    <form action="traitement.php" method="post">
      *Nom:
      <br>
      <input type="text" name="nom" value="">
      <br>
      <br> *Prénom:
      <input type="text" name="prenom" value="">
      <br>
      <br> Code Postal:
      <input type="text" name="cp" value="">
      <br>
      <br>
      <input type="submit" name="inscription" value="ok !">
    </form>


  </body>

  </html>