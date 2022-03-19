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
<?php include "menu.php";?>

  <div class="container">
      <div class="row">
          <div class="col-md-6 border mx-auto mt-5 p-3 shadow">
              <h5 class="text-center mb-2 text-warning">Nouvelle Categorie: </h5 class="text-center mb-2 text-warning">
          <form action="store_categories.php" method="post">
        <div class="mb-3">
            <label for="nomcategorie" class="form-label"> Nom : </label> <input class="form-control" type="text" name="nomcategorie" id="nomcategorie">

        </div>

      


        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
          </div>
      </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>