<h2>Tous les articles</h2>

<?php foreach($posts as $post ) :  ?>
    
    <div style="border: solid; margin: 1em">
        <h3><a href="/post/show?id=<?= $post->getId()?>"><?= $post->getTitre() ?> </a> </h3>
        <p><?= $post->getDescription() ?></p>
        <a href="/post/delete?id=<?= $post->getId() ?>">delete</a>
<a href="/post/update?id=<?= $post->getId() ?>">update</a>
    </div>
<?php endforeach; ?>