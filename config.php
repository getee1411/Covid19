<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "kopid";
    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }else{
        /*echo "Koneksi database berhasil";*/
    }
?>
