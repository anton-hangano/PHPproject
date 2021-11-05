<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/brands.php';
require 'functions/categories.php';
require 'functions/products.php';
$showPr = showProduct();
$brands = brandsList();
$categories = categoriesList();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update product</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="changeProduct.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="prdName">Product name</label>
                <input type="text" name="prdName" class="form-control" id="prdName" value="<?= $showPr['prdName'] ?>" required>
            </div>
            <br>
            <label for="prdPrice">Product price</label>
            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" name="prdPrice" class="form-control" id="prdPrice" min="0" value="<?= $showPr['prdPrice'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="idBrand">Brand</label><br>
                <select name="idBrand" id="idBrand" class="form-control">
                    <option value="<?= $showPr['idBrand'] ?>"><?= $showPr['bdName'] ?></option>
                    <?php
                    foreach ($brands as $brand) {
                    ?>
                        <option value="<?= $brand['idBrand'] ?>"><?= $brand['bdName'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="userPass">Category</label><br>
                <select name="idCategory" id="idCategory" class="form-control" required>
                    <option value="">Select Category</option>
                    <?php
                    while ($category = mysqli_fetch_assoc($categories)) {
                    ?>
                        <option <?= ($showPr['idCategory'] == $category['idCategory']) ? 'selected' : ''; ?> value="<?= $category['idCategory'] ?>"><?= $category['catName'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="prdPresentation">Product Presentation</label>
                <textarea name="prdPresentation" id="prdPresentation" class="form-control" required><?= $showPr['prdPresentation'] ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="prdStock">Product Stock</label>
                <input type="number" name="prdStock" class="form-control" min="0" id="prdStock" value="<?= $showPr['prdStock'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="prdImage">Product Image</label><br>
                <input type="file" name="prdImage" class="form-control-file" id="prdImage"><br>
                <img src="products/<?= $showPr['prdImage'] ?>" alt="">
            </div>
            <input type="hidden" name="idProduct" value="<?= $showPr['idProduct'] ?>">
            <input type="hidden" name="imgOrig" value="<?= $showPr['prdImage'] ?>">
            <br>
            <button class="btn btn-dark">Update product</button>
            <a href="adminProducts.php" class="btn btn-outline-secondary">Back to products</a>

        </form>

    </div>
    <?= '<br>' ?>
</main>

<?php include 'includes/footer.php';  ?>