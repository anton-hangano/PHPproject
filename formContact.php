<?php
    require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Contact Us</h1><br>
        <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"
                    id="name" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control"
                    id="email" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea name="comments" class="form-control"
                    id="comments" required></textarea>
                </div>
                <br>
                <button class="btn btn-block btn-dark">
                    Send
                </button>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>