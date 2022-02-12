<?php 
$nom="Doe";
$prenom="Jane";
$age=20;
$enfants=["jane","Ali","karim"];
$genre="homme";
//affectation conditionnelle 
$p=($genre=="homme")? "Mr.":"Mme";
$color=($genre=="homme")? "deepskyblue":"pink";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les bases du langage </title>
</head>
<body style="background: <?=$color?>;">
<h3>Mr <?php echo $nom;  ?> <?php echo $prenom?> a <?php echo $age;?> ans</h3>
<h3><?php echo "Mr $nom $prenom a $age ans ";?></h3>
<?php echo "<h3>Mr $nom $prenom a $age ans </h3>";?>
<?php echo '<h3>Mr $nom $prenom a $age ans </h3>';?>
<?php echo '<h3>Mr '. $nom.' '. $prenom.' a '.$age.' ans </h3>';?>
<h3><?php echo 'Mr '. $nom.' '. $prenom.' a '.$age.' ans';?> </h3>

<h3><?=$p?> <?=$nom?> <?=$prenom?> a <?=$age?> ans</h3>
<h3><?=($genre=="homme")? "Mr.":"Mme"?> <?=$nom?> <?=$prenom?> a <?=$age?> ans</h3>
    <h4>
        <?php 
        print_r ( $enfants );
        echo "<br>";
         var_dump ( $enfants );
        
        ?>
    </h4>
</body>
</html>