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