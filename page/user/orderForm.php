<?php
    require "../../controller/query.php";

    if(isset($_POST["order"])){
        if(addOrder($_POST) > 0){
            header('Location: waiting_payment.php');
        }else{
            echo"<script>
                alert('maaf pesanan mu gagal di input');
                document.location.href = '../../homepage.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Order</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- css style -->
     <link rel="stylesheet" href="../style/orderForm.css">
    <!-- css style -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->

    <!-- midtrans -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-nm4OslX-dTOVAPJg"></script>
    <!-- midtrans -->
</head>
<body class="mt-4">
    <div class="container-title d-flex align-items-center justify-content-center py-2 px-2">
        <h1 class="title text-center w-50 w-sm-25 h2 rounded">Order Disini!!</h1>
    </div>
    <div class="container-form d-flex align-items-center justify-content-center">
        <form action="" method="post" class="bg-white d-flex justify-content-center d-flex align-items-center flex-column h-100 w-50 rounded" id="order-form">
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="text" name="nama" placeholder="nama" required>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="produk" id="produk">
                        <option value="pisang_lumer">pisang lumer</option>
                        <option value="banana_rolls">banana rolls</option>
                    </select>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="rasa" id="rasa" required>
                        <option value="coklat">coklat</option>
                        <option value="tiramisu">tiramisu</option>
                        <option value="greentea">greentea</option>
                        <option value="strawberry">strawberry</option>
                        <option value="cappucino">cappucino</option>
                        <option value="mix_2_rasa">mix 2 rasa</option>
                    </select>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="topping" id="topping" required>
                        <option value="oreo">oreo</option>
                        <option value="keju">keju</option>
                        <option value="chococip">chococip</option>
                        <option value="redvelvet">redvelvet</option>
                        <option value="almond">almond</option>
                        <option value="meises">meises</option>
                        <option value="springkles">springkles</option>
                    </select>
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="number" name="porsi" placeholder="porsi" id="porsi" required>
                    <textarea class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" style="border: 1px solid;" name="pesan" placeholder="ada pesan ??"></textarea>
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="number" name="harga" placeholder="Rp" id="harga" readonly>
                    <label for="">
                        Antar kerumah ?
                        <input type="checkbox" id="checkboxAlamat">
                    </label>
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="text" name="alamat" placeholder="alamat" id="alamat" hidden>
                    <div class="conteiner-button-order w-50 d-flex justify-content-between d-flex align-items-center">
                        <button class="button-order text-black mb-4 px-4 py-1 rounded" type="submit" name="order">Cash</button>
                        <button class="button-order-paygate text-black mb-4 px-4 py-1 rounded" type="submit" name="order">Cashless</button>
                    </div>
        </form>
    </div>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- js bootstrap -->
    <script src="../../script/calculator.js"></script>
    <script src="../../script/orderPaygate.js"></script>
</body>
</html>