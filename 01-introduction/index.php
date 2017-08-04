<?php
include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
*Création d'une instance de la Class "Article"
*Ici, notre variable $UnArticle est un Objet de la Classe Article
*En ce sens, elle a accès à l'ensemble des propriétès et des fonctions qui la composent.
*/
$Auteur = new Auteur ('Manigand', 'Damien', 'damienmanigand01@gmail.com');

$UnArticle->setAuteur($Auteur);

$UnArticle = new Article ("La Formation WF3", "Une Formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez bien !", "WF3.jpg", "04/08/2017");

echo '<pre>';
print_r ($UnArticle);
echo '</pre>';

$UnArticle2 = new Article ("Les cours WF3", "Une Formation NON Certifiante en 3 mois !", "Rejoignez-nous pas à Limas et vous verrez pas !", "WF3.png", "04/08/2017");
$UnArticle2->setAuteur($Auteur);

echo '<pre>';
print_r ($UnArticle2);
echo '</pre>';

$UnArticle3 = new Article ("La Formation WF3 X2", "Une Formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez pas ou bien !", "WF3.jpg", "04/08/2017");
$UnArticle3->setAuteur($Auteur);
echo '<pre>';
print_r ($UnArticle3);
echo '</pre>';

$UnArticle4 = new Article ("Les cours WF3 x2", "Une Formation NON Certifiante en 3 mois !", "Rejoignez-nous pas à Limas et vous verrez bien ou pas ^^ !", "WF3.png", "04/08/2017");
$UnArticle4->setAuteur($Auteur);

echo '<pre>';
print_r ($UnArticle4);
echo '</pre>';
# : Uncaught Error: Cannot access private property Article::$Titre

//-- Je veux afficher le titre de mon premier Article
echo '<br>';
echo $UnArticle->getTitre();
echo '<br>';
echo $UnArticle2->getTitre();
echo '<pre>';
echo '<br>';
echo $UnArticle->getAccroche();
echo '<br>';
echo $UnArticle2->getAccroche();
echo '<pre>';
echo '<br>';
echo $UnArticle->getDescription();
echo '<br>';
echo $UnArticle2->getDescription();
echo '<pre>';
echo '<br>';
echo $UnArticle->getFeaturedImage();
echo '<br>';
echo $UnArticle2->getFeaturedImage();
echo '<pre>';
echo '<br>';
echo $UnArticle->getDateCreationArticle();
echo '<br>';
echo $UnArticle2->getDateCreationArticle();
echo '<pre>';


echo '<br>';
$UnArticle->setTitre("Hello Word");
echo $UnArticle->getTitre();
echo '<br>';

echo '<pre>';
print_r ($UnArticle);
echo '</pre>';

////////////////////////////////////////////////////////

$UnAuteur = new Auteur ("Manigand", "Damien","damienmanigand01@gmail.com");

echo '<pre>';
print_r ($UnAuteur);
echo '</pre>';

echo '<br>';
$UnAuteur->setNom("Monsieur Manigand");
echo '<br>';

echo '<pre>';
print_r ($UnAuteur);
echo '</pre>';
////\/////\//////\////////\///////\////////\//////////\//////\///

$UneCategorie = new Categorie ("Le libellé");

echo '<pre>';
print_r ($UneCategorie);
echo '</pre>';

echo '<br>';
$UneCategorie->setLibelle("Mon Nouveau Libellé");
echo '<br>';


echo '<hr>';
$UneCategorie = new Categorie('Formation Informatique');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnArticle2);
$UneCategorie->AjouterUnArticle($UnArticle3);
$UneCategorie->AjouterUnArticle($UnArticle4);

echo '<em><b><pre>';
print_r ($UneCategorie);
echo '</em></b></pre>';

echo '<hr>';

echo '<ol>';
    echo '<li>';
    echo $UneCategorie->getLibelle();
    echo '</li>';
    echo '<ul>';
          $articles = $UneCategorie->getCollectionArticles();
          foreach ($articles as $article) :
    echo '<li>'.$article->getTitre().'</li>';
  endforeach;
    echo '</ul>';
echo '</ol>';

?>
