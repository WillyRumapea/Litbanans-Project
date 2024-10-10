<?php
    require "../../controller/connection.php";
    require "../../controller/query.php";

    $id = $_GET["id"];
    $pembeli = query("SELECT * FROM order_table WHERE id = $id")[0];

    if(updateData($_POST)>0){
        echo "<script>
                alert('data berhasil di ubah!');
                document.location.href = 'dasboard.php';
            </script>";
    }else{
        echo "<script>
                alert('data gagal di ubah!');
            </script>";
            var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- css -->
     <link rel="stylesheet" href="../style/updateOrder.css">
    <!-- css -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->

</head>
<body>
<div class="container-title d-flex align-items-center justify-content-center py-2 px-2">
        <h1 class="title text-center w-50 w-sm-25 h2 rounded">Order Disini!!</h1>
    </div>
    <div class="container-form d-flex align-items-center justify-content-center">
        <form action="" method="post" class="bg-white d-flex justify-content-center d-flex align-items-center flex-column h-100 w-50 rounded" id="order-form">
                    <input type="hidden" name="id" value="<?= $pembeli["id"]?>">
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="text" name="nama" value="<?= $pembeli["nama"]?>" placeholder="nama" required>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="produk" id="produk">
                        <option value="pisang_lumer" <?= $pembeli["pisang_lumer"] === "pisang_lumer" ? 'selected' : '';?>>pisang lumer</option>
                        <option value="banana_rolls <?= $pembeli["banana_rolls"] === "banana_rolls" ? 'selected' : '';?>>banana rolls</option>
                    </select>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="rasa" id="rasa" required>
                        <option value="<?= $pembeli["coklat"]?>">coklat</option>
                        <option value="<?= $pembeli["tiramisu"]?>">tiramisu</option>
                        <option value="<?= $pembeli["greentea"]?>">greentea</option>
                        <option value="<?= $pembeli["strawberry"]?>">strawberry</option>
                        <option value="<?= $pembeli["cappucino"]?>">cappucino</option>
                        <option value="<?= $pembeli["mix_2_rasa"]?>">mix 2 rasa</option>
                    </select>
                    <select class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="topping" id="topping" required>
                        <option value="<?= $pembeli["oreo"]?>">oreo</option>
                        <option value="<?= $pembeli["keju"]?>">keju</option>
                        <option value="<?= $pembeli["chococip"]?>">chococip</option>
                        <option value="<?= $pembeli["redvelvet"]?>">redvelvet</option>
                        <option value="<?= $pembeli["almond"]?>">almond</option>
                        <option value="<?= $pembeli["meises"]?>">meises</option>
                        <option value="<?= $pembeli["springkles"]?>">springkles</option>
                    </select>
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" value="<?= $pembeli["porsi"]?>" type="number" name="porsi" placeholder="porsi" id="porsi" required>
                    <textarea class="my-3 w-75 text-center border-black border-top-0 border-start-0 border-end-0 border-bottom-10" name="pesan" placeholder="ada pesan ??"> <?= $pembeli["pesan"]?> </textarea>
                    <input class="text-center w-75 my-3 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" <?= $pembeli["harga"]?> type="number" name="harga" placeholder="Rp" id="harga" readonly>
                    <button class="button-order-paygate text-black mb-4 px-4 py-1 rounded" type="submit" name="order">Update</button>
        </form>
    </div>
</body>
</html>