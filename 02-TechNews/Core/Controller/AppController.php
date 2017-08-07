<?php
namespace Core\Controller;

class AppController {

  private $_viewparams;

  /**
  *Permet de génére l'affichage de la vue passée en paramètre.
  *param string $view Vue à afficher
  *param array $viewparams Données à passer à la vue
  */


    protected function render($view, $viewparams = '') {

      //récupérétion et Affectation des parametre de la vue
      $this->_viewparams = $viewparams;

      //Affichage de l'En-tête
      require (HEADER_SITE);
        //inclusion de la Vue
        include_once VIEW_SITE.'/'.$view.'.php';
      //Affichage du pied de page
      require (FOOTER_SITE);
    }

    public function getparams() {
      return $this->_viewparams;
    }
}
?>
