<?php

function brandsList()
{
    $link = connect();
    $sql = "SELECT idBrand, bdName
        FROM brands";
    $brands = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $brands;
}

function addBrand()
{
    $bdName = $_POST['bdName'];
    $link = connect();
    $sql = "INSERT INTO 
    brands(bdName)
    VALUES ('" . $bdName . "')";
    $addBrand = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $addBrand;
}
function showBrand()
{
    $idBrand = $_GET['idBrand'];
    $link = connect();
    $sql = "SELECT idBrand, bdName
    FROM brands
    WHERE idBrand = " . $idBrand;
    $showBrandObj = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    $showBrand = mysqli_fetch_assoc($showBrandObj);

    return $showBrand;
}
