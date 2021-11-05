<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>New brand</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="addBrand.php" method="post">
            <div class="form-group">
                <label for="bdName">Brand name:</label>
                <br>
                <input type="text" name="bdName" class="form-control" id="bdName" required>
            </div>
            <br>
            <button class="btn btn-dark">Add Brand</button>
            <a href="adminBrands.php" class="btn btn-outline-secondary">Back to brands</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>