<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de colaborador</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../pghome/CSS/style.css">
    
</head>
<body>

    <?php 
        
        include_once('header-padrao.php');

        $row = [
            'estado' => 'Selecione um estado'
        ]; 

    ?>

    <section class="cadastrocolaborador">

        <div class="formulariocadastrocolaborador">


            <form action="cadastrarcol.php" method="POST">
                <br><br>
            
                <div id="etapa1" onclick="etapaChange1()" class="insideform">
                    <div class="titleform">
                        <h1>Cadastro <span class="bolder">pessoal</span></h1>
                        <p>Digite os seus dados para prosseguir</p>
                    </div>

                    <div class="pinputs">
                        <input type="text" placeholder="Nome" name="nome">
                        <input type="email" placeholder="E-mail" name="email">
                        <input type="tel" placeholder="Telefone" name="telefone">
                        <input type="date" placeholder="Data de nascimento" name="dtnasc">
                    </div>

                    <?php 
                        if (isset($_GET['erro'])) {
                            $erro_message = $_GET['erro'];
                        }
                    
                        // Exibir mensagem de erro, se houver
                        if (!empty($erro_message)) {
                            echo "<center><p style='color: red;'>$erro_message</p></center>";
                        }
                    ?>

                  
                </div>
            
                <div id="etapa2" onclick="etapaChange2()" class="insideform">

                    <div class="titleform">
                        <h1>Cadastro <span class="bolder">pessoal</span></h1>
                        <p>Digite os seus dados para prosseguir</p>
                    </div>

                    <div class="pinputs">
                        <input type="text" placeholder="CPF" name="cpf">
                        <select name="estado" required>
                            <option value="">Selecione um estado</option>
                            <?php foreach (['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'] as $estado): ?>
                                <option value="<?= htmlspecialchars($estado) ?>" <?php if ($row['estado'] == $estado): ?>selected<?php endif; ?>><?= htmlspecialchars(ucfirst($estado)) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" placeholder="Localização" name="localizacao">
                        <input type="password" placeholder="Senha" name="senha">
                    </div>

                    <button type="submit" class="continuarbtn" id="finalizar" onclick="submitForm()">Finalizar Cadastro</button>

                    



                </div>

            </form>


            <div class="etapas">
                
                <div class="continuarbtn" id="indicador2" onclick="etapaChange2()">Próxima</div>

                
                <div id="indicador1" onclick="etapaChange1()" ><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="svgindicadoranterior"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M13.06 3.283a1.5 1.5 0 0 0-2.12 0L5.281 8.939a1.5 1.5 0 0 0 2.122 2.122L10.5 7.965V19.5a1.5 1.5 0 0 0 3 0V7.965l3.096 3.096a1.5 1.5 0 1 0 2.122-2.122z"/></g></svg> Anterior</div>

            </div>

        </div>

    </section>

    
    <script src="../js/CADASTRO.js"></script>
</body>
</html>






