<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>string 6</title>
</head>
<body>
    <div class="cont">
    <div class="titulo">
        <h1 class="Titulo">Invertendo palavras <br> <br>
        rb.arblu.www </h1>
    </div>
<form  method="POST">
   
        <button class="res" name="funcao">Mostrar</button> <br> <br>
        
        <?php
      if(isset($_POST['funcao'])){
      $link = "rb.arblu.www";
      $inverso =  strrev($link);
    
      
        echo "<a style='margin-top: 15px; font-size: 35px; color: black;' href='https://www.ulbra.br/'>
         $inverso
     </a>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>