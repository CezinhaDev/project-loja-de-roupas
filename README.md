# 🛍️ vproject-loja-de-roupas

Projeto acadêmico desenvolvido como parte da disciplina de Programação Web. Trata-se de uma loja virtual de roupas com páginas dinâmicas em PHP, formulários de cadastro e um catálogo de produtos estilizado com CSS.

## 🧪 Tecnologias Utilizadas

- HTML5
- CSS3 (com arquivos separados por tela)
- PHP (com conexões e simulações de inserção de dados)
- Estrutura modular

## 📂 Estrutura do Projeto

vproject-loja-de-roupas/
├── extensao/
│ ├── factory/ # (Pasta reservada, possivelmente para lógica futura)
│ └── img/ # Imagens do site
├── cadastro-style.css # Estilos da tela de cadastro
├── cadastro.php # Tela de cadastro de cliente
├── catalogo.css # Estilos da página de catálogo
├── catalogo.php # Página com o catálogo de produtos
├── conexao.php # Script de conexão com o banco de dados
├── index.php # Página inicial
├── inserircliente.php # Lógica para inserir cliente (POST)
├── produto1.php # Página individual do produto 1
├── produto2.php # Página individual do produto 2
├── produto3.php # Página individual do produto 3
├── produto4.php # Página individual do produto 4
├── style.css # Estilo geral
├── telacadastro.css # Estilos específicos da tela de cadastro
├── telacadastro.php # Tela de cadastro (formulário)
├── validarcliente.php # Validação de dados do cliente

markdown
Copiar
Editar

## 🎯 Funcionalidades

- Página inicial com entrada para catálogo
- Exibição de produtos em páginas separadas
- Cadastro de cliente com validação de dados
- Separação clara entre estilo e lógica (CSS e PHP)
- Conexão com banco de dados via `conexao.php` (configurável)

## 🚀 Como executar

1. Clone ou baixe este repositório.
2. Mova os arquivos para o diretório `htdocs` do XAMPP (ou equivalente).
3. Inicie o Apache e o MySQL.
4. Acesse via navegador:  
   `http://localhost/vproject-loja-de-roupas/index.php`

## 👨‍💻 Sobre o projeto

Este projeto foi desenvolvido em grupo, com divisão de responsabilidades. Fiquei responsável pelo desenvolvimento em PHP, integração do formulário com o banco de dados e parte da estilização com CSS.

## 📚 Aprendizados

- Organização de projetos com múltiplas páginas PHP
- Uso de formulários e validação em PHP
- Criação de layouts com CSS separados por contexto
- Conexão básica com banco de dados e manipulação de dados
- Trabalho em equipe com versionamento de código

---

📌 Projeto feito para fins educacionais — não possui integração real com gateways de pagamento ou sistemas de login.
