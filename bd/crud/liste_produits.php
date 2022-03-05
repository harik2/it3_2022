<?php 
$cnx= new PDO('mysql:host=localhost;dbname=dbit3', "root","");
//preparation de la requete sql dans cette connexion
$rp=$cnx->prepare("select * from produit");
//execution 
$rp->execute();
$produits=$rp->fetchAll();
// print_r($produits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits </title>
</head>
<body>
    <table border="1" width="650" align="center">
        <tr>
            <th>id</th>
            <th>Libelle</th>
            <th>prix</th>
            <th>qte en stock</th>
            <th>Actions</th>
        </tr>
<?php foreach($produits as $p){?>
        <tr>
            <td><?=$p['id']?></td>
            <td><?=$p['libelle']?></td>
            <td><?=$p['prix']?></td>
            <td><?=$p['qtestock']?></td>
            <td>
                <a href="delete_produit.php?id=<?=$p['id']?>" onclick="return confirm('Supprimer?')" >Supprimer</a>
            </td>
        </tr>
<?php }?>

    </table>
    
</body>
</html>