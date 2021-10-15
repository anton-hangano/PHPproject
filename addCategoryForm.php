<?php
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>New category</h1>

    <div class="alert bg-light p-4 col-7 mx-auto border">
        <form action="addCategory.php" method="post">
            <div class="form-group">
                <label for="catName">Category name:</label>
                <input type="text" name="catName" class="form-control" id="catName" required>
            </div>
            <br>
            <button class="btn btn-dark">Add Category</button>
            <a href="adminCategories.php" class="btn btn-outline-secondary">Back to categories</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>