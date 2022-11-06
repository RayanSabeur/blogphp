<?php

namespace App\Controller;
use App\Model\PostRepository;

class CreatePostController 

{

    public function showForm()
    {

        
        if(isset($_POST['valider']))
        {
            if(isset($_POST['description']) AND isset($_POST['titre']))

            {
                if(!empty($_POST['description']) AND !empty($_POST['titre']))
                {
  
                    $titre = htmlspecialchars($_POST['titre']);
                    $desc = htmlspecialchars($_POST['description']);
                  
                    $create = new PostRepository;
                    $ret = new PostController;
                    $post =   $create->CreatePost($titre,$desc);          
                     $ret->index();
                    return;
                }
            }
        }
        

        ob_start();
        require(ROOT . './src/view/post/createpost.php'); 
        $content = ob_get_clean();
        
        require(ROOT . './src/view/base.php');

       
    }

}