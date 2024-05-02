<?php 

    session_start(); 

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hortensia</title>

        <link rel="stylesheet" href="../pghome/CSS/style.css">
        <link rel="stylesheet" href="../pghome/CSS/swiper.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="icon" href="assets/icon-hortensia.png" type="image/x-icon">
        
    </head>

    <body>
            
        <header>

                <h1>Hortensia</h1>

                <ul class="nav" id="navigation_header">

                    <div class="mobile-menu-icon">

                        <button  onclick="menuShow()" class="icon-x" id="x">
                            <span class="material-symbols-outlined">
                            close
                            </span>
                        </button>
                    </div>

                    <li class="inicio"><a href="index.php" class="inicio">Início</a></li>
                    <li class="mapa"><a href="mapa.php" class="mapa">Mapa</a></li>
                    <li class="doa"><a href="pagina-de-doacoes.php" class="doa">Doações</a></li>
                    <li class="sobre"><a href="../paginasobre/about.php" class="sobre">Sobre</a></li>
                    <li class="Dicas"><a href="../paginadicas/dicas.php" class="dicas">Dicas</a></li>
                    <li class="Login"><a href="#link-cadastro" class="login">Login</a>

                    <div class="menu-login">
                        <ul>
                            <li><a href="logincolaborador.php">Doador</a></li>
                            <li><a href="loginorganizacao.php">Empresa/Ong</a></li>
                        </ul>
                    </div>

                    </li>           
                </ul>

                <div class="mobile-menu-icon">

                    <button  onclick="menuShow()" class="icon">
                        <span class="material-symbols-outlined">
                        menu
                        </span>
                    </button>
                </div>
            
            </header>

            <script src="../pghome/JS/index.js"></script>
    
    </body>