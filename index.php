<?php
    require 'config/config.php';
    require 'functions/connection.php';
    require 'functions/products.php';
    $showPr = productsList();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Products</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php
                while ($Product = mysqli_fetch_assoc($showPr)){
            ?>
            <div class="col card p-2">
                <img src="products/<?= $Product['prdImage']; ?>" class=" card-img-top img-thumbnail">
                <h2><?= $Product['prdName']; ?></h2>
                <?= $Product['catName']; ?> - <?= $Product['bdName']; ?> <br>
                $<?= $Product['prdPrice']; ?>
                <a href="" class="btn btn-outline-secondary">
                    details
                </a>
                
            </div>
           <?php
            }
           ?>

        </div>
    </main>

<?php  include 'includes/footer.php';  ?>