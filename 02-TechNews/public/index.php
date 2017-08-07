<?php

use Core\Core;


require 'bootstrap.php';
// require (RACINE_SITE.'/Core/Core.php');

//initialisation du site


$core = new Core($_GET);


/**
 * Nous sommes ici sur le point d'entrée de notre Application.
 * En MVC c'est ce que l'on appellle : un Controleur Frontal.
 * L'ensemble des actions de notre site internet passera uniquement par ce fichier.
 * Il a pour mission de transférer au bon controleur la demande de l'utilisateur.
 * --------
 * Dans un Framework et en MVC, nous utilisons la puissance de la réécriture des URLs
 * via la création d'un fichier .htaccess.
 */



?>
