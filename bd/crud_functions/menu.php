<?php 
include_once "functions.php";
session_start();
if(!($_SESSION['login']=="ali" && $_SESSION['passe']==123)){
  header("location:login.php?cn=au");
  }
$categories=all("categorie");
?>
<nav class="navbar navbar-expand-lg navbar-light  navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GEST STOCK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create_produit.php">Nouveau Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste_produits.php">Liste des produits</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create_categorie.php">Nouvelle Catégorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste_categories.php">Liste des categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnecter.php">deconnexion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nos produits 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php foreach($categories as $c){?>  
          <li><a class="dropdown-item" href="liste_produits.php?categorie_id=<?=$c['id']?>"><?=$c['nomcategorie']?></a></li>
           <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>