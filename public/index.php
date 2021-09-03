<?php
require "../app/Autoloader.php";
App\Autoloader::register();
// On test l'autoload
// App\Utils::print_r_pre($_GET);

// on récup la var p pour déterminer  
// la page à afficher
$p = isset($_GET['p']) ? $_GET['p'] : "home";

// On détermine le parcours pour afficher la vue
$view = is_file("../views/$p.php") ? "../views/$p.php" : "../views/404.php";

// On se connecte à la DB
$db = \App\Config::getDb();

// On fait une requète sur la DB en fonction de la route
switch($p){
    case "home":
        $posts = \App\Tables\Posts::getAll($db);
    break;
    case "single":
        $id = isset($_GET['id']) && ((int)$_GET['id']*1)>0 ? $_GET['id'] : 1;
        $posts = $db->query("SELECT * FROM posts WHERE id=?","App\Tables\Posts",[$id]);
    break;
}

//On se déconnecte de la DB
$db = null;

// On charge la vue dans la mémoire tempon
ob_start();
require $view;
$view_content = ob_get_clean();
// On charge le template qui va contenir le rendu souhaité
require "../views/templates/default.php";