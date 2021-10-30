<?php
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Log In</h1>

    <div class="alert bg-light mt-3 p-4 col-7 mx-auto border shadow-sm">
        <form action="login.php" method="POST">
            User: <br>
            <input type="email" name="userEmail" class="form-control" id="">
            <br>
            Password: <br>
            <input type="password" name="userPass" class="form-control" id="">
            <br>
            <button class="btn btn-dark btn-block">Log In</button>
        </form>
    </div>
    <?php
        if(isset( $_GET['error'])){
    ?>
    <div class="alert alert-danger mt-3 p-4 col-7 mx-auto border shadow-sm">
        User / Password incorrect
    </div>

    <?php
        }
    ?>

</main>

<?php include 'includes/footer.php';  ?>