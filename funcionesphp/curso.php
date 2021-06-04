<?php
  /*echo "<h1>Funciones en php</h1>";
  echo "<p>Funciona con parametros</p>";
  
  //construyendo mi funcion:
  
  function estudiante($nombre, $apellido){
    echo "nuevo estudiante $nombre $apellido <br>";
  }

  echo "<br><b>Agregando nuevos estudiantes:</b><br>";
  estudiante('hector','jolgorio');
  estudiante('antonio','vacile');
  estudiante('fernando', 'mambo');

  echo "<br>";

  echo "<br><b>Horas requeridas por los cursos:</b><br>";
  function cursos ($nombre, $horas){
    echo "EL curso de $nombre, requiere $horas horas semanales <br>";
  }
  cursos("react","6");
  cursos("practica profesional", "15");

  echo "<br><b>Función Suma</b>";
  function suma($a,$b){
    $resultado = $a + $b;
    echo "<p>el resultado de ($a) + ($b) es: $resultado</p>";
   }

   suma(10,10);

   //variables scope
   $edad = 24;
   function amigo(){
     $edad = 23;
     echo "Mi polola tiene: $edad años";
   }
   amigo();
   echo " y ";
   echo " mi otro amigo tiene: $edad años";

   //variables globales: estan disponibles siempre
   $n1 = 6;
   $n2 = 4;
   function sumar(){
     $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
   }

   sumar();
   echo "<br><br>El resultado de la suma con variables globales es: $s"; 

   //variable global: _SERVER
   echo "<br><br>";
   echo "Ubicación de mi proyecto: ";
   echo $_SERVER['PHP_SELF'];

   echo " <br><br> Nombre de mi servidor: ";
   echo $_SERVER['SERVER_NAME'];*/

   //metodo _GET
   $numero = $_GET['numero'];
   echo "El numero es: ".$numero;

?>