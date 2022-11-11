<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>exercicio 5</title>
</head>
<body>
    <div class="cont">
    <div class="titulo">
        <h1 class="TMedia">Calculadora de média</h1>
  <h1 class="TValores">Digite os valores</h1>
    </div>
<form  method="POST">
            <p class="inputN">
             Digite o primeiro valor: <input class="inputR" type="number" name="v1" />
            </p>
            <p class="inputN">
             Digite o segundo valor: <input class="inputR" type="number" name="v2" />
            </p>
            <p class="inputN">
            Digite o terceiro valor:  <input class="inputR" type="number" name="v3" />
            </p>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['v1']) || isset($_POST['v2']) || isset($_POST['v3'])){

        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $v3 = $_POST['v3'];
        $media = ($v1 + $v2 + $v3)/3;
        
        echo "<p style='margin-top:20px;font-size: 14pt; color: white;'> A média dos valores é: </p>" . "<p style='color: white;'>$media</p>";
      }


         ?>
        </form>
        </div>
</body>
</html>