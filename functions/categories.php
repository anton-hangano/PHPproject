<?php

function categoriesList(){
    $link = connect();
    $sql = "SELECT 
    idCategory, 
    catName
    FROM categories";

    $categories = mysqli_query($link,$sql);

    return $categories;
}

function addCategory(){
    $catName = $_POST['catName'];
    $link = connect();
    $sql = "INSERT INTO
    categories (catName)
    VALUE ('".$catName."')"; 
    $addCat = mysqli_query($link, $sql);
    return $addCat;
}