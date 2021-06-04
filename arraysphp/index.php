<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays PHP</title>
</head>
<body>
  
<?php
  echo "<h2>En esta leccion veremos arrays:</h2>";
  echo "<p>Array: Estructura de datos que contiene elementos</p>";
  
  $dias = [
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    3,
  ];

  var_dump($dias);

  $estudiante = [
    'nombre' => 'antonio',
    'apellido' => 'mardones',
  ];
  echo "Hola! mi nombre es: ".$estudiante['nombre']." Y mi apellido es: ".$estudiante['apellido'];
  echo "<p>Ejemplo:</p>";

  $cursos = [
    'python',
    'java',
    'php',
    'html',
    'css',
  ];
  //reemplazando un valor
  $cursos[3] = 'javascrip';
  //agregando un valor: 
  $cursos[5] = 'html';
  print_r($cursos);
  //funciones utiles: count($variable)
  echo "<p></p>";
  echo 'El numero de elementos del arreglo es: '.count($cursos);


  //ejercicios con arrays
  $semana[0] = 'Lunes';
  $semana[1] = 'Martes';
  $semana[2] = 'Miercoles';
  $semana[3] = 'Jueves';
  $semana[4] = 'Viernes';
  $semana[5] = 'Sabado';
  $semana[6] = 'Domingo';

  echo "<p></p>";
  echo 'Los dias de la semana son: '.count($semana);

  //arreglos en for:
  echo "<p></p>";
  echo 'Dias de la semana: '; 
  echo "<br>";
  for ($i=0; $i < count($semana) ; $i++) { 
    echo "<br/>";
    echo $semana[$i];
  }

  for ($i=0; $i < count($semana) ; $i++) { 
    if ($semana[$i] == 'Jueves')  {
      echo "<p>Feliz jueves</p>";
    }
  }
  // más ejercicios:
  $amigos = [
    'jose',
    'maria',
    'raul',
    'fernando',
    'antonio',
    'luis',
  ];

  //conseguimos el penultimo elemento
  //el ultimo es -1
  $posicion = count($amigos) - 2;
  echo $amigos[$posicion]; 
  
  //función asort: ordena los elementos en orden alfabetico
  echo "<p>Ordenando Arreglos por orden alfabetico</p>";

  asort($amigos);
  print_r($amigos);
  echo "<p></p>";



  //rsort: orden alfabetico del ultimo al primero
  rsort($amigos);
  print_r($amigos);
  echo "<p></p>";

  //array_chuck: divide un arreglo en más arreglos:
  echo "<p>Array Chunk, divide un arreglo en más arreglos: </p>";
  $funcion = array_chunk($amigos,2);
  print_r($funcion);

  //array_slice: extraemos hasta la posición indicada, el valor es guardado en una variable
  echo "<p>Extraemos con array_slice</p>";
  $funcion2 = array_slice($amigos,3);
  print_r($funcion2);

  //Combinar arreglos: usamos array_marge
  echo "<p>Array merge: combinamos arreglos</p>";
  $compañeros = [
    'sergio',
    'hugo',
    'carla',
    'elias'
  ];
  $funcion3 = array_merge($amigos, $compañeros);
  print_r($funcion3);
  asort($funcion3);
  echo "<p></p>";
  print_r($funcion3);

  //array_pop: elimina el ultimo elemento del arreglo
  $arrayPop = [
    'hola',
    'jaja',
    'como',
    'pero',
  ];
  array_pop($arrayPop);
  echo "<p>Array_pop</p>";
  print_r($arrayPop);

  //buscar elementos en el arrego (search):
  echo "<p>search: buscador de elementos</p>";
  $arrayBuscar = [
    'ejeje',
    'ajaja',
    'ijiji',
  ];
  $buscar = array_search('jajaja',$arrayBuscar);
  echo "El elemento que buscas esta en la posición: ";
  print_r($buscar);

  //invirtiendo el arreglo $buscar
  echo "<p>Arreglo al reves</p>";
  $revez = array_reverse($arrayBuscar);
  print_r($revez);

?>

</body>
</html>