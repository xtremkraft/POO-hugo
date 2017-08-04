<?php


class Categorie {
  // -- Déclaration des propriétés de notre Class "Auteur"
  private $Libelle,
          $CollectionArticles = [];

/**Afin de pouvoir attribuer une valer à mes différentes variable,
*je vais mettre en place un constructeur
*/

  public function __construct(
            $Libelle) {

              // -- ici, nous allons attribuer a chaque propriété de notre classe,
              // -- la valeur qui à été passé au constructeur.

            $this->Libelle              = $Libelle;


  }// Fin du constructeur

  public function getCollectionArticles() {
    return $this->CollectionArticles;
  }

  public function getLibelle(){
    return $this->Libelle;
  }


  public function setLibelle($MonNouveauLibelle) {
    return $this->Libelle = $MonNouveauLibelle;
  }

  public function AjouterUnArticle(Article $Article){
    $this->CollectionArticles[] = $Article;
  }




















}// fin de la classe Auteur





?>
