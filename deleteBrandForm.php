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
    <h1>Delete Brand</h1>

    <div class="alert bg-light p-4 col-4 my-4 mx-auto border border-danger shadow-sm">
        <div class="row">
            <div class="col text-danger">
                <h2><?= $showBr['bdName']; ?></h2>

                <form action="deleteBrand.php" method="post">
                    <input type="hidden" name="idBrand" value="<?= $showBr['idBrand'] ?>">

                    <button class="btn btn-danger btn-block my-4">Confirm</button>
                    <a href="adminBrands.php" class="btn btn-outline-secondary">Back to brands</a>

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

                window.location = 'adminBrands.php';
            }
        });
    </script>
</main>

<?php include 'includes/footer.php';  ?>

</main>

<?php include 'includes/footer.php';  ?>