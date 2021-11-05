<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/brands.php';
$showBr = showBrand();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Change brand</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="changeBrand.php" method="post">
            <div class="form-group">
                <label for="bdName">Brand name:</label>
                <br>
                <input type="text" name="bdName" class="form-control" id="bdName" value="<?= $showBr['bdName'] ?>" required>
            </div>
            <input type="hidden" name="idBrand" value="<?= $showBr['idBrand'] ?>">
            <br>
            <button class="btn btn-dark">Update Brand</button>
            <a href="adminBrands.php" class="btn btn-outline-secondary">Back to brands</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>