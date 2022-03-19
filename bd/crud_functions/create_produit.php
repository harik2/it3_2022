<?php
include "functions.php";
$categories = all("categorie");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php include "menu.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 border mx-auto mt-5 p-3 shadow">
                <h5 class="text-center mb-2 text-warning">Nouveau Produit: </h5 class="text-center mb-2 text-warning">
                <form action="store_produit.php" method="post">
                    <div class="mb-3">
                        <label for="libelle" class="form-label"> Libelle : </label> <input class="form-control" type="text" name="libelle" id="libelle">

                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label"> Prix : </label>
                        <input type="text" name="prix" id="prix" class="form-control">

                    </div>

                    <div class="mb-3">

                        <label for="qtestock" class="form-label">Quantite en stock :</label>
                        <input type="text" name="qtestock" id="qtestock" class="form-control">
                    </div>
                    <div class="mb-3">

                        <label for="categorie_id" class="form-label">Categorie :</label>
                        <select type="text" name="categorie_id" id="categorie_id" class="form-control">
                            <?php foreach ($categories as $c) { ?>
                                <option value="<?= $c['id'] ?>"><?= $c['nomcategorie'] ?></option>
                            <?php } ?>

                        </select>

                        <div class="mb-3">
<?php  foreach($categories as $c){?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="categorie_id" id="exampleRadios1" value="<?=$c['id']?>" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                   <?=$c['nomcategorie']?>
                                </label>
                            </div>
<?php } ?>

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>