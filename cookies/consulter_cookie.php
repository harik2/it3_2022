<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter les cookies</title>
</head>
<body>

<?php if(isset($_COOKIE['pseudo'])){?>
Pseudo : <?=$_COOKIE['pseudo']?>
<?php } ?>
<br>

<?php if(isset($_COOKIE['datevisite'])){?>
date de visite : <?=$_COOKIE['datevisite']?>
<?php } ?>
<br>    
</body>
</html>