<?php 
include "functions.php";
//recuperer les data depuis le form post
//print_r($_POST);
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
$categorie_id=$_POST['categorie_id'];
$chemin=uploader($_FILES['chemin'],"images");
ajouter_produit($libelle,$prix,$qtestock,$categorie_id,$chemin);
//redirection
header("location:liste_produits.php");
