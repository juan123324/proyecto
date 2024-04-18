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

$notas = array(
    "Matemáticas" => array(
        "Juan Gabriel" => 85,
        "Sebastian Giraldo" => 72,
        "Mauricio Buitrago" => 90
    ),
    "Ciencias" => array(
        "Juan Gabriel" => 78,
        "Sebastian Giraldo" => 88,
        "Mauricio Buitrago" => 95
    ),
    "Literatura" => array(
        "Juan Gabriel" => 65,
        "Sebastian Giraldo" => 70,
        "Mauricio Buitrago" => 75
    )
);


foreach ($notas as $asignatura => $estudiantes) {
    echo "Notas de $asignatura:\n";
    foreach ($estudiantes as $estudiante => $nota) {
        echo "$estudiante: $nota\n";
    }
    echo "<br>";
}
?>

</body>
</html>