<?php 

$login=$_POST['login'];
$passe=$_POST['passe'];
if ($login=="ali" && $passe=123) {
    session_start();
    $_SESSION['login']=$login;
    $_SESSION['passe']=$passe;
    header("location:liste_produits.php");
} else {
    header("location:login.php?cn=no");
}

?>