<?php

require_once '../includes/conexao.php';

function cadastrarUsuario($nome, $email, $senha)
{
    global $pdo;

    try {
        //Sefinindo o hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        //Prepara a consulta para inserir novo usuário
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);

        //Executa consulta
        return $stmt->execute();

    } catch (PDOException $e) {
        die('Erro ao cadastrar usuário.' . $e->getMessage());
        //return false;
    }
}