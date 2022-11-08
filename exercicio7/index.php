<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>exercicio 7</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TCalculo">Cálculo de prestação em atraso</h1>
  <h1 class="TValores">Insira os valores</h1>
    </div>
<form  method="POST">
        
            <p class="inputN">
             Valor da prestação: <input class="inputR" type="number" name="VP" />
            </p>
            
            <p class="inputN">
             Tempo de atraso: <input class="inputR" type="number" name="TA" />
            </p>
            
            <p class="inputN">
             Taxa: <input class="inputR" type="number" name="TX" />
            </p>
            
            
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['VP']) || isset($_POST['TX']) || isset($_POST['TA'])){
        $valorPrest = $_POST['VP'];
        $taxa = $_POST['TX'];
        $tempoAtr = $_POST['TA'];
        $prestacao = $valorPrest+($valorPrest*($taxa/100)*$tempoAtr);
        
           echo
           "<p style='font-size: 20px; margin-top: 20px;'> O valor da prestação em atraso ficou R$$prestacao com $tempoAtr dias de atraso </p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>