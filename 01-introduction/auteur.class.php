<?php

class Auteur {
  // -- Déclaration des propriétés de notre Class "Auteur"
  private $Nom,
          $Prenom,
          $Email;

/**Afin de pouvoir attribuer une valer à mes différentes variable,
*je vais mettre en place un constructeur
*/

  public function __construct(
            $Nom,
            $Prenom,
            $Email) {

              // -- ici, nous allons attribuer a chaque propriété de notre classe,
              // -- la valeur qui à été passé au constructeur.

            $this->Nom                    = $Nom;
            $this->Prenom                 = $Prenom;
            $this->Email                  = $Email;
  }// Fin du constructeur
  public function setNom($MonNouveauNom) {
    return $this->Nom = $MonNouveauNom;
  }

  public function getNomComplet(){
    return $this->prenom." ".$this->Nom;
  }

}// fin de la classe Auteur
















?>
