<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "choco_banas_db";

    $conn = mysqli_connect($host,$username,$password,$database);

    if($conn->connect_error){
        die("Koneksi gagal");
    }
?>