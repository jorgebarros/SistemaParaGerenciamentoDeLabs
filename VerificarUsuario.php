<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$connect = mysqli_connect("localhost","root","","db_Adler");

$results = mysqli_query($connect,"SELECT * FROM tb_usuario ORDER BY nome");

if ($_GET['funcao'] == 'logar') {
    $_SESSION['email'] =  $_POST['email'];
    $_SESSION['password'] =  $_POST['password'];
    while ($linhas = mysqli_fetch_array($results)) {

        $results_id = $linhas['id'];

        $results_email = $linhas['email'];
        $results_senha = $linhas['senha'];

        $_SESSION['id'] = $results_id;
        $_SESSION['nome'] = $linhas['nome'];
        $_SESSION['dataNascimento'] = $linhas['dataNascimento'];
        $_SESSION['cpf'] = $linhas['cpf'];
        $_SESSION['endereco'] = $linhas['endereco'];
        $_SESSION['telefone'] = $linhas['telefone'];
        $_SESSION['Instituicao'] = $linhas['Instituicao'];
        $_SESSION['foto'] = $linhas['foto'];
        echo $_SESSION['email'] . " == " . $results_email . " <br>";

        if ($results_email == $email && $results_senha == $password ) {
            header("Location:VisualizarUsuarios.php");
            exit;
        }
    }
    header("Location:LogIn.php?falha=sim");
}

else if ($_GET['funcao'] == 'cadastrar') {

    $record = mysqli_query($connect,"INSERT INTO tb_usuario (email, senha) VALUES ($email, $password)");

    $results2 = mysqli_query($connect,"SELECT * FROM tb_usuario ORDER BY nome");

    while ($linhas = mysqli_fetch_array($results2)) {
        $results_email = $linhas['email'];
        $results_senha = $linhas['senha'];
        $results_id = $linhas['id'];

        $_SESSION['id'] = $results_id;

        echo $results_email . " " . $results_senha . " ";

        if ($results_email == $email && $results_senha == $password )
        {
            header("Location:VisualizarUsuarios.php");
        }
    }
}

?>