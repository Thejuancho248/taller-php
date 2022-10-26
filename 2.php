<?php

$Nombre = $_POST['Nombre'];
$Asignatura = $_POST['Asignatura'];
$nota1 = $_POST['nota-1'];
$nota2 = $_POST['nota-2'];
$nota3 = $_POST['nota-3'];


$promedio = ($nota1+$nota2+$nota3)/3;

echo $Nombre ;
echo "<br>";
echo $Asignatura;
echo "<br>";
echo "El promedio academico es ".$promedio;



?>