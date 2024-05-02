<?php 
    include('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $userinsta = $_POST['userinsta'];
        $cnpj = $_POST['cnpj'];
        $localizacao = $_POST['localizacao'];
        $senha = $_POST['senha'];
        $estado = $_POST['estado'];

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $check_query = "SELECT * FROM organizacao WHERE cnpj = ? OR email = ?";
        $stmt_check = mysqli_prepare($conexao, $check_query);

        if ($stmt_check === false) {
            exit('Erro na preparação da consulta.');
        }

        mysqli_stmt_bind_param($stmt_check, "ss", $cnpj, $email);
        mysqli_stmt_execute($stmt_check);
        
        mysqli_stmt_store_result($stmt_check);     
        
        if (mysqli_stmt_num_rows($stmt_check) > 0) { 
            session_start();
            $_SESSION['erro_cadastro'] = true;
            header('Location: cadastroorganizacao.php?erro= Email ou CNPJ já cadastrados!');
            exit(); // Termina o script após redirecionamento
        } else {
            $query = "INSERT INTO organizacao (nome, email, cnpj, senha, telefone, localizacao, estado, userInstagram) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert = mysqli_prepare($conexao, $query);

            if ($stmt_insert === false) {
                exit('Erro na preparação da consulta.');
            }

            mysqli_stmt_bind_param($stmt_insert, "ssssssss", $nome, $email, $cnpj, $senha_hash, $telefone, $localizacao, $estado, $userinsta);
            if (mysqli_stmt_execute($stmt_insert)) {
                header('Location:  ../index.php');
                exit();
            } else {
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }

            mysqli_stmt_close($stmt_insert);
        }

        mysqli_stmt_close($stmt_check);

        mysqli_close($conexao);
    }
?>