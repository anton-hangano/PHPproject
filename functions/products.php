<?php

function productsList(){
    $link = connect();
    $sql = "SELECT
        p.idProduct,
        p.prdName,
        p.prdPrice,
        b.bdName,
        c.catName,
        p.prdPresentation,
        p.prdImage
        FROM products p
        INNER JOIN brands b ON p.idBrand = b.idBrand
        INNER JOIN categories c ON p.idCategory = c.idCategory;";

    $products = mysqli_query($link,$sql);

    return $products;
}