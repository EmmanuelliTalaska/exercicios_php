<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>String 1</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
        <h1>Escreva uma palavra: </h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="word" />
            </p>
            </div>
        <button class="resp">Calcular</button> <br>
        
        <?php
      if(isset($_POST['word'])){
      $word = $_POST['word'];
      $tam = strlen($word);

        echo "<p style='margin-top: 10px; font-size: 25px; color: black;'>
        A palavra contém $tam caracteres</p>";
      }
         ?>
        </form>
        </div>
</body>
</html>