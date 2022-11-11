<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>exercicio 4</title>
</head>
<body>
    <div class="cont">
    <div class="titulo">
        <h1 class="TBhaskara">Bhaskara</h1>
  <h1>Insira os valores de A, B e C</h1>
    </div>
<form  method="POST">
            <p class="inputN">
             A: <input class="inputR" type="number" name="a" />
            </p>
            <p class="inputN">
             B: <input class="inputR" type="number" name="b" />
            </p>
            <p class="inputN">
            C:  <input class="inputR" type="number" name="c" />
            </p>
        <button class="res">Calcular</button> <br>
        
        <?php
        if(isset($_POST['a']) || isset($_POST['b']) || isset($_POST['c'])){

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];
          $delta = ($b*$b)-((4*$a)*$c);
          if($delta < 0){
            echo "<p style='font-size:14pt; margin-top:20px;'> Não existe cálculo de bhaskara para esses valores. 
            <br> Delta negativo e raiz não existe </p>";
          }else{
            $x1 = (-$b + sqrt ($delta)) / (2 * $a);
            $x2 = (-$b - sqrt ($delta)) / (2 * $a);
            echo "<p style='font-size:14pt; margin-top:20px;'>valor de delta: </p>" . $delta . "<br>";
            echo "<p style='font-size:14pt;'> valor de x1: </p>" . $x1 . "<br>";
            echo "<p style='font-size:14pt;'> valor de x2: </p>" . $x2;
          }
          

         
        }

         ?>
        </form>
        </div>
</body>
</html>