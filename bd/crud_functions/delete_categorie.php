<?php 
include "functions.php";
$id=$_GET['id'];
if(yatilProduitDansCategorie($id)){
    // die("il est interdit de supprimer cette categorie, car il y a encore des produits dans cete categorie  ");
    header("location:liste_categories.php?m=err");
}else {
    supprimer($id,"categorie");
    header("location:liste_categories.php?m=del");

}


