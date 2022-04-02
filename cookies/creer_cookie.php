<?php 

setcookie("datevisite",date('d-m-Y H:i:s'),time()+10,"/","",true,true);
setcookie("pseudo","ali",time()+3600*24);
setcookie("pseudo2","ali",time()-20);
echo count($_COOKIE);

?>