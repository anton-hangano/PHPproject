<?php
include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>New user</h1>
    <br>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <form action="addUser.php" method="post">
            <div class="form-group">
                <label for="userName">User name:</label>
                <input type="text" name="userName" class="form-control" id="userName" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userLastName">User last name:</label>
                <input type="text" name="userLastName" class="form-control" id="userLastName" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userEmail">User Email:</label>
                <input type="email" name="userEmail" class="form-control" id="userEmail" required>
            </div>
            <br>
            <div class="form-group">
                <label for="userPass">User Password:</label>
                <input type="password" name="userPass" class="form-control" id="userPass" required>
            </div>
            <br>
            <button class="btn btn-dark">Add user</button>
            <a href="adminCategories.php" class="btn btn-outline-secondary">Back to users</a>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';  ?>