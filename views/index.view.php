<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>


<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 order-0">
            <aside >
                <h3 class="display-3">Filtros</h3>
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </aside>

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