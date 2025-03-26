# Todo List

Um sistema de gerenciamento de tarefas simples e eficiente, desenvolvido em PHP com MySQL, que permite aos usuários criar, editar, concluir e excluir tarefas. O projeto também suporta upload de imagens para cada tarefa.

## Funcionalidades

-   **Cadastro de Usuários**: Criação de contas com validação de senha.
-   **Login e Logout**: Autenticação de usuários com sessões.
-   **Gerenciamento de Tarefas**:
    -   Adicionar novas tarefas com título, descrição, data de conclusão e imagem.
    -   Editar tarefas existentes.
    -   Marcar tarefas como concluídas ou pendentes.
    -   Excluir tarefas.
-   **Upload de Imagens**: Upload de imagens para tarefas com armazenamento organizado por usuário.
-   **Interface Responsiva**: Layout adaptável para diferentes dispositivos.

## Estrutura do Projeto

```plaintext
[index.php](http://_vscodecontentref_/1)                # Página inicial com formulário de login.
[README.md](http://_vscodecontentref_/2)                # Documentação do projeto.
[todo_list.sql](http://_vscodecontentref_/3)            # Script SQL para criação do banco de dados.
actions/                 # Scripts PHP para ações do sistema.
    [adicionar_tarefa.php](http://_vscodecontentref_/4)
    [cadastrar_action.php](http://_vscodecontentref_/5)
    [concluir_tarefa.php](http://_vscodecontentref_/6)
    [editar_tarefa.php](http://_vscodecontentref_/7)
    [excluir_tarefa.php](http://_vscodecontentref_/8)
    [logout.php](http://_vscodecontentref_/9)
    [processa_editar_tarefa.php](http://_vscodecontentref_/10)
    [processar_login.php](http://_vscodecontentref_/11)
assets/                  # Arquivos estáticos (CSS, JS, imagens).
    css/
        [home_style.css](http://_vscodecontentref_/12)
        [login_style.css](http://_vscodecontentref_/13)
        [modal_editar_tarefa.css](http://_vscodecontentref_/14)
    js/
        [modal.js](http://_vscodecontentref_/15)
        [scripts.js](http://_vscodecontentref_/16)
includes/                # Arquivos de configuração e funções auxiliares.
    [autenticacao.php](http://_vscodecontentref_/17)
    [conexao.php](http://_vscodecontentref_/18)
models/                  # Modelos para interação com o banco de dados.
    [cadastro.php](http://_vscodecontentref_/19)
    [tarefas.php](http://_vscodecontentref_/20)
public/                  # Diretório público para uploads.
    uploads/
uploads/                 # Diretório para armazenar imagens de tarefas.
views/                   # Páginas de visualização.
    [cadastro_usuario.php](http://_vscodecontentref_/21)
    [lista_tarefas.php](http://_vscodecontentref_/22)
```
