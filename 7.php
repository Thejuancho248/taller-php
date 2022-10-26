<?php

$nombre = $_POST['nombre'];
$asignatura = $_POST ['asignatura'];
$calificacion = $_POST ['calificacion'];




if ( $calificacion>=7 ){
    echo "el estudiante " .$nombre. " APROBO la asignatura de " .$asignatura. " con un " .$calificacion ;
}else{
    echo "el estudiante " .$nombre. " REPROBO la asignatura de " .$asignatura. " con un " .$calificacion ;
}




?>