<?php
require 'functions/connection.php';
require 'functions/products.php';
$updatePr = updateProduct();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update Product</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't update product.';
    if ($updatePr) {
        $class = 'success';
        $message = 'Product updated successfully.';
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