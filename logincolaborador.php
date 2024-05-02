<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de colaborador</title>
    <link rel="stylesheet" href="styleheader.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../pghome/CSS/style.css">
</head>
<body>
    
    <?php 
        
        include_once('header-padrao.php');

    ?>
    

    <section class="cadastrocolaborador">

        <div class="formulariocadastrocolaborador login">

            <form action="logincol.php" method="POST">
                <br><br>
            
                <div id="etapa1" onclick="etapaChange1()" class="insideform">
                    <div class="titleform">
                        <h1><span class="bolder">Login</span></h1>
                        <p>Digite os seus dados para prosseguir</p>
                    </div>

                    <div class="pinputs">
                        <input type="email" placeholder="E-mail" name="email">
                        <input type="password" placeholder="Senha" name="senha">
                    </div>
                  
                </div>

                <div class="centerbutton">
                    <input type="submit" class="continuarbtn login"  id="finalizar"></input>
                </div>

                <?php

                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                        if (isset($_GET['erro']) && $_GET['erro'] == 1) {
                            echo "<br>";
                            echo "<p id='mensagemErro' style='color: red; text-align: center;'>Credenciais inválidas. Por favor, tente novamente.</p>";
                        }
                    }
            ?>

            
            </form>


            

        </div>

    </section>

    
    <script src="../js/CADASTRO.js"></script>
</body>
</html>

