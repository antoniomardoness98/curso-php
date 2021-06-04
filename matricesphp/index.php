<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrices PHP</title>
</head>
<body>

<?php
  echo "<h2>A continuación se presentan las matrices en php</h2>";
  echo "<p>Matrices: Arreglos multifuncionales</p>";
  //declaración de matrices
  $datos = [
    ["nombre" => "pepe", "edad" => 25, "peso" => 80],
    ["nombre" => "juan", "edad" => 22, "peso" => 75]
  ];
  print "<p>{$datos[1]['nombre']} tiene {$datos[1]['edad']} años</p>\n";
  //seleccionamos la fila luego la columna

  //ciclo for-each
  //usaremos un array asociativo:
  $futbol = [
    'barcelona' => 'messi',
    'juventus' => 'cr7',
    'real madrid' => 'benzema',
  ];

  echo "<h3>Equipo: jugador</h3>";
  foreach ($futbol as $dato => $valor) {
    echo $dato.":  $valor".'<br>';
  };


?>
  
</body>
</html>