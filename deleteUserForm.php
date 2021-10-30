<?php
require 'functions/connection.php';
require 'functions/users.php';
$showUsr = showUser();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Delete User</h1>

    <div class="alert bg-light p-4 col-4 my-4 mx-auto border border-danger shadow-sm">
        <div class="row">
            <div class="col text-danger">
                <h2><?= $showUsr['userEmail']; ?></h2>
                Nombre: <?= $showUsr['userName']; ?><br>
                Apellido: <?= $showUsr['userLastName']; ?><br>

                <form action="deleteUser.php" method="post">
                    <input type="hidden" name="idUser" value="<?= $showUsr['idUser'] ?>">

                    <button class="btn btn-danger btn-block my-4">Confirm</button>
                    <a href="adminUsers.php" class="btn btn-outline-secondary">Back to users</a>

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

                window.location = 'adminUsers.php';
            }
        });
    </script>
</main>

<?php include 'includes/footer.php';  ?>