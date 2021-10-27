<?php
require 'functions/connection.php';
require 'functions/brands.php';
$updateBrand = updateBrand();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update brand</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't update brand.';
    if ($updateBrand) {
        $class = 'success';
        $message = 'Brand updated successfully.';
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