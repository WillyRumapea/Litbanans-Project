<?php
    require "../../controller/query.php";
    if(isset($_POST["report"])){
        if(addReport($_POST) > 0){
            echo"
                <script>
                    alert('laporan telah terkirim');
                    window.location.href = '../../homepage.php'
                </script>
            ";
        }else{
            echo "<script>
                alert('maaf laporan mu gagal di input');
                document.location.href = '../../homepage.php';
            </scrip>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Delivery</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->

    <!-- css -->
     <link rel="stylesheet" href="../style/waiting_delivery.css">
    <!-- css -->

    <!-- animation lottie -->
    <script
    src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
    type="module"
    ></script>
    <!-- animation lottie -->
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="text-center">
        <h1 id="delivery-title">Pesanan dalam perjalan, silahkan menunggu!</h1>
        <p class="mt-3 message-delivery">Jika pesanan tiba tidak di konfirmasi selama 120 detik maka akan otomatis di konfirmasi <br> harap memberitahu jika pesanan belum tiba dalam waktu yang ditentukan.</p>
        <p id="timer">0:00</p>
        <dotlottie-player
        src="https://lottie.host/3faa5940-7034-4992-a1fd-a523f76efdae/b4uALS8qT8.lottie"
        background="transparent"
        speed="1"
        style="width: 300px; height: 300px"
        loop
        autoplay
        ></dotlottie-player>
        <div class="select-opt border position-absolute" hidden>
            <form id="form-report-customer" class="d-flex justify-content-center align-items-center flex-column" method="post" action=""> 
                <select name="pesan" id="report-customer">
                    <option value="makanan_belum_sampai">makanan belum sampai</option>
                    <option value="makanan_rusak">makanan rusak</option>
                </select>
                <input type="text" name="nama" placeholder="masukkan nama pemesan" class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10">
                <button type="submit" name="report" class="submitReport text-black mb-4 px-4 py-1 rounded">kirim</button>
            </form>
        </div>
        <div class="container-button">
            <div class="conf-button d-flex justify-content-center align-items-center gap-4">
                <button class="text-black mb-4 px-4 py-1 rounded" id="confirmButton">Konfirmasi!</button>
                <button class="text-black mb-4 px-4 py-1 rounded" id="notConfirmButton">Belum Sampai!</button>
            </div>
            <button class="exit text-black mb-4 px-4 py-1 rounded">exit!!</button>
        </div>
    </div>
    <!-- script -->
     <script src="../../script/waiting_delivery.js"></script>
    <!-- script -->
</body>
</html>