git push origin main# Todo List

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

# Requisitos

Servidor Web: Apache ou Nginx.
PHP: Versão 7.4 ou superior.
Banco de Dados: MySQL.
Composer: Para gerenciar dependências (opcional).
Configuração
Clone o repositório:

# Configure o banco de dados:

Importe o arquivo todo_list.sql no seu banco de dados MySQL.
Atualize as credenciais de conexão no arquivo includes/conexao.php.

# Configure as permissões:

Certifique-se de que o diretório uploads/ tem permissões de escrita.

# Inicie o servidor:

Se estiver usando o PHP embutido:
Acesse o sistema:

Abra o navegador e vá para http://localhost:8000.

# Uso

## Cadastro:

Acesse a página de cadastro em /views/cadastro_usuario.php e crie uma conta.
Login:

Faça login com suas credenciais na página inicial.

# Gerenciamento de Tarefas:

Adicione, edite, conclua ou exclua tarefas na página principal após o login.
Tecnologias Utilizadas
Frontend:

HTML5, CSS3, JavaScript.
Design responsivo com CSS puro.
Backend:

PHP para lógica do servidor.
PDO para interação com o banco de dados.
Banco de Dados:

MySQL para armazenamento de dados.
Contribuição
Contribuições são bem-vindas! Siga os passos abaixo para contribuir:

Faça um fork do repositório.
Crie uma branch para sua feature ou correção:
Faça commit das suas alterações:
Envie para o repositório remoto:
Abra um Pull Request.
Licença
Este projeto é licenciado sob a licença MIT. Consulte o arquivo LICENSE para mais detalhes.

Autor
Fernando de Oliveira Almeida - Desenvolvedor do projeto.
