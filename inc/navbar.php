<?php
$rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : null;
?>

<!-- Navbar con borde y sombra -->
<nav class="navbar is-primary navbar-custom" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" id="icono-navBar" href="index.php?vista=home">
            <img src="./img/icono.png" width="50" height="100">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-start">
            <!-- Usuarios dropdown -->
            <?php if ($rol == 'admin') : ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Usuarios</a>
                    <div class="navbar-dropdown">
                        <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                        <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                        <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Categorías dropdown -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Categorías</a>
                <div class="navbar-dropdown">
                    <?php if ($rol == 'admin') : ?>
                        <a href="index.php?vista=category_new" class="navbar-item">Nueva</a>
                    <?php endif; ?>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- Productos dropdown -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Productos</a>
                <div class="navbar-dropdown">
                    <?php if ($rol == 'admin') : ?>
                        <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <?php endif; ?>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-light is-rounded">
                        Mi cuenta
                    </a>
                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>