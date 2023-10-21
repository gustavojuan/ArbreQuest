<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>

<main class="container d-flex align-items-center justify-content-center py-5">
    <div class="w-50 max-w-md card p-5">
        <div class="text-center">
            <h2 class="mb-4 display-3">Accede para descubrir nuestro patrimonio natural</h2>
        </div>
        <form class="mt-4" action="/login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input id="username" name="username" type="text" class="form-control" required placeholder="Nombre de Usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" name="password" type="password" class="form-control" required placeholder="Contraseña">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Acceder</button>
            </div>
            <ul class="mt-3">
                <?php if (isset($errors['username'])) : ?>
                    <li class="text-danger"><?= $errors['username'] ?></li>
                <?php endif; ?>

                <?php if (isset($errors['password'])) : ?>
                    <li class="text-danger"><?= $errors['password'] ?></li>
                <?php endif; ?>
            </ul>
        </form>
    </div>
</main>

<?php require('partials/footer.php'); ?>
