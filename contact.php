<?php
require 'config/config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$recipient = 'anton.hangano@gmail.com';
$about = 'Email send it throw my website';
$bodyEmail = '<div style="background-color: #a5dc86; padding: 20px;font-family: sans-serif">';
$bodyEmail .= 'Name: ' . $name . '<br>';
$bodyEmail .= 'Email: ' . $email . '<br>';
$bodyEmail .= 'Comments: ' . $comments . '<br>';
$bodyEmail .= '</div>';
$headers = 'From: test@email.com' . "\r\n";
$headers .= 'MIME-Version: 1.0';
$headers .= 'Content-Type; text/html; charset=utf-8';


mail($recipient, $about, $bodyEmail, $headers);

include 'includes/header.html';
include 'includes/nav.php';
?>

<main class="container">
    <h1>Contact</h1>
    <div class="alert bg-light p-4 col-7 mx-auto border shadow-sm">
        <?= $nombre ?> thanks for contact us.
    </div>
</main>

<?php include 'includes/footer.php';  ?>