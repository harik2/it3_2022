<?php 
include "functions.php";
$id=$_GET['id'];
supprimer($id,"produit");
header("location:liste_produits.php");


