<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Array de tareas pendientes
$tareas = array(
    "Estudiar para el examen de matemáticas",
    "Terminar el ensayo de literatura",
    "Preparar la presentación de ciencias",
    "Hacer ejercicio",
    "Comprar víveres"
);

// Mostrar la lista de tareas pendientes
echo "Lista de tareas pendientes:\n";
foreach ($tareas as $indice => $tarea) {
    echo ($indice + 1) . ". $tarea\n";
}




function leer_entrada_usuario() {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        // Windows
        return fgets(fopen("php://stdin", "r"));
    } else {
 }
}


$tareas = array(
    "Estudiar para el examen de matemáticas",
    "Terminar el ensayo de literatura",
    "Preparar la presentación de ciencias",
    "Hacer ejercicio",
    "Comprar víveres"
);


echo "Lista de tareas pendientes:\n";
foreach ($tareas as $indice => $tarea) {
    echo ($indice + 1) . ". $tarea\n";
}



?>


</body>
</html>