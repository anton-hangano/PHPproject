<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/categories.php';
$deleteCat = deleteCategory();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Delete category</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't delete category.';
    if ($deleteCat) {
        $class = 'success';
        $message = 'Category has been deleted.';
    ?>
        <div class="alert alert-<?= $class; ?> p-3">
            <?= $message; ?>
            <br>
            <a href="adminCategories.php" class="btn btn-outline-secondary">Back to categories</a>
        </div>
    <?php
    }
    ?>
</main>

<?php include 'includes/footer.php';  ?>