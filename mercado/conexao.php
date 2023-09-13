<?php
$host = 'localhost'; // Endereço do banco de dados
$port = '5432'; // Porta padrão do PostgreSQL
$dbname = 'teste'; // Nome do banco de dados
$user = 'postgres'; // Nome de usuário
$password = 'Renato@2023'; // Senha

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    // Configuração para relatar erros PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão com o banco de dados PostgreSQL estabelecida com sucesso!";
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>