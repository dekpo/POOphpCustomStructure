<?php
require "../app/Autoloader.php";
App\Autoloader::register();
// On test l'autoload

// on récup la var p pour déterminer  
// la page à afficher
$p = isset($_GET['p']) ? $_GET['p'] : "home";

//Authentification
if ($p==="logout"){
    session_unset();
    session_destroy();
    header("Location:./");      
} else {
    session_start();
}
$auth = new \App\Auth\DbAuth();
if (!$auth->logged()) {
    $p = "login";
    $form = new \App\HTML\BootstrapForm($_POST);
} else {
    $p = "home";
}


// On détermine le parcours pour afficher la vue
$view = is_file("../views/admin/$p.php") ? "../views/admin/$p.php" : "../views/pages/404.php";

// On fait une requète sur la DB en fonction de la route
switch ($p) {
    case "login":
        
        break;
    case "home":
        break;
    case "single":
        break;
    case "categories":
        break;
    case "category":
        break;
}

// On charge la vue dans la mémoire tampon
ob_start();
require $view;
$view_content = ob_get_clean();
// On charge le template qui va contenir le rendu souhaité
require "../views/templates/adm.php";
