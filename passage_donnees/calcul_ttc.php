<?php 
// var_dump($_GET);
if(empty($_GET['prix']) || empty($_GET['qte']) ){
    // die ("tous les champs sont obligatoires");
    //redirection vers form_calcul.php
    header("location:form_calcul.php?e=yes");
    exit;
}

$prix=$_GET['prix'];
$qte=$_GET['qte'];
if(is_numeric($prix) && is_numeric($qte) ){
    
    $total=$prix*$qte;
}else{
    header("location:form_calcul.php?e=nan"); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul</title>
</head>
<body>
    <ul>
        <li>Prix :<?=$prix?></li>
        <li>Quantite :<?=$qte?> </li>
        <li>Total : <?=$total?>€</li>
    </ul>
    
</body>
</html>