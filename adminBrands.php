<?php
    require 'functions/connection.php';
    require 'functions/brands.php';
    $brands = brandsList();
	include 'includes/header.html';
	include 'includes/nav.php';     
?>

    <main class="container">
        <h1>Brands administration panel</h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Dashboard</a>
    <table class="table table-bordered table-stripped">
    <thead class="thead-dark table-dark">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th colspan="2">
                <a href="addBrandForm.php" class="btn btn-secondary">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
            while($brand = mysqli_fetch_assoc($brands)){
    ?>
        <tr>
            <td><?= $brand['idBrand']; ?></td>
            <td><?= $brand['bdName']; ?></td>
            <td>
            <a href="changeBrandForm.php?idBrand=<?= $brand['idBrand']; ?>" class="btn btn-outline-secondary">Change</a> 
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