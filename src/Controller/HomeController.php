<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
        // Appel de la vue qui affiche la page d'accueil (home/index.php)
       

        ob_start();
        require(ROOT . './src/view/home/index.php'); 
        $content = ob_get_clean();



        // coder ICI ...
        require(ROOT . './src/view/base.php');
    }
}
