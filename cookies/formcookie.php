<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php if(! (  isset($_COOKIE['login'])  && isset($_COOKIE['passe'])   )) {?>
    <form action="store_cookie.php" method="post">
        email : <input type="email" name="email" id="">
        Mot de passe : <input type="password" name="pwd" id="">
        <button>Ok</button>
    </form>
<?php }  else {?>
    Login : <?=$_COOKIE['login'];?>
    Mot de passe  : <?=$_COOKIE['passe'];?>
    <?php } ?>
</body>

</html>