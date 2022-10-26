<?php

$pganados = $_POST['ganados'];
$pperdidos = $_POST['perdidos'];
$pempatados = $_POST['empatados'];

$pganados = 3*3;
$pperdidos = 0*0;
$pempatados = 2*1;

$total = $pganados+$pperdidos+$pempatados;

echo "Puntos totales = " .$total;  

?>