<?php 
// print_r($_GET);
$message="";
if(isset($_GET['e']) && $_GET['e']==='yes'){
$message= "Erreur : tous les champs sont obligatoires";
}
if(isset($_GET['e']) && $_GET['e']==='nan'){
$message= "Erreur : ce n'est pas un nombre";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form calcul</title>
</head>

<body>
    <div>
        <?=$message?>
    </div>

    <form action="calcul_ttc.php" method="get">
        Prix : <input type="number" step="0.01" name="prix" id="" required>
        Qte : <input type="number" name="qte" id="" required autocomplete="off">
        <button>Ok</button>
    </form>
</body>

</html>