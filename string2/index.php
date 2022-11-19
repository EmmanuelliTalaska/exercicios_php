<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>String 2</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1> Digite seu CEP: </h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="cep" />
            </p>
            </div>
        <button class="resp">MOSTRAR</button> <br>
        
        <?php
      if(isset($_POST['cep'])){
      $cep = $_POST['cep'];
      $digitosFinais = substr($cep, 5,8);

        echo "<p style='margin-top: 10px; font-size: 25px; color: black;'>
        Os 3 últimos dígitos do seu CEP são: $digitosFinais </p>";
      }
         ?>
        </form>
        </div>
</body>
</html>