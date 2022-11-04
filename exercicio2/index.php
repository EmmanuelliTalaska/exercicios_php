<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio 2</title>
</head>
<body>
    <div class="container">
    <div class="titulo">
  <h1>Insira um número</h1>
    </div>
<form  method="POST">
            <p class="num">
             <input class="num" type="number" name="numero1" />
            </p>
        <button class="resul">Mostrar números</button>  
        <?php
          if(isset($_POST['numero1'])){
          $n = $_POST['numero1'];
          
         for ($r = 0; $r <= $n; $r++) {
          if ($r % 2 == 0) {
              echo "<p 
                 style=
                 'color:black;
                 background-color: white; 
                  border:3px solid black;
                  width:100px;
                  padding:10px;
                  text-align:center;
                  margin:5px auto;'> $r <br> </p>";
          } else {
              echo "<p 
              style=
              'color:white;
              background-color: black; 
               border:3px solid white;
               width:100px;
               padding:10px;
               text-align:center;
               margin:2px auto;'> $r <br> </p>";
          }
      }
    }
       ?>     
        </form>
        </div>
</body>
</html>