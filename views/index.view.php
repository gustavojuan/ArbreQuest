<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>


<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 order-0">
            <?php require('partials/aside.php') ?>

        </div>

        <div class="col-md">

            <main>
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






            </main>


        </div>
    </div>







<?php require('partials/footer.php') ?>
