<?php
session_start();
include('dbconfig.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: logincolaborador.php');
    exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT id, nome, email, senha FROM colaborador WHERE email = ?";
$stmt = mysqli_prepare($conexao, $query);

if ($stmt === false) {
    exit('Erro na preparação da consulta.');
}

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) == 1) {
    mysqli_stmt_bind_result($stmt, $id, $nome, $email_db, $senha_db);
    mysqli_stmt_fetch($stmt);

    if (password_verify($senha, $senha_db)) {
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email_db;
        $_SESSION['tipo_usuario'] = 'colaborador'; // Adiciona o tipo de usuário à sessão
        header('Location: indexLOGADOCOLABORADOR.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: logincolaborador.php?erro=1');
        exit();
    }
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: logincolaborador.php?erro=1');
    exit();
}

mysqli_stmt_close($stmt);
?>
