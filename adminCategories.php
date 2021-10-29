<?php
    require 'functions/connection.php';
    require 'functions/categories.php';
    $categories = categoriesList();
	include 'includes/header.html';
	include 'includes/nav.php';     
?>

    <main class="container">
        <h1>Categories administration panel</h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Dashboard</a>
    <table class="table table-bordered table-stripped">
    <thead class="thead-dark table-dark">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th colspan="2">
                <a href="addCategoryForm.php" class="btn btn-secondary">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
            while($category = mysqli_fetch_assoc($categories)){
    ?>
        <tr>
            <td><?= $category['idCategory']; ?></td>
            <td><?= $category['catName']; ?></td>
            <td>
            <a href="changeCategoryForm.php?idCategory=<?= $category['idCategory']; ?>" class="btn btn-outline-secondary">Change</a> 
            </td>
            <td>
            <a href="" class="btn btn-outline-secondary">Delete</a> 
            </td>
        </tr>
        <?php
         } 
        ?>
    </tbody>
    </table>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Dashboard</a>
    </main>

<?php  include 'includes/footer.php';  ?>