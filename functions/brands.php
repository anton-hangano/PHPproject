<?php

function brandsList(){
    $link = connect();
    $sql = "SELECT idBrand, bdName
        FROM brands";

    $brands = mysqli_query($link,$sql);

    return $brands;
}

function addBrand(){
    $bdName = $_POST['bdName'];
    $link = connect();
    $sql = "INSERT INTO 
    brands(bdName)
    VALUES ('".$bdName."')";
    $addBrand = mysqli_query($link,$sql);
    return $addBrand;
}