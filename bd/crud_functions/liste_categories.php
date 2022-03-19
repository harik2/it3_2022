<?php
include "functions.php";

$categories = all("categorie");
// print_r($categories);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>liste des categories </title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="container">
        <?php if (isset($_GET['m']) && $_GET['m'] == "err") { ?>
            <div class="alert alert-danger">
                il est interdit de supprimer cette categorie, car il y a encore des produits dans cete categorie
            </div>
        <?php } ?>
        <?php if (isset($_GET['m']) && $_GET['m'] == "del") { ?>
            <div class="alert alert-success">
                Suppression effectuee avec succes </div>
        <?php } ?>


        <h5 class="text-center text-warning my-5">Liste des categories </h5>
        <div>
            <form action="liste_categories.php" method="get">
                Mot clé : <input type="text" name="mc" id=""> <button>Ok</button>
            </form>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($categories as $p) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nomcategorie'] ?></td>

                        <td>
                            <a class="btn btn-danger btn-sm" href="delete_categorie.php?id=<?= $p['id'] ?>" onclick="return confirm('Supprimer?')">Supprimer</a>
                            <a class="btn btn-warning btn-sm" href="edit_categorie.php?id=<?= $p['id'] ?>">Editer</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>