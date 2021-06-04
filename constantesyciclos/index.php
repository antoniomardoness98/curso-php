<?php

  echo "<p><b> - Constantes: </b></p>";
  //constantes:
  //es similar las variables pero no pueden modificar su valor ej:
  //si intento mutar el valor entonces me devolverá un error
  echo "<p>Similar a las variables pero no pueden mutar su valor:</p>";
  define('curso',3);
  define('constante', 'esto es una constante');
  echo constante." ".curso;


  //Condicionales:
  //if else, >, <, >=,<=, ==
  echo "<p><b> - IF o Condicionales:</b></p>";
    $numeroUno=15;
    $numeroDos=10;
    if($numeroUno > $numeroDos){
      echo "<p>Numero 1 es mayor que numero 2</p>";
    }else{
      echo "<p>Numero 1 NO es mayor que numero 2</p>";
    };
  //tambien podemos probar el elseif
  echo "<p>Elseif</p>";
  $numeroTres = 4;
  $numeroCuatro = 10;
  //realizando una comparación
  if ($numeroTres > $numeroCuatro) {
    echo "$numeroTres es mayor que $numeroCuatro";
  }elseif($numeroTres==$numeroCuatro){
    echo "Los numeros son iguales ($numeroTres=$numeroCuatro)";
  }else {
    echo "$numeroCuatro es mayor que $numeroTres";
  };
  

  //SWITCH: es funcional para crear un tipo menu:
  echo "<p><b> - Swtich o Menu:</b></p>";
  $opcion = 2;
  switch ($opcion) {
    case 1:
      echo "<p>La opcion seleccionada es la opcion: $opcion</p>";
      break;
    case 2:
      echo "<p>La opcion seleccionada es la opcion: $opcion</p>";
      break;
    case 3:
      echo "<p>La opcion seleccionada es la opcion: $opcion</p>";
      break;
    default:
      echo "Lo sentimos esa opción no esta disponible";
      break;
  }

  //horario
  $cursos = 'metodologia';
  switch ($cursos) {
    case 'taller':
      echo "Tus clases de $cursos son los martes y miercoles";
      break;
    case 'react':
      echo "Tus clases de $cursos son los lunes y viernes";
    default:
      echo "No tienes esa asignatura este semestre";
      break;
  }

  //comenzamos a ver los ciclos
  echo "<p><b> - Ciclos: </b></p>";
  echo "<p><u>Ciclo While</u></p>";
  $a = 1;
  $b = 1;
  while ($a <= 10) {
    echo "$a ";
    $a = $a + 1; 
  }

  echo "<p><u>Ciclo Do while:</u></p>";
  do {
    echo "$b ";
    $b++;
  } while ($b <= 10);

  echo "<p><u>Ciclo for:</u></p>";
  for ($i=1; $i<10 ; $i++) { 
    echo "$i ";
  }


?>