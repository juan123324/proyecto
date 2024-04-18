<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Frontend</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: rgb(244, 5, 5);
            color: white;
            padding: 10px;
        }

        p {
            font-size: 18px;
            color: #555;
            text-align: left;
        }

        button {
            background-color: #e60a0abb;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
         
            button:hover { 
            background-color: #dd2915;
        }

        ul {
            text-align: left;
        }

        li {
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <h1>El Frontend y sus recursos</h1>
    </header>
</body>

<p><b>En PHP, se puede crear un array de varias maneras, describe cada una con
    su ejemplo</b></p>

    <ul>
    <li>Sintaxis de Array Tradicional:
        Esta es la forma más común y básica de crear un array en PHP, utilizando la función array() o los corchetes [].</li>
    </ul>

    <?php

    // Utilizando la función array()
    $numeros = array(0, 1, 2, 3, 4, 5);
        echo $numeros[3];
        echo "<br> <br>";
    // Utilizando corchetes []
    $colores = array(1=>'rojo', 2=>'verde', 3=>'azul');
    foreach($colores as $num=>$color) {
        echo "El color " . $num . " es " . $color;
        echo "<br>";
    }
        
  ?>