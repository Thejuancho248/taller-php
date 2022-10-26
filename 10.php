<?php

$Valor = $_POST ['valor'];

$Diferencia = $Valor- ($Valor*0.2);

echo $Diferencia;
echo "<br>";

if($Valor>20000){
    echo " Descuento ";
}else{
    echo " No se descuenta ";
}

?>