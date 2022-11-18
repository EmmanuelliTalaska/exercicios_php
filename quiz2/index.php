<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>QUIZ</title>
</head>
<body>
<form  method="POST">
    <div class="container">
<div class="titulo"><h1>Digite dois números</h1></div>
<input type="number" name="num1" id="num1"> <br>
<input type="number" name="num2" id="num2"> <br>

<input type="radio" name="funcao" value="adicao"> + </input> <br>
<input type="radio" name="funcao" value="subtracao"> - </input> <br>
<input type="radio" name="funcao" value="multiplicacao"> * </input> <br>
<input type="radio" name="funcao" value="divisao"> / </input> <br>

<button>Resultado</button>

<?php

if(isset($_POST['funcao']) && (!empty($_POST['num1'])|| !empty($_POST['num2']))){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['funcao'];
    

    if ($op == 'adicao') {
        echo "<div class ='resul'> Resultado da adição: " . ($num1 + $num2) . "</div>";
    } else if ($op == 'subtracao') {
        echo "<div class ='resul'> Resultado da subtração: " . ($num1 - $num2). "</div>";
    } else if ($op == 'multiplicacao') {
        echo "<div class ='resul'> Resultado da multiplicação: " . ($num1 * $num2). "</div>";
    } else if ($op == 'divisao') {
        if($num2!=0){
            $resul = $num1/$num2;
            echo "<div class ='resul'> Resultado da divisão: " . ($resul). "</div>";
        }else{
            echo "<div class ='resul'> Resultado da divisão: Impossivel resolver </div>";
        }
    }
    }
?>
</div>
</form>
</body>
</html>