<?php
// Configurações do banco de dados
$host = 'localhost';
$dbname = 'todo_list';
$username = 'root';
$password = '';

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Habilita exceções para erros
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage()); // Exibe mensagem de erro
}