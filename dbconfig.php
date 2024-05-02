<?php 

    $dbHost = 'Localhost';
    $dUsername = 'root';
    $dbPassword = 'stephanyc0574**';
    $dbname = 'hortensia';

     
    $conexao = new mysqli($dbHost, $dUsername, $dbPassword, $dbname);

    if($conexao->connect_errno) {
        echo 'Não deu não eim';
    }

?>