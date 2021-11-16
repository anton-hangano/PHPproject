<nav class="navbar navbar-expand-lg navbar-dark site-header sticky-top py-2 bg-secondary">
    <div class="container d-flex flex-column flex-md-row">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <a href="index.php" class="text-white">
                <i class="fab fa-meetup fa-2x"></i>
            </a>


            <a class="nav-link text-white py-2" href="adminBrands.php">Brands</a>
            <a class="nav-link text-white py-2" href="adminCategories.php">Categories</a>
            <a class="nav-link text-white py-2" href="adminProducts.php">Products</a>
            <a class="nav-link text-white py-2" href="adminUsers.php">Users</a>
            <a class="nav-link text-white py-2" href="formContact.php">Contact</a>

            <!-- if it is logged in -->
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <button class="btn btn-dark dropdown bg-dark">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['userName'] ?> <?= $_SESSION['userLastName'] ?>
                    </a>

                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item bg-dark" href="logout.php">Log out</a></li>
                        <li><a class="dropdown-item bg-dark" href="">Modify user</a></li>
                        <li><a class="dropdown-item bg-dark" href="">Change password</a></li>
                    </ul>
                </button>
            <?php
            } else {
            ?>
                <!-- if is not logged in -->

                <button class="btn">
                    <a class="text-white" href="formLogin.php"><i class="fas fa-sign-in-alt mr-2 text-white"></i> Log In</a>
                </button>
            <?php
            }
            ?>
        </div>
    </div>
</nav>