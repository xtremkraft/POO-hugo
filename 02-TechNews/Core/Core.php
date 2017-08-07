<?php

namespace Core;

class Core {

  public function __construct($params) {

    // print_r($params);
    if(empty($params)) {
      $params['controller'] = 'news';
      $params['action']     = 'index';
    }


    // -- Récupération des paramtètres
    $controller ='Application\Controller\\'.ucfirst ($params['controller']).'Controller';
    $action     = $params['action'];




    // On vérifie si le fichier existe avant de l'instancier.
if( file_exists(RACINE_SITE.'\\'.$controller.'.php')) {
  $obj = new $controller;
  if(method_exists($obj, $action) ){
    $obj->$action();

  }else {
    echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Aucune vue correspondante.</h3>";
  }

}else {
  // Sinon, le fichier du controleur n'existe pas , donc je renvoi une eereur 404.
  echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Ce controleur n'existe pas.</h3>";
}


    // if($controller == "news" && $action == "index") {
    //   echo '<h1>Hello toi !</h1>';
    // }



  }

}



?>
