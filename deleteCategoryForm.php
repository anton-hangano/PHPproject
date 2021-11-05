<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/categories.php';
$showCat = showCategories();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Delete category</h1>

    <div class="alert bg-light p-4 col-4 my-4 mx-auto border border-danger shadow-sm">
        <div class="row">
            <div class="col text-danger">
                <h2><?= $showCat['catName']; ?></h2>

                <form action="deleteCategory.php" method="post">
                    <input type="hidden" name="idCategory" value="<?= $showCat['idCategory'] ?>">

                    <button class="btn btn-danger btn-block my-4">Confirm</button>
                    <a href="adminCategories.php" class="btn btn-outline-secondary">Back to categories</a>

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

                window.location = 'adminCategories.php';
            }
        });
    </script>
</main>

<?php include 'includes/footer.php';  ?>

</main>

<?php include 'includes/footer.php';  ?>