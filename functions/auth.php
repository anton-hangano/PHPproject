<?php

function login(){
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $link = connect();
    $sql = "SELECT userName, userLastName
    FROM users
    WHERE userEmail='".$userEmail."'
    AND userPass='".$userPass."'";
    $userResult = mysqli_query($link, $sql)
    or die(mysqli_error($link));
    $boolVerif = mysqli_num_rows($userResult);
    if($boolVerif == 0){
        header('location: formLogin.php?error=1');
    }else{
        $_SESSION['login'] = 1;
        $user = mysqli_fetch_assoc($userResult);
        $_SESSION['userName'] = $user['userName'];
        $_SESSION['userLastName'] = $user['userLastName'];
        header('location:admin.php');
    }

    
}
function logout(){
    session_destroy();
    header('refresh:3;url=index.php');
}
function auth(){
    if(!isset($_SESSION['login'])){
        header('location: formLogin.php?error=2');
    }
}