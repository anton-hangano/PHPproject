<?php
require 'functions/connection.php';
require 'functions/products.php';
$showPr = showProduct();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Delete Product</h1>

    <div class="alert bg-light p-4 col-6 my-4 mx-auto border border-danger shadow-sm">
        <div class="row">
            <div class="col">
                <img src="products/<?= $showPr['prdImage']; ?>" class="img-thumbnail">
            </div>
            <div class="col text-danger">
                <h2><?= $showPr['prdName']; ?></h2>
                marca: <?= $showPr['bdName']; ?><br>
                categoria: <?= $showPr['catName']; ?><br>
                precio: <?= $showPr['prdPrice']; ?><br>
                Presentacion: <?= $showPr['prdPresentation']; ?><br>

                <form action="deleteProduct.php" method="post">
                    <input type="hidden" name="idProduct" value="<?= $showPr['idProduct'] ?>">

                    <button class="btn btn-danger btn-block my-4">Confirm</button>
                    <a href="adminProducts.php" class="btn btn-outline-secondary">Back to products</a>

                </form>
            </div>
        </div>
    </div>
    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            CancelButtonColor: '#999',
            confirmButtonText: 'Yes,delete it',
            cancelButtonText: 'cancel',
        }).then((result) => {
            if (!result.value) {

                window.location = 'adminProducts.php';
            }
        });
    </script>
</main>

<?php include 'includes/footer.php';  ?>