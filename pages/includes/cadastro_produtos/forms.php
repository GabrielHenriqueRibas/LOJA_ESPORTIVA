<div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-xl shadow-md border border-slate-100">
    <h2 class="text-xl font-bold text-slate-800 mb-5">Cadastrar Produto</h2>
    <form method="POST" class="space-y-4">
        <div>
            <label for="nome" class="block text-sm font-medium text-slate-700 mb-1">Nome do Produto</label>
            <input 
                type="text" 
                id="nome"
                name="nome" 
                placeholder="Ex: Notebook Gamer"
                required
                class="w-full px-3 py-2 border border-slate-300 rounded-lg shadow-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
            >
        </div>

        <div>
            <label for="preco" class="block text-sm font-medium text-slate-700 mb-1">Preço (R$)</label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-slate-400 sm:text-sm">R$</span>
                </div>
                <input 
                    type="number" 
                    id="preco"
                    step="0.01" 
                    inputmode="decimal" 
                    name="preco" 
                    placeholder="0,00"
                    required
                    class="w-full pl-9 pr-3 py-2 border border-slate-300 rounded-lg text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                >
            </div>
        </div>

        <button 
            type="submit" 
            class="w-full mt-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg shadow transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
            Cadastrar Produto
        </button>
    </form>
</div>