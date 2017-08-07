<?php
namespace Application\Controller;

class NewsController extends \Core\Controller\AppController
{
  public function index () {
    $this->render('news/index', ["Titre"=>"WeBFORCE3","accroche"=>"Partez Tous !"]);
  }
  public function categorie () {
    echo '<h1>JE SUIS LA PAGE CATEGORIE</h1>';
  }
  public function article () {
    echo '<h1>JE SUIS LA PAGE ARTICLE</h1>';
  }
}



?>
