<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="<?= $tree['imagen']; ?>" alt="<?= $tree['titulo']; ?>">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?= $tree['titulo']; ?></div>
        <p class="text-gray-700 text-base">
            <?= $tree['descripcion']; ?>
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $tree['municipio']; ?></span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $tree['especie']; ?></span>

    </div>
    <div class="my-4 text-center">
        <button class="bg-blue-500 text-white py-2 px-12 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 mx-auto">
            Vér árbol
        </button>
    </div>
</div>

