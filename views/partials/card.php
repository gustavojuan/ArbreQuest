<div class="card shadow">
    <img src="<?= $tree['imagen']; ?>" alt="<?= $tree['titulo']; ?>" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title display-5 "><?= $tree['titulo']; ?></h5>
        <p class="card-text"><?= $tree['descripcion']; ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $tree['municipio']; ?></li>
        <li class="list-group-item"><?= $tree['especie']; ?></li>
    </ul>
    <div class="card-body text-center">
        <a href="#" class="btn btn-primary">
            Ver árbol
        </a>
    </div>
</div>
