<?php
    require '../db/conexao.php';

    $mensagem = '';
    $erro = '';

    if($_POST){
        $nome = trim($_POST['nome']);
        $preco = $_POST['preco'];
        $id_categoria = $_POST['id_categoria'];

        try {
            $stmt = $conexao->prepare("INSERT INTO produto (nome, preco, id_categoria) VALUES (?, ?, ?)");
            $stmt->bind_param("sdi", $nome, $preco, $id_categoria);
            $stmt->execute();

            $mensagem = 'Produto cadastrado com sucesso!';
        } catch (mysqli_sql_exception $e) {
            $erro = 'Não foi possível cadastrar o produto.';
        }
    }

    $categorias = $conexao->query("SELECT id_categoria, nome FROM categoria ORDER BY nome");
?>

<?php include './includes/head.php'; ?>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <?php include_once './includes/header.php'; ?>
    <main class="flex-grow">
        <?php include './includes/cadastro_produtos/forms.php' ?>
    </main>
    <?php include_once './includes/footer.php'; ?>
</body>


