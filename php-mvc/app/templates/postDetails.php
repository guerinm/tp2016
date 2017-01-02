<p>Détails</p>
<?php
echo $post->getTitle();
?>
<p>Publié le<?= $post->getDateCreated(); ?></p>
<div>
    <?php if ($post->getImage()): ?>
    <img src="" <?= BASE_URL ?>public/>uploads/<?= $post->getImage(); ?>">
    <?php endif; ?>
    <?= $post->getContent(); ?>
</div>