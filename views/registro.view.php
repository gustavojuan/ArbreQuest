<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>


    <main class="container d-flex align-items-center justify-content-center py-5">
        <div class="w-50 max-w-md card p-5">
            <div class="text-center">
                <h2 class="mb-4 display-3">Regístrate para descubrir nuestro patrimonio natural</h2>
            </div>
            <form class="mt-4" action="/registro.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input id="username" name="username" type="text" class="form-control" required placeholder="Nombre de Usuario">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Tu Email</label>
                    <input id="email" name="email" type="email" class="form-control" required placeholder="Tu Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" class="form-control" required placeholder="Password">
                </div>

                <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Regístrame</button>
                </div>
                <ul class="mt-3">
                    <?php if (isset($errors['username'])) : ?>
                        <li class="text-danger"><?= $errors['username'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-danger"><?= $errors['email'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-danger"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                </ul>
            </form>
        </div>
    </main>



<?php require('partials/footer.php') ?>