<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>exercicio 8</title>
</head>
<body>
    <div class="cont">
    <div class="titulo">
        <h1 class="TCalculo">Cálculo de combustível</h1>
  <h1 class="TValores">Insira os valores</h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
             Horas de viagem: <input class="inputR" type="number" name="tempo" />
            </p>
            <p class="inputN">
             Velocidade média: <input class="inputR" type="number" name="velocidade" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['tempo']) || isset($_POST['velocidade'])){
        $tempo = $_POST['tempo'];
        $velocidade = $_POST['velocidade'];
        $distancia = $tempo*$velocidade;
        $litros = $distancia/12;

        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>Litros de gasolina gastos: $litros litros <br>
        Horas de viagem: $tempo h <br> Distância percorrida: $distancia km <br> Velocidade média: $velocidade km</p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>