<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>QUIZ 3</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="TPalavra">Digite uma palavra: </h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="palavra" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['palavra'])){
      $palavra = $_POST['palavra'];
      $tamanho = strlen($palavra);
      $op = 0;

        echo "<p style='margin-top: 10px; font-size: 25px; color: black;'>
        A palavra possui $tamanho caracteres</p>";
        
        while($op < $tamanho){
          $op++;
          echo $op; 
        }

      }
            
         ?>
        </form>
        </div>
</body>
</html>