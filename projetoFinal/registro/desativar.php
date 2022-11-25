<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
   
}
try {
    $conexao = new PDO("mysql:host=localhost; dbname=bdprojetofinal", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
 
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
var_dump($id);
$stmt = $conexao->prepare("UPDATE cadastro SET ativo ='0' WHERE id = $id");
$stmt->execute();
header('Location: ../registro/registro.php');