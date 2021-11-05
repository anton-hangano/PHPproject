<?php
    require 'config/config.php';
    require 'functions/auth.php';
    auth();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container pt-2">
        <h1>Dashboard - Main Menu</h1>

        <div class="list-group">
        <a href="adminBrands.php" class="list-group-item list-group-item-action">
        Brands Administration Panel
        </a>
        <a href="adminCategories.php" class="list-group-item list-group-item-action">
        Categories Administration Panel
        </a>
        <a href="adminProducts.php" class="list-group-item list-group-item-action">
        Products Administration Panel
        </a>
        <a href="adminUsers.php" class="list-group-item list-group-item-action">
        Users Administration Panel
        </a>

        </div>

    </main>

<?php  include 'includes/footer.php';  ?>