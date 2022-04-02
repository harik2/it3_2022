<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php if(isset($_GET['cn']) && $_GET['cn']=="no"){?>
        <h2 style="color:red;text-align:center">
    Login/Mot de passe incorrectes
    </h2>
        <?php }?>
    <?php if(isset($_GET['cn']) && $_GET['cn']=="au"){?>
        <h2 style="color:red;text-align:center">
    vous n'etes autorises a acceder a cette page  
    </h2>
        <?php }?>
  
<form action="check.php" method="post">
    Login : <input type="text" name="login" id="">
    Mot de passe  : <input type="password" name="passe" id="">
    <button>Se connecter</button>
</form>
</body>
</html>