<?php

$Edad = $_POST ['Edad'];
$Genero = $_POST ['Genero'];


if (($Genero == "Masculino")&&($Edad>=63)){
    echo " ¡FELICIDADES CABALLERO!, tiene la suficiente edad para jubilarse ";
}elseif(($Genero == "Femenino")&&($Edad>=54)){
    echo " ¡FELICIDADES MADAME!, tiene la suficiente edad para jubilarse ";
}else{
    echo " Lo sentimos, aun no cuenta con la suficiente edad para jubilarse";
}




?>