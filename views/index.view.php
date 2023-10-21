<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>



<main>
    <div class="container">


        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo '<p>Felicidades, la operación se realizó exitosamente.</p>';
        }
        ?>

        <div class="row align-itemes-start justify-content-center">

            <?php foreach ($trees as $tree) : ?>
                <div class="col-md-4 mb-3">
                    <?php require('partials/card.php') ?>
                </div>

            <?php endforeach; ?>
        </div>

    </div>




</main>






<?php require('partials/footer.php') ?>