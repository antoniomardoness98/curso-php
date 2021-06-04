<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Calculadora php</title>
</head>
<body>
  
  <!-- SUMA -->
  <div class="container">
    <form action="calculadora.php" method="get">
      <h1>Sumando con PHP</h1>
      <input class='form-control mb-1' type="text" name='numero1' value="">
      <input class='form-control mb-3' type="text" name='numero2' value="">
      <button type='submit' class='btn btn-dark'>Sumar</button>
    </form>
  </div>

  <?php
    if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])){
      $numero1 = $_GET['numero1'];
      $numero2 = $_GET['numero2'];
      $resultadoSuma = $numero1 + $numero2;
      echo "<div class='container mb-2 p-3 mt-2 bg-dark text-white'> El resultado de la suma es: $resultadoSuma</div>";
    }
  ?>

  <!-- RESTA -->
  <div class="container">
    <form action="calculadora.php" method="get">
      <h1>Restando con PHP</h1>
      <input class='form-control mb-1' type="text" name='numero3' value="">
      <input class='form-control mb-3' type="text" name='numero4' value="">
      <button type='submit' class='btn btn-warning'>Restar</button>
    </form>
  </div>
  
  <?php
    if(isset($_GET['numero3']) && isset($_GET['numero4']) && is_numeric($_GET['numero3']) && is_numeric($_GET['numero4'])){
      $numero3 = $_GET['numero3'];
      $numero4 = $_GET['numero4'];
      $resultadoResta = $numero3 - $numero4;
      echo "<div class='container p-2 mt-2 bg-warning'> El resultado de la resta es: $resultadoResta</div>";
    }
  ?>
  
  <!-- MULTIPLICACIÓN -->
  <div class="container">
    <form action="calculadora.php" method="get">
      <h1>Multiplicando con PHP</h1>
      <input class='form-control mb-1' type="text" name='numero5' value="">
      <input class='form-control mb-3' type="text" name='numero6' value="">
      <button type='submit' class='btn btn-info'>Multiplicar</button>
    </form>
  </div>

  <?php
    if(isset($_GET['numero5']) && isset($_GET['numero6']) && is_numeric($_GET['numero5']) && is_numeric($_GET['numero6'])){
      $numero5 = $_GET['numero5'];
      $numero6 = $_GET['numero6'];
      $resultadoMultiplicacion = $numero5 * $numero6;
      echo "<div class='container p-2 mt-2 bg-info'>El resultado de la multiplicacion es: $resultadoMultiplicacion</div>";
    }
  ?>
 
  <!-- DIVISIÓN -->
  <div class="container">
    <form action="calculadora.php" method="get">
      <h1>Dividiendo con PHP</h1>
      <input class='form-control mb-1' type="text" name='numero7' value="">
      <input class='form-control mb-3' type="text" name='numero8' value="">
      <button type='submit' class='btn btn-success'>Dividir</button>
    </form>
  </div>

  <?php
    if(isset($_GET['numero7']) && isset($_GET['numero8']) && is_numeric($_GET['numero7']) && is_numeric($_GET['numero8'])){
      $numero7 = $_GET['numero7'];
      $numero8 = $_GET['numero8'];
      $resultadoDivision = $numero7 / $numero8;
      echo "<div class='container p-2 mt-2 bg-success text-white'>El resultado de la Division es: $resultadoDivision</div>";
    }
  ?>

</body>
</html>