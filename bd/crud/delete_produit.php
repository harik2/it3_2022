<?php 

$id=$_GET['id'];
$cnx= new PDO('mysql:host=localhost;dbname=dbit3', "root","");
$rp=$cnx->prepare("delete from produit where id=?");
//execution 
$rp->execute([$id]);
header("location:liste_produits.php");


