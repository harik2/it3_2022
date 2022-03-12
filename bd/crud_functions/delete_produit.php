<?php 
include "functions.php";
$id=$_GET['id'];
supprimer_produit($id);
header("location:liste_produits.php");


