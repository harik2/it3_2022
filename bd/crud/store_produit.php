<?php 
//recuperer les data depuis le form post
//print_r($_POST);
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
//connexion db
$cnx= new PDO('mysql:host=localhost;dbname=dbit3', "root","");
//preparation de la requete sql dans cette connexion
$rp=$cnx->prepare("insert into produit (libelle,prix,qtestock) values (?,?,?)");
//execution 
$rp->execute([$libelle,$prix,$qtestock]);
//redirection 
header("location:liste_produits.php");
