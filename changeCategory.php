<?php
require 'functions/connection.php';
require 'functions/categories.php';
$updateCat = updateCategory();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update category</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't update category.';
    if ($updateCat) {
        $class = 'success';
        $message = 'Category updated successfully.';
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