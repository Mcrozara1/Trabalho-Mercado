<?php
require_once 'conexao.php';
/* echo'<pre>';
var_dump($_POST);
die; */
$login = $_POST['login'];
$senha = $_POST['senha'];
$opcao = $_POST['opcao'];//1 Logar - 2 Cadastrar

if($opcao == 1){
    $sql = "SELECT usuario, email, senha
    FROM usuarios WHERE usuario = '$login' AND senha = '$senha'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $r = '';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $r = $row["usuario"];
    }
    echo $r;
}else{
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sql = "INSERT INTO public.usuarios(
        usuario, email, senha, nome)
        VALUES ('$login', '$email', '$senha', '$nome');";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $r = '';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($row);
        //$r = $row["usuario"];
    }
    echo $r;
}
$pdo = null; // Fecha a conexão
