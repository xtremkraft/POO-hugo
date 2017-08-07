<?php
// Affichage des erreurs en mode DEV
#ini_set('display_errors',1);

 // Racine du site internet

define('RACINE_SITE', dirname(__FILE__, 2));


#chemin relatif vers le dossier public
define('PUBLIC_URL', '/POO-hugo/02-TechNews/public');


//Header du site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

//footer du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

//Les vues
define('VIEW_SITE', RACINE_SITE.'/Application/Views');



#Autoloader
require_once 'Autoloader.php';
Autoloader::register();






?>
