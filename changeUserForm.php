<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/users.php';
$showUser = showUser();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Update user</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="changeUser.php" method="post">
            <div class="form-group">
                <label for="userName">User name:</label>
                <input type="text" name="userName" class="form-control" id="userName" value="<?= $showUser['userName'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userLastName">User last name:</label>
                <input type="text" name="userLastName" class="form-control" id="userLastName" value="<?= $showUser['userLastName'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userEmail">User Email:</label>
                <input type="email" name="userEmail" class="form-control" id="userEmail" value="<?= $showUser['userEmail'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userPass">User Password:</label>
                <input type="password" name="userPass" class="form-control" id="userPass" value="<?= $showUser['userPass'] ?>" required>
            </div>
            <input type="hidden" name="idUser" value="<?= $showUser['idUser'] ?>">
            <br>
            <button class="btn btn-dark">Update user</button>
            <a href="adminUsers.php" class="btn btn-outline-secondary">Back to users</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>