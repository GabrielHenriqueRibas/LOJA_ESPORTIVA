# Projeto PHP + SQL

## Objetivo

Aplicar o uso de cláusulas SQL em um **projeto PHP** que evolui semana a semana.

O **tema é livre**: seu sistema pode cadastrar qualquer coisa (produtos, funcionários, cursos, alunos, livros etc.). Ao longo das semanas vamos construir, em cima do mesmo projeto, os três pilares de um sistema:

| Pilar | O que significa no projeto |
|---|---|
| **Lógica** | O código PHP que decide o que fazer (receber, validar, buscar, mostrar) |
| **Dados** | O banco de dados e as consultas SQL (foco das aulas) |
| **Estrutura** | A organização das pastas e dos arquivos, para o projeto crescer sem virar bagunça |

## Estrutura de pastas

```
meu-projeto/
├── db/
│   └── conexao.php
├── pages/
│   ├── partials/
│   │   ├── head.php
│   │   ├── header.php
│   │   ├── nav.php
│   │   └── footer.php
│   ├── home.php
│   ├── cadastro-produto.php
│   └── listagem-produto.php
└── index.php
```

> Troque `meu-projeto` pelo nome do seu projeto e `produto` pelo seu tema. Exemplo: um sistema de cursos teria `cadastro-curso.php` e `listagem-curso.php`.

### Para que serve cada parte

| Arquivo / pasta | Função |
|---|---|
| `index.php` | Porta de entrada do site. Monta a página juntando as partes |
| `db/` | Tudo que for ligado ao banco de dados |
| `pages/` | As telas do sistema |
| `pages/partials/` | Pedaços de página que se repetem em todas as telas |


> **Por que separar em partials?** Se o menu mudar, você altera **um arquivo só** e todas as páginas já ficam atualizadas. Sem partials, teria que editar página por página.


## Aula 1 (29/10 a 03/11)

### O que fazer

1. Criar a estrutura de pastas e arquivos acima.
2. Criar as **três páginas estáticas**, cada uma com seu conteúdo em HTML:
   - **Home:** apresentação do sistema e o que ele faz.
   - **Cadastro:** formulário com os campos do seu tema (nome, preço, descrição etc.). Ainda sem enviar nada para lugar nenhum.
   - **Listagem:** uma tabela HTML com **alguns dados de exemplo digitados à mão**, só para definir o visual da tela.
3. Montar os partials (`head`, `header`, `nav`, `footer`) e fazer as páginas usarem eles.
4. Subir o projeto para o GitHub na branch indicada.

## Aula 2 (05/11 a 10/11)

### O que fazer

1. Criar o banco de dados do seu tema (`CREATE DATABASE`, `CREATE TABLE` e alguns `INSERT` de exemplo) e salvar o script em `db/banco.sql`.
2. Ligar o projeto ao banco por meio do arquivo `db/config.php` e incluí-lo (`require_once`) nas páginas que usam o banco.
3. Fazer o **cadastro** funcionar:
- O formulário envia os dados, o PHP grava na tabela com `INSERT` e mostra uma mensagem de sucesso.
4. Fazer a **listagem** funcionar:
- A tabela passa a mostrar os dados salvos no banco, e não mais dados digitados à mão.
5. Usar a cláusula `WHERE` para mostrar dados dinamicamente:
- **Home:** mostrar os dados que atendem a uma condição. Exemplo: produtos com preço abaixo de R$ 100,00.
- **Listagem:** criar filtros (por exemplo, por nome e por preço máximo). Ao filtrar, a tabela mostra só os registros que atendem à condição.

### Testando no computador

Dentro da pasta do projeto, rode o servidor embutido do PHP:

```bash
php -S localhost:8000
```

Depois abra `http://localhost:8000` no navegador. (Se estiver usando XAMPP, coloque a pasta em `htdocs` e acesse por `http://localhost/meu-projeto`.)


## Entrega

**O que entregar:** o link do repositório no GitHub, na branch **`estrutura-NomeProjeto`**.

Exemplo: se o projeto se chama `loja-esportiva`, a branch é `estrutura-loja-esportiva`.

### Passo a passo no Git

```bash
# 1. dentro da pasta do projeto
git init

# 2. cria a branch com o nome combinado e já entra nela
git checkout -b estrutura-NomeProjeto

# 3. adiciona os arquivos e registra o commit
git add .
git commit -m "Estrutura inicial do projeto e páginas estáticas"

# 4. liga ao repositório do GitHub (crie o repositório vazio antes)
git remote add origin https://github.com/SEU-USUARIO/NOME-DO-REPOSITORIO.git

# 5. envia a branch para o GitHub
git push -u origin estrutura-NomeProjeto
```

> **Atenção:** o link entregue deve abrir **direto na branch** `estrutura-NomeProjeto`, e o repositório precisa estar **público** (ou compartilhado com o professor). Teste abrindo o link em uma aba anônima.


## Próximas etapas

| Etapa | O que vamos fazer |
|---|---|
| **Aula 1 (hoje)** | Estrutura de pastas e páginas estáticas |
| Próximas aulas | Banco de dados e conexão em `db/conexao.php`, cadastro e listagem com dados reais |
| Depois | Uso das cláusulas SQL (`WHERE`, `JOIN`, `GROUP BY`, `VIEW`) nas telas do sistema |

> Quanto mais organizada estiver a sua estrutura hoje, mais fácil será encaixar cada novidade nas próximas semanas.