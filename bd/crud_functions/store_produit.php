<?php 
include "functions.php";
//recuperer les data depuis le form post
//print_r($_POST);
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
ajouter_produit($libelle,$prix,$qtestock);
//redirection
header("location:liste_produits.php");
