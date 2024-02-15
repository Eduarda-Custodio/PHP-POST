<?php

$x = $_POST['n'];

if ($x<0){
    print (" Valor negativo");
}
else if ($x==0){
    print ("Igual a zero");
}
else{
    print (" Valor positivo");
}

?>