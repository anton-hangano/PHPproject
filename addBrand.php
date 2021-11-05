<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/brands.php';
$addCat = addBrand();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Registration of a new brand</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't add brand.';
    if ($addCat) {
        $class = 'success';
        $message = 'Brand add successfully.';
    ?>
        <div class="alert alert-<?= $class; ?> p-3">
            <?= $message; ?>
            <br>
            <a href="adminBrands.php" class="btn btn-outline-secondary">Back to brands</a>
        </div>
    <?php
    }
    ?>
</main>

<?php include 'includes/footer.php';  ?>