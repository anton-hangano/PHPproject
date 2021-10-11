<?php

const SERVER = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DB = 'catalog';


function connect(){
    $link = mysqli_connect(
        SERVER,
        USER,
        PASSWORD,
        DB
    );
    return $link;
}