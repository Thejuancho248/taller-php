<?php

$edad1 = $_POST['hermano1'];
$edad2 = $_POST['hermano2'];




if ($edad1>$edad2){
    $diferencia1 = $edad1-$edad2;
    echo " el hermano 1 tiene ".$edad1. " años y es mayor que el hermano2 que tiene " .$edad2. " años, por " .$diferencia1. " años";
}else{
    $diferencia2 = $edad2-$edad1;
    echo " el hermano 2 tiene ".$edad2. " años y es mayor que el hermano 1 que tiene " .$edad1. " años, por " .$diferencia2. " años";
}



?>