<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
</head>
<body>
    <form action="store_produit.php" method="post">
        Libelle : <input type="text" name="libelle" id="libelle">
        Prix : <input type="text" name="prix" id="prix">
        Quantite en stock : <input type="text" name="qtestock" id="qtestock">
        <button type="submit">Ajouter le produit</button>
    </form>
    
</body>
</html>