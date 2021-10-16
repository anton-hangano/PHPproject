<?php

function usersList()
{
    $link = connect();
    $sql = "SELECT 
    idUser, 
    userName, 
    userLastName, 
    userEmail
    FROM users
    WHERE userEstate = 1
    ";

    $users = mysqli_query($link, $sql)
        or die(mysqli_error($link));

    return $users;
}

function addUser()
{
    $userName = $_POST['userName'];
    $userLastName = $_POST['userLastName'];
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    // password_hash
    $link = connect();
    $sql = "INSERT INTO
    users (userName, userLastName, userEmail, userPass, userEstate)
    VALUE ('" . $userName . "','" . $userLastName . "','" . $userEmail . "','" . $userPass . "',1)";
    $addUser = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $addUser;
}
