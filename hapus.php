<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM murid WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    if( $query ){
        header('Location: list-murid.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>