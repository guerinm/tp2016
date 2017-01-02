<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>public/css/style.css">
</head>
<body>
<div id="bloc_page">
<header>
    


<div class="container">

    <h1><?= $title ?></h1>
    <?php include ("app/templates/$page.php")?>

    
</div>
</div>
</header>

<footer>
    <nav>
        <ul>
            <li><a href="<?= BASE_URL ?>accueil">Accueil</a></li>
            <li><a href="<?= BASE_URL ?>foire/aux/questions">FAQ</a></li>
            <li><a href="<?= BASE_URL ?>contact">Contact</a></li>
        </ul>
    </nav>
</footer>
</body>
</html>


