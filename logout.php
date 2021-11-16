<?php
    require 'config/config.php';
    require 'functions/auth.php';
    logout();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Log out</h1>

        <div class="alert bg-light col-6 mx-auto p-4 shadow-sm">
            You successfully log out.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>