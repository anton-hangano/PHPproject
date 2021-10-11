<?php

function brandsList(){
    $link = connect();
    $sql = "SELECT idBrand, bdName
        FROM brands";

    $brands = mysqli_query($link,$sql);

    return $brands;
}