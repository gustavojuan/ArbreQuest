<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>



    <main>
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>

                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Regístrate para poder descubrir un patrimonio natural</h2>
                </div>

                <form class="mt-8 space-y-6" action="/registro.php" method="POST">
                    <div class=" rounded-md shadow-sm space-y-4">

                        <div>
                            <label for="username" >Nombre de Usuario</label>
                            <input id="username" name="username" type="text" autocomplete="username" required
                                   class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Nombre de Usuario">
                        </div>
                        <div>
                            <label for="email" >Tu Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Tu Email">
                        </div>

                        <div>
                            <label for="password" >Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                   class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Password">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Regístrame
                        </button>
                    </div>

                    <ul>

                        <?php if (isset($errors['username'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['username'] ?></li>
                        <?php endif; ?>


                        <?php if (isset($errors['email'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                        <?php endif; ?>

                        <?php if (isset($errors['password'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                    </ul>
                </form>
            </div>
        </div>
    </main>


<?php require('partials/footer.php') ?>