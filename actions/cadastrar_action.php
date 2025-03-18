<?php

require_once '../models/cadastro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    if (cadastrarUsuario($nome, $email, $senha)) {
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    }

    exit();

}