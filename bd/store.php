<?php 

$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
// connexion à  la base de donnees 
$cnx= new PDO('mysql:host=localhost;dbname=dbit3', "root","");
//preparation de la requete sql dans cette connexion
$rp=$cnx->prepare("insert into produit (libelle,prix,qtestock) values (?,?,?)");
//execution 
$rp->execute([$libelle,$prix,$qtestock]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
libelle : <?=$libelle?> <br>
prix : <?=$_POST['prix']?> <br>
libelle : <?=$qtestock?> <br>
    
</body>
</html>
