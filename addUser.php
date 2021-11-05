<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/users.php';
$addUser = addUser();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Registration of a new user</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't add user.';
    if ($addUser) {
        $class = 'success';
        $message = 'User add successfully.';
    ?>
        <div class="alert alert-<?= $class; ?> p-3">
            <?= $message; ?>
            <br>
            <a href="adminUsers.php" class="btn btn-outline-secondary">Back to users</a>
        </div>
    <?php
    }
    ?>
</main>

<?php include 'includes/footer.php';  ?>