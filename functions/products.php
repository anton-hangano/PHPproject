<?php

function productsList()
{
    $link = connect();
    $sql = "SELECT
        p.idProduct,
        p.prdName,
        p.prdPrice,
        p.idBrand,
        b.bdName,
        p.idCategory,
        c.catName,
        p.prdPresentation,
        p.prdImage
        FROM products p
        INNER JOIN brands b ON p.idBrand = b.idBrand
        INNER JOIN categories c ON p.idCategory = c.idCategory;";

    $products = mysqli_query($link, $sql);

    return $products;
}
function uploadImage()
{
    $prdImage = 'notAvailable.jpg';

    if ($_FILES['prdImage']['error'] = 0) {
        $tmp = $_FILES['prdImage']['tmp_name'];
        $prdImage = $_FILES['prdImage']['name'];
        $path = 'products/';
        $folder = $path . $prdImage;
        move_uploaded_file($tmp, $folder);
    }
    return $prdImage;
}

function addProduct()
{
    $link = connect();

    $prdName = $_POST['prdName'];
    $prdPrice = $_POST['prdPrice'];
    $idBrand = $_POST['idBrand'];
    $idCategory = $_POST['idCategory'];
    $prdPresentation = $_POST['prdPresentation'];
    $prdStock = $_POST['prdStock'];
    $prdImage = uploadImage();
    $sql = "INSERT INTO 
    products 
    VALUES
    (
    DEFAULT,   
    '" . $prdName . "',
    " . $prdPrice . ",
    " . $idBrand . ",
    " . $idCategory . ",
    '" . $prdPresentation . "',
    " . $prdStock . ",
    '" . $prdImage . "')";
    $addProduct = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    return $addProduct;
}

function showProduct()
{
    $idProduct = $_GET['idProduct'];
    $link = connect();
    $sql = "SELECT 
        p.idProduct,
        p.prdName,
        p.prdPrice,
        p.idBrand,
        b.bdName,
        p.idCategory,
        c.catName,
        p.prdPresentation,
        p.prdStock,
        p.prdImage
        FROM products p
        INNER JOIN brands b ON p.idBrand = b.idBrand
        INNER JOIN categories c ON p.idCategory = c.idCategory
        WHERE p.idProduct = " . $idProduct;
    $showProductObj = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    $showProduct = mysqli_fetch_assoc($showProductObj);

    return $showProduct;
}
function updateProduct(){
    $idProduct = $_POST['idProduct'];
    $prdName = $_POST['prdName'];
    $prdPrice = $_POST['prdPrice'];
    $idBrand = $_POST['idBrand'];
    $idCategory = $_POST['idCategory'];
    $prdPresentation = $_POST['prdPresentation'];
    $prdStock = $_POST['prdStock'];
    $prdImage = uploadImage();
    $link = connect();
    $sql="UPDATE
    products
    SET
    prdName='".$prdName."',
    prdPrice=".$prdPrice.",
    idBrand=".$idBrand.",
    idCategory=".$idCategory.",
    prdPresentation='".$prdPresentation."',
    prdStock=".$prdStock.",
    prdImage='".$prdImage."'
    WHERE idProduct=".$idProduct;
    $updateProduct= mysqli_query($link,$sql)
    or die(mysqli_error($link));
    return $updateProduct;
}