<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <h1>Listado de árboles</h1>

        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo '<p>Felicidades, la operación se realizó exitosamente.</p>';
        }
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 justify-center	">

            <?php foreach ($trees as $tree) : ?>
                <?php require('partials/card.php') ?>

            <?php endforeach; ?>
        </div>

    </div>




</main>






<?php require('partials/footer.php') ?>