<?php

namespace App\Core;

use App\Controller\CreatePostController ;
use App\Controller\HomeController;
use App\Controller\PostController;

class Router
{
    public function run()
    {
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        if ($path === '/post') {
            // Routing vers l'affichage de tous les articles.
 
            $content = new PostController;

            $content->index();

            return;
            // Coder ICI ...
            
        } elseif($path === '/post/show') {
            // Routing vers l'affichage d'un seul article

            $content = new PostController;
            $content->show();

            return;

        } elseif($path === '/post/add')

        {
            $article = new CreatePostController();
            $article->showForm();

            return;
        } elseif($path === '/post/delete')

        {
            $post = new PostController();
            $post->delete();

            return;
        }
        elseif($path === '/post/update')

        {
            $post = new PostController();
            $post->updatePost();

            return;
        }

      
            $home = new HomeController();

            $home->index();

      
        

        // Routing vers la page d'accueil 
        // Coder ICI ...

    }
}
