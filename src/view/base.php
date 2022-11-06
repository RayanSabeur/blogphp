<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super blog</title>  <div><a href="/post/add">Ajouter un article</a></div>
</head>

<body>
    <h1>Mon super blog</h1>
    <?php require(ROOT . '/src/view/shared/_nav.php') ?>
        
    <?php
    echo $content;
    ?>
</body>

</html>