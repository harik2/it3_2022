<?php 
//personne(id,nom,image)

$personnes=[];

for ($i=0; $i <12 ; $i++) { 
    $personne=['id'=>random_int(1,10),'nom'=>'personne '.random_int(1,10),'image'=>'https://loremflickr.com/320/240','note'=>random_int(0,10)];
    $personnes[]=$personne;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des personnes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center ">Liste des personnes </h1>
<div class="container bg-light">
        <div class="row">
<?php foreach($personnes as $c=>$p) {?>

    <?php 
    $note=$p['note'];
    if ($note==0) {
        $classe="danger";
    }else if($note<5){
        $classe="warning";
        
    }else{
        
        $classe="success";
    }
        
        
    ?>
            <div class="col-3    border text-center  bg-<?= $classe ?> ">
                <img src="<?=$p['image']?>" class="img-fluid"  alt="">
                <h3>Id: <?=$p['id']?></h3>
                <h3>Nom:<?=$p['nom']?></h3>
                <h3>Note:<?=$p['note']?></h3>
            </div>
<?php } ?>

        </div>

</div>
    
</body>
</html>