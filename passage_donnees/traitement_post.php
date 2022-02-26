<?php 
//URL -> GET -> $_GET
//envoi par method="post"=>$_POST
// print_r($_POST);
// print_r($_GET);

$login=$_POST['login'];
$pwd=$_POST['passe'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Login : <?=$login?></li>
        <li>Mot de passe : <?=$pwd?></li>
    </ul>
</body>
</html>