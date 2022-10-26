<?php

$Nombre = $_POST['Nombre'];
$Asignatura = $_POST['Asignatura'];
$Nota1 = $_POST['Nota1'];
$Nota2 = $_POST['Nota2'];
$Nota3 = $_POST['Nota3'];

$multiplicacion = ($Nota1*0.3)+($Nota2*0.3)+($Nota3*0.4);
echo $Nombre;
echo " <br> ";
echo $Asignatura;

if ($multiplicacion>=4.0){
    echo " ¡FELICIDADES! Aprobaste ";
}if($multiplicacion<4.0){
   echo " Resprobaste ";
}

?>