<?php
// inclui o arquivo de inicialização
require '../conexao/init.php';

 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

 
// cria o hash da senha
$passwordHash = $password;
 
//Conecta no banco de dados
$PDO = db_connect();
 
//Verifica se o email e a senha existem no banco de dados
$sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :password AND ativo='1'";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];

if (count($users) <= 0){
header('Location: ../login/index.php');
}else{
    if($user['tipo'] == 'usu'){
        header('Location: ../galeria/galeria.php');
        }else{
            header('Location: ../registro/registro.php');
        }
}
?>