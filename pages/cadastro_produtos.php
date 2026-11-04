<?php
    require '../db/conexao.php';

    if($_POST){
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        $sql = "INSERT INTO produto(nome, preco) VALUES ('$nome', $preco)"; 

        $conexao->query($sql);
    }
?>

<?php include './includes/head.php'; ?>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <?php include_once './includes/header.php'; ?>
    <main class="flex-grow">
        <?php include './includes/cadastro_produtos/forms.php' ?>
    </main>
    <?php include_once './includes/footer.php'; ?>
</body>


