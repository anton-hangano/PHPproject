<?php
require 'functions/connection.php';
require 'functions/brands.php';
$deleteBr = deleteBrand();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Delete brand</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't delete brand.';
    if ($deleteBr) {
        $class = 'success';
        $message = 'Brand has been deleted.';
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