<?php
require_once 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT usuario, email, senha
FROM usuarios WHERE usuario = '$login' AND senha = '$senha'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$r = null;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $r = $row["usuario"];
}
$resultado = [];
if ($r) {
    $sql = "SELECT nome, email FROM usuarios";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo'Usuarios Cadastrados';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //$obj = new stdClass;
        echo'<pre>';
        print_r($row["nome"].'-'.$row["email"]);
    }
    $pdo = null; // Fecha a conexão
}
?>
<style>
    body {
        background-image: url('img/backMercado.png');
        background-size: cover; /* Isso ajustará automaticamente o tamanho da imagem para cobrir toda a tela */
        background-position: center; /* Isso centralizará a imagem na tela */
        background-repeat: no-repeat; /* Isso impedirá que a imagem se repita */
    }
</style>
