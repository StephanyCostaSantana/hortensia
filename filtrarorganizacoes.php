<?php 
include('dbconfig.php');

$estado_filtro = '';

if (isset($_POST['estado']) && !empty($_POST['estado'])) {
    $estado_filtro = $_POST['estado'];
}

$query = "SELECT nome, userInstagram FROM organizacao";

if (!empty($estado_filtro)) {
    $query .= " WHERE estado = '$estado_filtro'";
}

$result = mysqli_query($conexao, $query);

$organizacoes = array(); 

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $organizacoes[] = $row; 
    }
    $organizacao_cadastrada = true; 
} else {
    
    $organizacao_cadastrada = false;
}
?>
