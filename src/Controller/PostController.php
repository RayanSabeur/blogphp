<?php

namespace App\Controller;

use App\Model\PostRepository;

class PostController
{
    public function index()
    {

        $repo = new PostRepository;
        $posts = $repo->getAllPost();
   
      
        // Appel de la vue qui affiche tous les articles (post/index.php)
    
        ob_start();
        require(ROOT . './src/view/post/index.php'); 
        $content = ob_get_clean();

        require(ROOT . './src/view/base.php');
        // coder ICI ...
     
    }

    public function show()
    {

        $postId = $_GET['id'];
        $repo = new PostRepository;
         $post =   $repo->getOnePost($postId);

        ob_start();
        require(ROOT . './src/view/post/show.php'); 
        $content = ob_get_clean();

        // Appel de la vue qui affiche tous les articles (post/show.php)
        require(ROOT . './src/view/base.php');
    }
    public function delete(): void
    { 
            $repo = new PostRepository;
            $repo->delete($_GET['id']);

            header('Location: /post');
    }

    public function updatePost() :void

    {  
        $postId = $_GET['id'];
        $repo = new PostRepository;
         $post =   $repo->getOnePost($postId);
         if (isset($_POST['titre']) && isset($_POST['description'])) {
          
            $repo->update($postId, $_POST['titre'], $_POST['description']);
            
            header('Location: /post/show?id=' . $postId);
        }
         require(ROOT . './src/view/post/createpost.php'); 

    }
}