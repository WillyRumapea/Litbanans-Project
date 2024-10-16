<?php
    require "../../controller/connection.php";
    require "../../controller/query.php";

    $id = $_GET["id"];
    $user = query("SELECT * FROM order_table WHERE id = $id")[0];

    if(isset($_POST["update"])){
        if(update($_POST) > 0){
            echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'dashboard.php';
                </script>";
            }else{
                echo"<script>
                alert('data gagal diubah');
                </script>
                ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Order</title>

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
</head>
<body class="d-flex align-items-center justify-content-center flex-column py-2 px-2">
    <div class="container-title d-flex align-items-center justify-content-center py-2 px-2 w-50">
        <h1 class="title text-center w-100 w-sm-25 h2 rounded">Order Disini!!</h1>
    </div>
    <div class="container-form d-flex align-items-center justify-content-center w-50">
        <form action="" method="post" class="bg-white d-flex justify-content-center d-flex align-items-center flex-column h-100 w-100 rounded p-3" id="order-form">
            <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10"name="id" value="<?= $user["id"]?>" type="hidden">
            <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="text" name="nama" placeholder="nama" required value="<?= $user["nama"]?>">
            <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="produk" id="produk">
                <option value="pisang_lumer"  <?= $user["produk"] == "pisang_lumer" ? 'selected' : '' ?>>pisang lumer</option>
                <option value="banana_rolls"  <?= $user["produk"] == "banana_rolls" ? 'selected' : '' ?>>banana rolls</option>
            </select>
            <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="rasa" id="rasa" required>
                <option value="coklat"  <?= $user["rasa"] == "coklat" ? 'selected' : '' ?>>coklat</option>
                <option value="tiramisu" <?= $user["rasa"] == "tiramisu" ? 'selected' : '' ?>>tiramisu</option>
                <option value="greentea" <?= $user["rasa"] == "greentea" ? 'selected' : '' ?>>greentea</option>
                <option value="strawberry" <?= $user["rasa"] == "strawberry" ? 'selected' : '' ?>>strawberry</option>
                <option value="cappucino" <?= $user["rasa"] == "cappucino" ? 'selected' : '' ?>>cappucino</option>
                <option value="mix_2_rasa" <?= $user["rasa"] == "mix_2_rasa" ? 'selected' : '' ?>>mix 2 rasa</option>
            </select>
            <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="topping" id="topping" required>
                <option value="oreo" <?= $user["topping"] == "oreo" ? 'selected' : '' ?>>oreo</option>
                <option value="keju" <?= $user["topping"] == "keju" ? 'selected' : '' ?>>keju</option>
                <option value="chococip" <?= $user["topping"] == "chococip" ? 'selected' : '' ?>>chococip</option>
                <option value="redvelvet" <?= $user["topping"] == "redvelvet" ? 'selected' : '' ?>>redvelvet</option>
                <option value="almond"<?= $user["topping"] == "almond" ? 'selected' : '' ?>>almond</option>
                <option value="meises" <?= $user["topping"] == "meises" ? 'selected' : '' ?>>meises</option>
                <option value="springkles" <?= $user["topping"] == "springkles" ? 'selected' : '' ?>>springkles</option>
            </select>
            <textarea class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="pesan" placeholder="ada pesan ??"><?= htmlspecialchars($user["pesan"])?></textarea>
            <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="number" name="porsi" placeholder="porsi" id="porsi" required value="<?= $user["porsi"]?>">
            <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="number"name="harga" placeholder="Rp" id="harga" readonly value="<?= $user["harga"]?>">
            <div class="container-button d-flex justify-content-around align-item-center w-50 gap-2">
                <button name="update" type="submit" style="background-color: #ff7a01d9;">update</button>
                <button name="cancel" class="button-cancel" style="background-color: #fbc606;">batal</button>
            </div>
        </form>
    </div>
    <!-- script js -->
     <script src="../../script/calcUpdateAdmin.js"></script>
    <!-- script js -->
</body>
</html>