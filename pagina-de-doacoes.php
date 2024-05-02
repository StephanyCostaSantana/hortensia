<?php
// Verifica se há uma mensagem de erro no parâmetro GET
if (isset($_GET['erro'])) {
    $erro_message = $_GET['erro'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Doações</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/pghome/CSS/style.css">
</head>
    <body>
        <main class="mainpaginadedoacoes1">
            <div class="formpaginadedoacoes1">
                <form action="registrardoacao.php" method="post">
                    <div class="form-headerdoacoes1">
                        <p id="text1doacoes1">Bem vindo a <strong>doação</strong></p>
                        <p id="text2doacoes1">Preencha os campos abaixo para continuar</p>
                    </div>
                    <div class="input-groupdoacoes1">
                        <div class="input-boxdoacoes1">
                            <input type="number" required placeholder="CPF" class="cpfdoacoes1" name="cpf"/>
                        </div>
                        <div class="input-boxdoacoes1">
                            <input type="number" required placeholder="Valor da doação" class="valordoacoes1" name="valor"/>
                        </div>
                        <div class="input-boxdoacoes1">
                            <select class="opcoesdoacoes1" name="opcoes">
                                <option value="0">Escolha o donatário</option>
                                <?php
                                    include('dbconfig.php');
                                    $query_org = "SELECT id, nome FROM organizacao";
                                    $result_org = mysqli_query($conexao, $query_org);

                                    if (mysqli_num_rows($result_org) > 0) {
                                        while ($row_org = mysqli_fetch_assoc($result_org)) {
                                            echo "<option value='" . $row_org['id'] . "'>" . $row_org['nome'] . "</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>    
                    </div>
                    <div class="botao-1doacoes1">
                        <button id="botao1doacoes1" type="submit">Continuar</button>
                    </div>

                    <?php 
                        // Exibir mensagem de erro, se houver
                        if (!empty($erro_message)) {
                            echo "<center><p style='color: red;'>$erro_message</p></center>";
                        }
                    ?>

                </form>
            </div>
        </main>
    </body>
</html>
