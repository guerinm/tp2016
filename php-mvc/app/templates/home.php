






    <section>
        <div id="banniere image"></div>
        <p><img src="public/img/trex.jpg" /></p>
        
    <?php foreach($posts as $post) : ?>
    <article>
        <h2><?= $post->getTitle() ?></h2>
        <div><?= $post->getContent()?></div>
        <p><a href="<?= BASE_URL ?>details?id=<?=$post->getId() ?>">Lire la suite</a></p>
    </article>
    <?php endforeach; ?>
    </section>
    

