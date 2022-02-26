<?php
//tableau associatif
$produit1 = ['libelle' => 'hp compaq 8', 'prix' => 9000, 'qte' => 100, 'image' => 'https://loremflickr.com/320/240', 'config' => "Ecran 15 pouces , Ram est de 4Go , Disc dur a 1To Ssd"];
$produit2 = ['libelle' => 'dell satelite', 'prix' => 10000, 'qte' => 0, 'image' => 'https://loremflickr.com/320/240'];
$produit2['config'] = ['processeur' => 'core i3', 'dd' => '500Go', 'ram' => '8Go', 'Ecran' => 17];
$stock = [0 => $produit1, 1 => $produit2];
// $stock[]=$produit2;
for ($i = 0; $i < 10; $i++) {
    $num = random_int(1, 1000);
    $pros = [3, 5, 7];
    $prod = ['libelle' => "produit $num", 'prix' => random_int(1000, 99999), 'qte' => random_int(0, 10), 'image' => 'https://loremflickr.com/320/240'];
    $prod['config'] = ['processeur' => 'core i' . $pros[random_int(0, 2)], 'dd' => rand(500, 1000) . 'Go', 'ram' => random_int(4, 8) . 'Go'];
    $stock[] = $prod;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>libelle</th>
                <th>image</th>
                <th>prix</th>
                <th>qte</th>
                <th>config</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stock as $c => $p) { ?>
                <tr>
                    <td><?php echo $p['libelle']; ?></td>
                    <td><img width="150" src="<?php echo $p['image']; ?>" alt="image d'un produit"></td>

                    <td><?php echo $p['prix']; ?></td>
                    <td><?php
                        $qte = $p['qte'];
                        if ($qte == 0) {
                            $color = "danger";
                            $etat = "en rupture de stock";
                        } else if ($qte < 10) {
                            $color = "warning";
                            $etat = "en alerte de stock ";
                        } else {

                            $color = "success";
                            $etat = "En  stock ";
                        }
                        ?>

                        <button type="button" class="btn btn-<?= $color ?> position-relative">
                            <?= $etat ?>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-<?= $color ?>">
                                <?= $qte ?>

                            </span>
                        </button>
                        </span>
                    </td>
                    <td>
                        <ul>

                            <?php
                            if (is_array($p['config'])) {
                                foreach ($p['config'] as $k => $v) { ?>
                                    <li> <?= "$k : $v" ?></li>
                            <?php }
                            } else {?>
                                    <p>
                                        <?=$p['config']?>
                                    </p>
                            <?php } ?>

                        
                        </ul>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>