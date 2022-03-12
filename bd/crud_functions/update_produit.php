<?php 
include "functions.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qtestock=$_POST['qtestock'];
// $id=$_POST['id'];
extract($_POST);//creer les variables : $id,$libelle,...
modifier_produit($libelle,$prix,$qtestock,$id);
header("location:liste_produits.php");

?>