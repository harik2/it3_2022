<?php 
$nom="Doe";
$prenom="Jane";
$age=20;
//tableau indexé
$enfants=["jane","Ali","karim","Jamal"];
$enfants[4]="Rim";
$enfants[]="Myriam";//push
$enfants[10]="Jhon";
// echo count($enfants);
unset($enfants[10]);
// $enfants[0]=null;
$enfants[]="oussama";//ajoute a la fin 
array_shift( $enfants);//supprime le debut
array_unshift($enfants,"Khadraoui","alami");//ajout au debut
array_pop($enfants);//supprime la fin 
// array_shift( $enfants);
// array_intersect()
// $enfants[]
echo $enfants[4];
$genre="homme";
//affectation conditionnelle 
$p=($genre=="homme")? "Mr.":"Mme";
$color=($genre=="homme")? "deepskyblue":"pink";
$produit=['libelle'=>'hp dv 8','prix'=>9000,'marque'=>'hp'];//TABLEAU ASSOCIATIF
$produit['libelle']='HP CP9';
$produit['config']='core i3 ';
$produit[]='casa';
$produit[]='rabat';
$produit['boutique']='centre ville';
$produit[]='FES';
// $c=> $v
$t=[0=>"hp dv 8",1=>9000,'hp'];//INDEXE
echo $produit['libelle'],"<br>";
print ($produit['libelle']);
echo $t[0];
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
    <h3>Liste des enfants :</h3>
    <ul>
<?php foreach($enfants as $key=>$value){?>
        <li><?=$key?> <?=$value?></li>
<?php }?>
    </ul>
    <table border="1" width="500" align="center">
        <?php foreach($produit as $c=> $v) {?>
        <tr>
            <td><?=$c?></td>
            <td><?=$v?></td>
        </tr>
        <?php } ?>
      
      
    </table>
</body>
</html>