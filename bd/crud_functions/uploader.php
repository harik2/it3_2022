<?php 
$infoFichier=$_FILES['image'];
// print_r($infoFichier);
// echo $newName.$infoFichier['name'];
$extension= strtolower( pathinfo($infoFichier['name'],PATHINFO_EXTENSION));
// echo $extension;
$newName=md5(time().random_int(0,9999)).".$extension";
$dossier="uploads";
$data=getimagesize($infoFichier['tmp_name']);
// var_dump($data);
if (!is_dir($dossier)) {
    mkdir($dossier);
}
if (!$data) {
    die("Ce n'est pas une image");
}
$taille=$infoFichier['size'];
if($taille>=20000){
die("la taille max autorisee est de 20ko");
}
$autorise=['pdf','doc','jpeg'];
if (!in_array($extension,$autorise)) {
    die("type de fichier non autorise");
}


// echo $newName;
$chemin="$dossier/$newName";
move_uploaded_file($infoFichier['tmp_name'],$chemin);


?>