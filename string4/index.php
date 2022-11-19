<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>String 4</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1>Digite uma data em formato americano <br> ano/mes/dia</h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="data" />
            </p>
            </div>
        <button>Transformar para data brasileira</button> <br>
        
        <?php
      if(isset($_POST['data'])){
      $data = $_POST['data'];
      $dia = substr($data,8,2);
      $mes = substr($data,5,3);
      $ano = substr($data,0,4);
      
        echo "<p style='margin-top: 10px; font-size: 20px; color: black;'>
        Data em formato brasileiro: $dia/$mes$ano </p>";
      }
         ?>
        </form>
        </div>
</body>
</html>