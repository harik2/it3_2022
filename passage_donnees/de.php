<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page a </title>
</head>

<body>
    <a href="a.php?p=hp&id=1"> HP </a> <br>
    <a href="a.php?p=dell&id=2"> DELL </a>
    <br>
    <form action="a.php" method="get">
        Produit : <input type="text" name="p" id="">
        Id : <input type="text" name="id" id="">
        <button>Ok</button>
    </form>

    <form action="traitement_post.php" method="post" >
        Login : <input type="text" name="login" id="">
        Mot de passe : <input type="password" name="passe" id="">
    <button>OK</button>
    </form>
</body>

</html>