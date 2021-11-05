<?php
require 'config/config.php';
require 'functions/auth.php';
auth();
require 'functions/connection.php';
require 'functions/users.php';
$updUser = updateUser();
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Updated user</h1>
    <?php
    $class = 'danger';
    $message = 'Counld' . 't update user.';
    if ($updUser) {
        $class = 'success';
        $message = 'User updated successfully.';
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