<?php

function usersList(){
    $link = connect();
    $sql = "SELECT 
    idUser, 
    userName, 
    userLastName, 
    userEmail
    FROM users";

    $users = mysqli_query($link,$sql);

    return $users;
}