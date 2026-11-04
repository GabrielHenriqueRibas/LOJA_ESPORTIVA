<?php
    require '../db/conexao.php';
    $resultado = $conexao->query("SELECT * FROM produto ORDER BY id_produto DESC");
?>
<?php include './includes/head.php'; ?>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <?php include_once './includes/header.php'; ?>
    <main class="flex-grow">
        <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Lista de Produtos</h2>
    
            <div class="divide-y divide-slate-100">
                <?php while($produto = $resultado->fetch_assoc()): ?>
                    <div class="flex justify-between py-3">
                        <span class="text-slate-800"><?= htmlspecialchars($produto['nome']) ?></span>
                        <span class="font-semibold text-slate-900">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></span>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
    <?php include_once './includes/footer.php'; ?>
</body>
