<?php 
include "functions.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $nomcategorie=$_POST['nomcategorie'];
// $id=$_POST['id'];
extract($_POST);//creer les variables : $id,$nomcategorie,...
modifier_categorie($nomcategorie,$id);
header("location:liste_categories.php");

?>