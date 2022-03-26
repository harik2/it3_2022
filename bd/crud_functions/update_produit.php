<?php 
include "functions.php";
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qtestock=$_POST['qtestock'];
// $id=$_POST['id'];
extract($_POST);//creer les variables : $id,$libelle,...
$infoFichier=$_FILES['chemin'];
// print_r($infoFichier);
$taille=$infoFichier['size'];
if($taille==0){
$chemin="";
}else{
  $chemin=  uploader($infoFichier,"images");
  $oldproduit=findById($id,"produit");
  //pour supprimer l'image
  unlink($oldproduit['chemin']);
}
modifier_produit($libelle,$prix,$qtestock,$categorie_id,$chemin,$id);
header("location:liste_produits.php");

?>