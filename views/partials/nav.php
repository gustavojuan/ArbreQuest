<nav class="navbar navbar-expand-lg sticky-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ÀrbreQuest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php">

                        <span>Quiénes somos</span>

                    </a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['user']) && $_SESSION['user'] === true) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout.php">Cerrar sesión</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login.php">Acceder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registro.php">Regístrate</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
