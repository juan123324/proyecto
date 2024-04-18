<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificar numeros</title>
    <style>
    </style>
</head>
<body>
 <center>  
    <form action="" method="post">
    <input type
<?php

function generarArregloAleatorio() {
    $arreglo = array();
    for ($i = 0; $i < 10; $i++) {
        $arreglo[] = rand(1, 100); 
    }
    return $arreglo;
}

function clasificarNumeros($arreglo) {
    $pares = array();
    $impares = array();
    foreach ($arreglo as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }
    return array('pares' => $pares, 'impares' => $impares);
}

$arregloAleatorio = generarArregloAleatorio();

$clasificacion = clasificarNumeros($arregloAleatorio);

echo "Arreglo original: " . implode(", ", $arregloAleatorio) . "<br>";
echo "Arreglo de números pares: " . implode(", ", $clasificacion['pares']) . "<br>";
echo "Arreglo de números impares: " . implode(", ", $clasificacion['impares']) . "<br>";

?>
</center>
</body>
</html>