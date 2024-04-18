<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales de colombia</title>
</head>
<body>
<center>
<?php
$ciudadesColombia = array(
    array("Bogota", "Cundinamarca"),     
    array("Medellin", "Antioquia"),      
    array("Cali", "Valle del Cauca")
);


echo "<h2>Capitales de Colombia</h2>";
echo "<p>Numero de ciudades: " . count($ciudadesColombia) . "</p>"; 


echo "<table border='1'>";
echo "<tr><th>Ciudad</th><th>Departamento</th></tr>";


foreach ($ciudadesColombia as $Ciudad) {
    echo "<tr>";
    foreach ($Ciudad as $detale) {
        echo "<td>$detale</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</center>
</body>
</html>