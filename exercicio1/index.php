<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="index.css">
    <title> Exercício 1 PHP 
        <br> calculadora </title>
    <meta charset="utf-8">
</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Exercício 1 PHP 
        <br> calculadora</h1>
        </div>
        <form  method="POST">
            <p class="num">
                Número 1: <input type="number" name="numero1" />
            </p>
            <p class="num">
                Número 2: <input type="number" name="numero2" />
            </p>
            <button class="btn" name="adicao" id="adicao">+</button>

            <button class="btn" name="subtracao" id="subtracao">-</button>

            <button class="btn" name="multiplicacao" id="multiplicacao">X</button>

            <button class="btn" name="divisao" id="divisao">/</button>

            <?php
              if(isset($_POST['adicao'])|| isset($_POST['subtracao'])|| isset($_POST['multiplicacao']) ||isset($_POST['divisao'])) {
                $n1 = $_POST['numero1'];
                $n2 = $_POST['numero2'];

                if (isset($_POST['adicao'])) {
                    echo "<div class ='resul'> Resultado da adição: " . ($n1 + $n2) . "</div>";
                } else if (isset($_POST['subtracao'])) {
                    echo "<div class ='resul'> Resultado da subtração: " . ($n1 - $n2). "</div>";
                } else if (isset($_POST['multiplicacao'])) {
                    echo "<div class ='resul'> Resultado da multiplicação: " . ($n1 * $n2). "</div>";
                } else if (isset($_POST['divisao'])) {
                    echo "<div class ='resul'> Resultado da divisão: " . ($n1 / $n2). "</div>";
                }

            }
                ?>

            </form>
    </div>
</body>

</html>
