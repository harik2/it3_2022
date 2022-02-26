<?php
//isset : permet de verifier si une variable existe ou pas (null) 
//empty : verifie si une variable est vide ("",0,0.0,false,[],null )
$x=3; //"0"=>0

if( isset($x) ){
echo "x existe (isset)<br>";
}else{
    echo "x n'existe pas <br>";
}
if( empty($x) ){
echo "x est vide : empty <br>";
}else{
    echo "x n'est pas vide ";
}
if ("0"==0) {
    echo "x == 0<br>";
} else {
    echo "x != 0<br>";

}
if ("0"===0) {
    echo "x === 0<br>";
} else {
    echo "x !== 0<br>";

}
//pour verifier le type :
    if(is_numeric($x)){
        echo "x est un nombre <br>";
    }
    if(is_string($x)){
        echo "x est une chaine de caractere <br>";
    }
    
    if(is_array($x)){
        echo "x est un tableau <br>";
    }
    
    
    if(is_int($x)){
        echo "x est un entier <br>";
    }
    if(is_float($x)){
        echo "x est un reel <br>";
    }
    var_dump($x);
echo gettype($x);


?>


