<nav class="site-header sticky-top py-2 bg-secondary">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a href="index.php" class="mt-1 text-white">
            <i class="fab fa-meetup fa-2x"></i>
        </a>


        <a class="nav-link text-white py-2" href="adminBrands.php">Brands</a>
        <a class="nav-link text-white py-2" href="adminCategories.php">Categories</a>
        <a class="nav-link text-white py-2" href="adminProducts.php">Products</a>
        <a class="nav-link text-white py-2" href="adminUsers.php">Users</a>
        <a class="nav-link text-white py-2" href="formContact.php">Contact</a>

<!-- si está loggueadp -->
<?php
        if( isset($_SESSION['login']) ){
?>
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="#"><i class="fas fa-sign-out-alt"></i>
                <?= $_SESSION['usuNombre'] ?>  <?= $_SESSION['usuApellido'] ?>
            </a>
        </button>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-dark" href="logout.php">Salir de sistema</a>
                <a class="dropdown-item bg-dark" href="">Modificar Perfil</a>
                <a class="dropdown-item bg-dark" href="">Cambiar contraseña</a>
            </div>
<?php
        }
        else{
?>
<!-- si no está logueado -->

        <button class="btn">
            <a class="text-white" href="formLogin.php"><i class="fas fa-sign-in-alt mr-2 text-white"></i> Log In</a>
        </button>
<?php
        }
?>
    </div>
</nav>
