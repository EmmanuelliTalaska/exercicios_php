<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CRUD login</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Login em PHP</title>
    </head>
 
    <body>
         
        <h1>Sistema de Login em PHP</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Olá, visitante. <a href="formulario.html">Login</a></p>
        <?php endif; ?>
 
    </body>
</html>
