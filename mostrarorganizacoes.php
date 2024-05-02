<?php 

include('dbconfig.php');

$query = "SELECT nome, userInstagram FROM organizacao"; 
    $result = mysqli_query($conexao, $query);

    $organizacoes = array(); // array para armazenar todas as organizações

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $organizacoes[] = $row; // Adicionar cada organização ao array
        }
        $organizacao_cadastrada = true; //se tiver organizacao --> verdade
    } else {
        // se n tiver organizacao variavel é falsa
        $organizacao_cadastrada = false;
    }

?>