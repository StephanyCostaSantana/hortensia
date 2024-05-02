<?php 
include('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
    $id_organizacao = $_POST['opcoes'];
    $cpf = $_POST['cpf'];

    $query_colaborador = "SELECT id FROM colaborador WHERE cpf = ?";
    $stmt_colaborador = mysqli_prepare($conexao, $query_colaborador);

    if ($stmt_colaborador === false) {
        $erro_message = "Erro na preparação da consulta do colaborador.";
    } else {
        mysqli_stmt_bind_param($stmt_colaborador, "s", $cpf);
        mysqli_stmt_execute($stmt_colaborador);
        mysqli_stmt_store_result($stmt_colaborador);

        if (mysqli_stmt_num_rows($stmt_colaborador) == 0) {
            header('Location: pagina-de-doacoes.php?erro=CPF não encontrado no banco de dados.');
            exit();
        } else {
            mysqli_stmt_bind_result($stmt_colaborador, $id_colaborador);
            mysqli_stmt_fetch($stmt_colaborador);

            $query_doacao = "INSERT INTO doacoes (id_organizacao, id_colaborador, valor, data_doacao) VALUES (?, ?, ?, NOW())";
            $stmt_doacao = mysqli_prepare($conexao, $query_doacao);

            if ($stmt_doacao === false) {
                $erro_message = "Erro na preparação da consulta de doação.";
            } else {
                mysqli_stmt_bind_param($stmt_doacao, "iid", $id_organizacao, $id_colaborador, $valor);
                if (mysqli_stmt_execute($stmt_doacao)) {
                    header('Location: doacao-concluida.html');
                    exit();
                } else {
                    $erro_message = "Erro ao realizar a doação. Por favor, tente novamente.";
                }
            }

            mysqli_stmt_close($stmt_doacao);
        }

        mysqli_stmt_close($stmt_colaborador);
    }
}
?>
