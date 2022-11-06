<?php

// Appel de l'autoloader
// Coder ICI ...

use App\Core\Router;

define('ROOT' , dirname(__DIR__));
require(ROOT. '/vendor/autoload.php');




// Instanciation et utilisation du router            
// Coder ICI ...

$rot = new Router;

$rot->run();

