<?php
    session_start();

    if(!isset($_SESSION["loginAdmin"])){
        header("Location: loginAdmin.php");
        exit;
    }

    require "../../controller/connection.php";
    require "../../controller/query.php";

    $dataOnPage = 7;
    $totalData = count(query("SELECT * FROM order_table"));
    $page = ceil($totalData/$dataOnPage);
    $activePage = (isset($_GET["halaman"])) ? $_GET["halaman"]:1;
    $firstData = ($dataOnPage * $activePage) - $dataOnPage;
    
    if(isset($_POST["submit-keyword"])){
        if(empty($_POST["search"])){
            $result = query("SELECT * FROM order_table LIMIT $firstData,$dataOnPage");
        }else{
            $result = find($_POST["search"]);  
        }
    }else{
        $result = query("SELECT * FROM order_table LIMIT $firstData,$dataOnPage");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>

    <!-- style bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- style bootstrap -->

    <!-- style css -->
    <link rel="stylesheet" href="../style/dashboard.css">
    <!-- style css -->

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- feather icon -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->
</head>
<body>
    <div class="container-header p-2 d-flex justify-content-start align-item-start">
        <img src="../../assets/new logo.png" class="logo-img" alt="" >
        <p class="h3" >Hello Admin Litbanas...</p>
    </div>
    <div class="container-table p-2">
        <div class="nav-and-pagination container-form d-flex align-items-center justify-content-around">
            <div class="container-pagination w-25 p-2 rounded d-flex justify-content-around align-item-center" style="background-color: #ff7c01d9;">
                <?php for($i=1;$i<=$page;$i++):?>
                    <?php if($i == $activePage):?>
                        <a href="?halaman=<?= $i; ?>" class ="active" style="text-decoration:none;"><?= $i; ?></a>
                    <?php else:?>
                        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                    <?php endif;?>    
                <?php endfor;?>
            </div>
            <div class="container-add-order">
                <a href="addOrder.php" class="add-order" style="text-decoration: none; color: #000;">add order</a>
            </div>
            <form action="" method="post" class="w-25 d-flex justify-content-center align-item-center gap-3">
                <input type="text" placeholder="masukkan keyword!!" name="search" autofocus autocomplete="off">
                <button name="submit-keyword" type="submit" class="button-search"><i data-feather="search"></i></button>
            </form>
        </div>
        <table class="table table-hover table-striped table-bordered table-responsive" border="1">
            <tr style="background-color: #ff7c01d9;">
                <th class="text-center">ID</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Produk</th>
                <th class="text-center">Rasa</th>
                <th class="text-center">Topping</th>
                <th class="text-center">Porsi</th>
                <th class="text-center">Pesan</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Aksi</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($result as $row):?>
            <tr>
                <td class="text-center"><?= $i;?></td>
                <td class="text-center" style="width: 150px;"><?= $row["nama"]?></td>
                <td class="text-center"><?= $row["produk"]?></td>
                <td class="text-center"><?= $row["rasa"]?></td>
                <td class="text-center"><?= $row["topping"]?></td>
                <td class="text-center"><?= $row["porsi"]?></td>
                <td class="text-center" style="width: 200px;"><?= $row["pesan"]?></td>
                <td class="text-center"><?= $row["harga"]?></td>
                <td class="text-center">
                    <div class="continer-button">
                        <a href="updateOrder.php?id=<?= $row["id"]?>" class="btn btn-warning">edit</a>
                        <a href="../../controller/hapus.php?id=<?= $row["id"]?>" class="btnDanger rounded" style="background-color: #ff7c01d9; text-decoration:none; color: #000;padding:5px;">hapus</a>
                        <a href="../../controller/konfirmasi.php?id=<?= $row["id"];?>" class="btn btn-warning">konfirmasi</a>
                    </div>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>
    <!-- script -->
    <script>
        feather.replace();
    </script>
    <!-- script -->
</body>
</html>