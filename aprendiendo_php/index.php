<?php 
  // lineas de comentarios o /* --- */
  // Declaración de variables: simplemente se inicializan
  $variable1 = 'hola broda';
  // Como saber que tipo de variable es? con gettype($variable) o var_dump($variable)
  //echo gettype($variable1);
  //en variables se recomienda utilizar camelcase
  echo var_dump($variable1);
  echo '<p> Hola, la variable es: $variable1 </p>';
  //comillas simples son para texto estricto, se recomienda utilizar comillas dobles
  echo "<p> Holaaa la variable es: $variable1 </p>";

  /* tipos de datos:
  existen varios tipos de datos entre ellos encontramos:
  enteros, flotantes, cadenas o strings
  $entero = 1231312, $flotantes = 1.84, $cadena = 'holaaaaa'
  */
  /*
   \n: nueva linea
   \r: retorno de carro
   \t: tabulación
   \\: barra invertida
   \$: signo de dolar
   \": comillas dobles
  */
  $nombre = 'Antonio Enrique Alfonso';
  $apellido = 'Mardones San Martin';
  echo $nombre.$apellido." "; //el punto nos permite concatenar pero nos falta un espacio
  echo $nombre." ".$apellido;
  //php permite conectar codigo con html! lo cual es super util!
  //ejemplo
  $google = 'ir a google';
  echo " <a href='https://google.cl' target=_blank >".$google."</a>";
  //boleano True or False
  $boleano=True;
  echo var_dump($boleano); 
  //ejemplo
  $a = 10;
  if($a<11){
    echo "<p>es menor</p>";
  };
?> 