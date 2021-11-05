<?php
require 'config/config.php';
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
            if($_GET['error'] == 1){
                $message = 'User / Password incorrect';
            }else if($_GET['error'] == 2){
                $message = 'Need to log in first';
            }      
    ?>
    <div class="alert alert-danger mt-3 p-4 col-7 mx-auto border shadow-sm">
        <?=$message?>
    </div>

    <?php
        }
    ?>

</main>

<?php include 'includes/footer.php';  ?>