<?php include 'includes/head.php'; ?>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <?php include 'includes/header.php'; ?>
    <main class="flex-grow">
        <section class="bg-green-600 text-white text-center py-14 px-4">
            <h2 class="text-3xl font-bold mb-2">Tudo para você se movimentar</h2>
            <p class="mb-6">Equipamentos e roupas esportivas com os melhores preços.</p>
            <a href="#produtos" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded">
                Ver produtos
            </a>
        </section>

        <section id="produtos" class="max-w-4xl mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold text-center mb-6">Produtos em destaque</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">

                <div class="bg-white border rounded-lg p-4 text-center shadow-sm">
                    <h3 class="font-semibold">Bola de Futebol</h3>
                    <p class="text-green-700 font-bold text-lg">R$ 129,90</p>
                </div>

                <div class="bg-white border rounded-lg p-4 text-center shadow-sm">
                    <h3 class="font-semibold">Tênis de Corrida</h3>
                    <p class="text-green-700 font-bold text-lg">R$ 349,90</p>
                </div>

                <div class="bg-white border rounded-lg p-4 text-center shadow-sm">
                    <h3 class="font-semibold">Óculos de Natação</h3>
                    <p class="text-green-700 font-bold text-lg">R$ 59,90</p>
                </div>

                <div class="bg-white border rounded-lg p-4 text-center shadow-sm">
                    <h3 class="font-semibold">Halteres 10 kg</h3>
                    <p class="text-green-700 font-bold text-lg">R$ 189,90</p>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>