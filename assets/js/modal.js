function abrirModalEditar(id_tarefa, titulo, descricao, data_conclusao, imagem) {
    // Exibe o ID da tarefa
    document.getElementById('id-tarefa-editar').textContent = id_tarefa;

    // Preenche o formulário com os dados da tarefa
    document.getElementById('id_tarefa').value = id_tarefa;
    document.getElementById('titulo').value = titulo;
    document.getElementById('descricao').value = descricao;
    document.getElementById('data_conclusao').value = data_conclusao;

    // Exibe a imagem atual (se houver)
    const imagemAtualContainer = document.getElementById('imagem-atual-container');
    const imagemAtualLink = document.getElementById('imagem-atual-link');
    if (imagem) {
        imagemAtualLink.href = imagem;
        imagemAtualContainer.style.display = 'block';
    } else {
        imagemAtualContainer.style.display = 'none';
    }

    // Exibe o modal
    document.getElementById('modal-editar').style.display = 'block';
}
// Fecha o modal
function fecharModalEditar() {
    document.getElementById('modal-editar').style.display = 'none';
}

// Fecha o modal ao clicar no botão de fechar (×)
document.querySelector('.fechar-modal').addEventListener('click', fecharModalEditar);

// Fecha o modal ao clicar fora do conteúdo
window.addEventListener('click', function(event) {
    const modal = document.getElementById('modal-editar');
    if (event.target === modal) {
        fecharModalEditar();
    }
});


// Abre o modal de exclusão
function abrirModalExcluir(id_tarefa) {
    document.getElementById('id_tarefa_excluir').value = id_tarefa;
    document.getElementById('modal-excluir').style.display = 'block';
}

// Fecha o modal de exclusão
function fecharModalExcluir() {
    document.getElementById('modal-excluir').style.display = 'none';
}

// Fecha o modal ao clicar no botão de fechar (×)
document.querySelector('.fechar-modal').addEventListener('click', fecharModalExcluir);

// Fecha o modal ao clicar fora do conteúdo
window.addEventListener('click', function(event) {
    const modal = document.getElementById('modal-excluir');
    if (event.target === modal) {
        fecharModalExcluir();
    }
});

// Fecha o modal ao clicar em "Cancelar"
document.querySelector('.btn-cancelar').addEventListener('click', fecharModalExcluir);


