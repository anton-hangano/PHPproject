<?php
require 'functions/connection.php';
require 'functions/users.php';
$users = usersList();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Users administration panel</h1>
    <a href="admin.php" class="btn btn-outline-secondary mb-3">Dashboard</a>
    <table class="table table-bordered table-stripped">
        <thead class="thead-dark table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th colspan="2">
                    <a href="" class="btn btn-secondary">Add</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user = mysqli_fetch_assoc($users)) {
            ?>
                <tr>
                    <th><?= $user['idUser']; ?></th>
                    <th><?= $user['userName']; ?></th>
                    <th><?= $user['userLastName']; ?></th>
                    <th><?= $user['userEmail']; ?></th>
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

<?php include 'includes/footer.php';  ?>