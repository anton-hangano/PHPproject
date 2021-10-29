<?php
require 'functions/connection.php';
require 'functions/categories.php';
$showCat = showCategories();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update category</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="addCategory.php" method="post">
            <div class="form-group">
                <label for="catName">Category name:</label>
                <input type="text" name="catName" class="form-control" id="catName" value="<?= $showCat['catName']?>" required>

                <input type="hidden" name="idCategory" value="<?= $showCat['idCategory']?>">
            </div>
            <br>
            <button class="btn btn-dark">Update Category</button>
            <a href="adminCategories.php" class="btn btn-outline-secondary">Back to categories</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>