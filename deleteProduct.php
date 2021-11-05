<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/products.php';
$deletePrd = deleteProduct();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>delete product</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't delete product.';
    if ($deletePrd) {
        $class = 'success';
        $message = 'Product has been deleted.';
    ?>
        <div class="alert alert-<?= $class; ?> p-3">
            <?= $message; ?>
            <br>
            <a href="adminProducts.php" class="btn btn-outline-secondary">Back to products</a>
        </div>
    <?php
    }
    ?>
</main>

<?php include 'includes/footer.php';  ?>