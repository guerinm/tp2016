<!-- Les parties essentielles d'un formulaire -->

<!-- Introduction 
Afin de pouvoir faire dialoguer correctement un formulaire HTML avec un script PHP, il faut s'assurer que les points suivants soient présents :

L'attribut action de la balise <form> est renseigné par l'url du fichier PHP qui va recevoir les informations. Cela peut-être un fichier différent de la page courante mais il est conseillé de traiter les formulaires dans la même page.
La méthode HTTP (attribut method) du formulaire est renseignée par l'une de ces deux valeurs : get ou post.
Si l'on a affaire à un formulaire d'upload de fichiers, la balise <form> doit comporter l'attribut enctype et la valeur multipart/form-data.
Tous les éléments d'un formulaire doivent posséder un attribut name rempli par une valeur. Le nom du champ sera ensuite considéré par le script PHP comme une variable contenant la valeur saisie.
A titre d'information, voici un exemple tout simple de formulaire d'upload qui présente tous les éléments obligatoires évoqués ici. -->

Exemple de formulaire d'upload
<!-- Debut du formulaire -->
<form enctype="multipart/form-data" action="./upload.php" method="post">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Envoyer le fichier :</label>
                <input name="fichier" type="file" />
                <input type="submit" name="submit" value="Uploader" />
            </p>
    </fieldset>
</form> -->
<!-- Fin du formulaire -->





<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
  define('LOGIN','Rasmus');  // Login correct
  define('PASSWORD','lerdorf');  // Mot de passe correct
  $message = '';      // Message à afficher à l'utilisateur
 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      // Le login est-il correct ?
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }
      // Le mot de passe est-il correct ?
      elseif($_POST['motDePasse'] !== PASSWORD)
    {
      $message = 'Votre mot de passe est faux !';
    }
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Identifiant</legend>
          <p>
             <label for="login">Login :</label> 
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>
          <p>
            <label for="password">Mot de passe :</label> 
            <input type="password" name="motDePasse" id="password" value="" /> 
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
  </body>
</html>




