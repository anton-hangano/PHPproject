<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/products.php';
$addPro = addProduct();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Registration of a new product</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't add product.';
    if ($addPro) {
        $class = 'success';
        $message = 'Product add successfully.';
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