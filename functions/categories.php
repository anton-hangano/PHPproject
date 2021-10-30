<?php

function categoriesList()
{
    $link = connect();
    $sql = "SELECT 
    idCategory, 
    catName
    FROM categories";

    $categories = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $categories;
}

function addCategory()
{
    $catName = $_POST['catName'];
    $link = connect();
    $sql = "INSERT INTO
    categories (catName)
    VALUE ('" . $catName . "')";
    $addCat = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $addCat;
}
function showCategories()
{
    $idCategory = $_GET['idCategory'];
    $link = connect();
    $sql = "SELECT 
    idCategory, 
    catName
    FROM categories
    WHERE idCategory=" . $idCategory;
    $showCategoriesObj = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    $showCategories = mysqli_fetch_assoc($showCategoriesObj);
    return $showCategories;
}
function updateCategory()
{
    $idCategory = $_POST['idCategory'];
    $catName = $_POST['catName'];
    $link = connect();
    $sql = "UPDATE
    categories
    SET catName='" . $catName . "'
    WHERE idCategory= " . $idCategory;
    $updateCategory = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $updateCategory;
}
function deleteCategory()
{
    $idCategory = $_POST['idCategory'];
    $link = connect();
    $sql = "DELETE FROM 
    categories
    WHERE idCategory=" . $idCategory;
    $deleteCategory = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $deleteCategory;
}
