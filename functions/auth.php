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
        header('location:admin.php');
    }

    
}
function logout(){

}
function auth(){

}