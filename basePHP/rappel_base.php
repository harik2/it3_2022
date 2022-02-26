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

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th scope="col">Libelle</th>
                <th scope="col">image</th>
                <th scope="col">Prix</th>
                <th scope="col">quantite </th>
                <th scope="col">config </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stock as $index => $produit) {

            ?>
                <tr>
                    <th scope="row"><?= $index+1 ?></th>
                    <th scope="row"><?= $produit['libelle'] ?></th>
                    <td><img width="100" src="<?= $produit['image'] ?>"></td>
                    <td><?= $produit['prix'] ?>€</td>
                    <td>
                        <?php
                        $qte = $produit['qte'];
                        if ($qte == 0) {
                            $etat = "Rupture de stock";
                            $color="danger";
                        } else if($qte<10) {
                            $etat = "En alerte de stock";
                            $color="warning";
                            
                        }else{
                            $etat = "En stock";
                            $color="success";

                        }


                        ?>

                        <button type="button" class="btn btn-<?=$color?>">
                            <?=$etat?> <span class="badge bg-secondary"><?= $produit['qte'] ?></span>
                        </button>


                    </td>
                    <td><?php
                        $config = $produit['config'];
                        foreach ($config as $c => $v) {
                        ?>
                            <li><?php echo "$c : $v"; ?></li>
                        <?php
                        }

                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>