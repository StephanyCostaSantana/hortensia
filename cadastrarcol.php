<?php
$estado = 'SP'; // example value
?>

<?php 
    session_start(); 

    include('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $dtnasc = $_POST['dtnasc'];
        $cpf = $_POST['cpf'];
        $localizacao = $_POST['localizacao'];
        $senha = $_POST['senha'];
        $estado = $_POST['estado'];

        
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    

        
        $check_query = "SELECT * FROM colaborador WHERE cpf = '$cpf' OR email = '$email'";
        $result = mysqli_query($conexao, $check_query);

        
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['erro_cadastro'] = true; 
            header('Location: cadastrocolaborador.php?erro= Email ou CPF já cadastrados!');
            exit();
        } else {
            
            $query = "INSERT INTO colaborador (nome, email, telefone, dt_Nasc, cpf, localizacao, estado, senha) VALUES ('$nome', '$email', '$telefone', '$dtnasc', '$cpf', '$localizacao', '$estado', '$senha_hash')";
            
            
            if (mysqli_query($conexao, $query)) {
                header('Location: ../index.php');
                
            } else {
                echo "Erro ao cadastrar. Por favor, tente novamente.";
            }
        }

        
        mysqli_close($conexao);
    }
?>