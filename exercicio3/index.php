<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio 3</title>
</head>
<body>
    <div class="cont">
  <h1>Insira os valores de A, B e C</h1>
    </div>
<form  method="POST">
            <p class="num">
             A: <input class="inputR" type="number" name="a" />
            </p>
            <p class="num">
             B: <input class="inputR" type="number" name="b" />
            </p>
            <p class="num">
            C:  <input class="inputR" type="number" name="c" />
            </p>
        <button class="resposta">Calcular</button> <br>
        
        <?php
        if(isset($_POST['a']) || isset($_POST['b']) || isset($_POST['c'])){

          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          $r1 =(pow($a ,2));
          $r2 =(pow($b,2));
          $s1 =(pow($c,2));
          $s2 =(pow($b,2));
          $r = $r1 + $r2;
          $s = $s1 + $s2;
          $d =($r + $s)/2;

          echo "O valor de R é: " . $r . "<br>";
          echo "O valor de S é: " . $s . "<br>";
          echo "O valor de D é: " . $d;
        }

         ?>
        </form>
</body>
</html>