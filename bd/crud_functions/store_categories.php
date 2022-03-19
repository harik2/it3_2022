<?php 
include "functions.php";
//recuperer les data depuis le form post
//print_r($_POST);
$nomcategorie=$_POST['nomcategorie'];

ajouter_categorie($nomcategorie);
//redirection
header("location:liste_categories.php");
