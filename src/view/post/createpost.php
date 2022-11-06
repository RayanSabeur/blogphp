<?php
$id = isset($post) ? $post->getId() : null;
$titre = isset($post) ? $post->getTitre() : null;
$desc = isset($post) ? $post->getDescription() : null;
$h2Page = isset($post)
    ? 'Modifier l\'article'
    : 'Ecrire un nouvel article';
$action = isset($post)
    ? '/post/update?id=' . $id
    : '/post/add'
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <form action="<?= $action ?>"  autocomplete="off" method="POST" >

       <div>
        
       <input type="text" name="titre" for="titre" minlength="4" maxlength="256" value="<?= $titre ?>">
       <textarea name="description" id=""for="description" cols="30" rows="10" minlength="4" maxlength="256"><?= $desc ?></textarea>

       <button type="submit" name="valider">Envoyer</button>
       </div>

   </form>



</body>
</html>