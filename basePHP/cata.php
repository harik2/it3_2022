<?php
$stock = [];

for ($i = 0; $i < 10; $i++) {

    $produit = ['libelle' => 'produit ' . random_int(1, 1000), 'prix' => random_int(100, 99999), 'qte' => random_int(0, 20), 'image' => 'https://loremflickr.com/320/240'];
    $produit['config'] = ['processeur' => 'core i3', 'ram' => '4go', 'dd' => '500go'];

    $stock[] = $produit;
}
// print_r($stock);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1>Liste des produits</h1>
   <div class="container">
   <div class="row">
        <?php foreach ($stock as $index => $produit) {

        ?>
            <div class="col-4 border text-center">
                <img src="https://loremflickr.com/320/240" alt="" style="width: 100%;">
                <h4><?=$produit['libelle']?></h4>
                <h5><?=$produit['prix']?>€   </h5>
                <h5>Qte : <?=$produit['qte']?>   </h5>
            </div>
        <?php } ?>
    </div>
   </div>

</body>

</html>