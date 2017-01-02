<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h2>Nouvel article</h2>
<form method="POST" enctype=multipart/form-data">

    <label for="title">Titre</label></br>
    <input type="text" id="title" value="<?= $post->getTitle() ?>"
           placeholder=" Titre de votre article..." maxlenght="255"/></p>

    <label for="content">Contenu</label><br/>
           <textarea id="content" name="content" placeholder="Contenu de votre article..." rows="10" cols="50"><?= $post->getContent() ?></textarea></p>


    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">


<label for="image">Image</label>
    <input type="file" id="image" name="image">
    </br>

<?php
if (!empty($post->getValidationErrors())) {
    foreach ($post->getValidationErrors() as $error) {
        echo '<p>' . $error . '</p>';
    }
}
?>
<input type="submit" name="ok" value="Envoyer">
</form>
</body>
</html>

