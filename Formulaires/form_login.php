<?php

session_start();

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  </head>

  <body>

    <form action="traitement_login.php" method="post">

      <br> Login :
      <br>
      <input type="text" name="name" value="<?= $login?>">
      <br> Mot de passe:
      <br>
      <input type="text" name="password" value="<?= $mdp?>">
      <br>
      <br>
      <input type="submit" name="se connecter" value="<?= $button?>">
      <input type="submit" name="se deconnecter" value="<?= $button?>">

    </form>
    
  </body>

  </html>