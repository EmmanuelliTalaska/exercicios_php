<?php
session_start();
 
require_once '../conexao/init.php';
 
require '../conexao/check.php';
$PDO = db_connect();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cadastro/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1>Bem-vindo administrador<br>informações do banco de dados</h1>
            <img src="../imagens/user.svg" alt="user" class="left-cadastro-img">
        </div>
        <div class="right-cadastro">
            <div class="card-cadastro">
                <h1>Autorizar</h1>
                <form method="get">
                <table class="table table-striped table-hover">
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Ativo</th>
                                <th>Ações</th>
                            </tr>
                            <?php
                            try {
                                $stmt = $PDO->prepare("SELECT * FROM cadastro");

                                if ($stmt->execute()) {
                                    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                                        echo "<tr>";
                                        echo "<td>" . $rs->nome . "</td><td>" . $rs->email . "</td><td>" . $rs->ativo
                                            . "</td><td><center><a name='id'  class='btn btn-outline-dark' href=ativar.php?id=".$rs->id . ">Ativar</a>"
                                            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a class='btn btn-outline-dark' name='id' href=desativar.php?id=" . $rs->id ." >Desativar</a></center></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Erro: Não foi possível recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }
                            ?>
                        </table>
                </form>
                <div class="login">
                    <label for="login"><a href="../login/index.php">Sair</a></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>