<?php
/*--
*création d'un classe Article
*Une Classe est une entité regroupant des variable / propriétés
*et des fonctions.
*/
class Article {
  // -- Déclaration des propriétés de notre Class "Article"
  private $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreationArticle,
          $Auteur;

/**Afin de pouvoir attribuer une valer à mes différentes variable,
*je vais mettre en place un constructeur
*/

  public function __construct(
            $Titre,
            $Accroche,
            $Description,
            $FeaturedImage,
            $DateCreationArticle) {

              // -- ici, nous allons attribuer a chaque propriété de notre classe,
              // -- la valeur qui à été passé au constructeur.

            $this->Titre                    = $Titre;
            $this->Accroche                 = $Accroche;
            $this->Description              = $Description;
            $this->FeaturedImage            = $FeaturedImage;
            $this->DateCreationArticle      = $DateCreationArticle;

  }// Fin du constructeur

  /**
  *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.
  *Nous aurons une fonction par propriété de notre classe.
  */

  public function getTitre() {
    return 'Mon Titre est : ' .$this->Titre;
  }
  public function getAccroche() {
    return 'Mon Accroche est : ' .$this->Accroche;
  }
  public function getDescription() {
    return 'Ma Description est : ' .$this->Description;
  }
  public function getFeaturedImage() {
    return 'Mon Image est : ' .$this->FeaturedImage;
  }
  public function getDateCreationArticle() {
    return 'La date de creation de l\'article est : ' .$this->DateCreationArticle;
  }

  /**
  *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre
  *Class.
  */
  public function setTitre($MonNouveauTitre) {
    $this->Titre = $MonNouveauTitre;
  }

  public function setAuteur(Auteur $Auteur){
    $this->Auteur = $Auteur;
  }
  public function getAuteur(){
    return $this->Auteur;
  }



}// fin de la classe Article






?>
