<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
</head>
<body>
<form  method="POST">
    <div class="container">
<div class="titulo"><h1>Digite um número</h1></div>
<input type="number" name="num" id="num">
<button name="mostrar" class="btn">Mostrar</button>

<?php
if(isset($_POST['num'])){
   $num = $_POST['num'];
   if($num > 0){
    $resp = "Número positivo";
   }else if($num < 0){
    $resp = "Número negativo";
   }else{
   $resp = "Igual a zero";
   }
   
   echo "<p>$resp</p>";

    }

    

?>
</div>
</form>
</body>
</html>