<?php
    require "connection.php";

    $id = $_GET["id"];

    $query = "UPDATE order_table SET status_pembayaran = 1 WHERE id = $id";
    mysqli_query($conn,$query);

    session_start();
    $_SESSION['payment_confirmed']= true;

    echo"<script>
        alert('Pembayaran di Konfirmasi');
        document.location.href = '../page/admin/dashboard.php'; 
    </script>";
?>