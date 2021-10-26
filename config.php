<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_ppdb";

$connect = mysqli_connect($server,$user,$password,$database);

if(!$connect){
    die("Tidak berhasil terhubung dengan database: " . mysqli_connect_error());
}