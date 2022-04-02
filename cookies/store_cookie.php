<?php 
setcookie("login",$_POST['email'],time()+10);
setcookie("passe",$_POST['pwd'],time()+10);
header("location:formcookie.php");
?>