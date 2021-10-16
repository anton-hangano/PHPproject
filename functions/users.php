<?php

function usersList(){
    $link = connect();
    $sql = "SELECT 
    idUser, 
    userName, 
    userLastName, 
    userEmail
    FROM users
    -- WHERE userState = 1
    ";

    $users = mysqli_query($link,$sql);

    return $users;
}