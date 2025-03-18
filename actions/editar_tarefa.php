<?php
// processa_editar_tarefa.php
session_start();
require_once '../models/tarefas.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $id_tarefa = $_POST['id_tarefa'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_conclusao = $_POST['data_conclusao'];
    $id_usuario = $_SESSION['id_usuario'];

    // Trata o upload da nova imagem (se houver)
    $imagem = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $diretorio = 'assets/uploads/usuario_' . $id_usuario . '/';
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }
        $caminho_imagem = $diretorio . basename($_FILES['imagem']['name']);
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_imagem)) {
            $imagem = $caminho_imagem;
        } else {
            $erro = "Erro ao fazer upload da imagem.";
        }
    } else {
        // Mantém a imagem atual se nenhuma nova imagem for enviada
        $tarefa = buscarTarefaPorId($id_tarefa);
        $imagem = $tarefa['imagem'];
    }

    // Atualiza a tarefa no banco de dados
    if (atualizarTarefa($id_tarefa, $titulo, $descricao, $data_conclusao, $imagem)) {
        header('Location: lista_tarefas.php?sucesso=Tarefa atualizada com sucesso!');
        exit();
    } else {
        header('Location: editar_tarefa.php?id=' . $id_tarefa . '&erro=Erro ao atualizar tarefa.');
        exit();
    }
} else {
    header('Location: lista_tarefas.php');
    exit();
}
?>