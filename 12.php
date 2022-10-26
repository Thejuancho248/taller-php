<?php

$capital = $_GET['capital'];

if($capital<500){
    $resultado = $capital + ($capital*0.2);
    echo "La tasa de interes es del 2% mensual y su totalidad es ".$resultado; 
}elseif($capital>=500 && $capital<1500){
    $resultado2 = $capital + ($capital*0.45);
    echo"La tasa de interes es del 4.5% mensual y su totalidad es ".$resultado2; 
}else{
    $resultado3 = $capital + ($capital*0.7);
    echo"La tasa de interes es del 7% mensual y su totalidad es ".$resultado3; 
}

?>