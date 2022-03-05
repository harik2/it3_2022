<?php 
$cnx= new PDO('mysql:host=localhost;dbname=dbit3', "root","");
//preparation de la requete sql dans cette connexion
$rp=$cnx->prepare("delete from produit where id=?");
//execution 
$rp->execute([1]);

?>