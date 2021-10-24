<?php
    require 'functions/connection.php';
    require 'functions/products.php';
    $products = productsList();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Products administration panel</h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Dashboard</a>
    <table class="table table-bordered table-stripped">
    <thead class="thead-dark table-dark">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Capacity</th>
            <th>Product Image</th>
            <th colspan="2">
                <a href="addProductForm.php" class="btn btn-secondary">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
            while($product = mysqli_fetch_assoc($products)){
    ?>
        <tr>
            <td><?= $product['prdName']; ?></td>
            <td><?= $product['prdPrice']; ?></td>
            <td><?= $product['bdName']; ?></td>
            <td><?= $product['catName']; ?></td>
            <td><?= $product['prdPresentation']; ?></td>
            <td> <img src="products/<?= $product['prdImage']?>" class="img-thumbnail"></td>
            <td>
            <a href="" class="btn btn-outline-secondary">Change</a> 
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