<?php
require 'functions/connection.php';
require 'functions/categories.php';
$addCat = addCategory();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Registration of a new category</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't add category.';
    if ($addCat) {
        $class = 'success';
        $message = 'Category add successfully.';
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