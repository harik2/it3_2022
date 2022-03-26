<?php 
include_once "functions.php";
$chemin=uploader($_FILES['image'],"images");
echo "fichier televerser dans $chemin";

?>