<?php
    require "../../controller/connection.php";
    require "../../controller/query.php";

    $dataOnPage = 8;
    $totalData = count(query("SELECT * FROM order_table"));
    $page = ceil($totalData/$dataOnPage);
    $activePage = (isset($_GET["halaman"])) ? $_GET["halaman"]:1;
    $firstData = ($dataOnPage * $activePage) - $dataOnPage;

    $result = query("SELECT * FROM order_table LIMIT $firstData,$dataOnPage");

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
</head>
<body>
    <h1 class="my-2">Hello Admin!</h1>
    <div class="container-table p-2">
        <?php for($i=1;$i<=$page;$i++):?>
            <?php if($i == $activePage):?>
                <a href="?halaman=<?= $i; ?>" style="text-decoration:none; color:blue;"><?= $i; ?></a>
            <?php else:?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif;?>    
        <?php endfor;?>
        <br>
        <table class="table table-hover table-striped table-bordered" border="1">
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">nama</th>
                <th class="text-center">produk</th>
                <th class="text-center">rasa</th>
                <th class="text-center">topping</th>
                <th class="text-center">porsi</th>
                <th class="text-center">pesan</th>
                <th class="text-center">harga</th>
                <th class="text-center">aksi</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($result as $row):?>
            <tr>
                <td class="text-center"><?= $i;?></td>
                <td class="text-center"><?= $row["nama"]?></td>
                <td class="text-center"><?= $row["produk"]?></td>
                <td class="text-center"><?= $row["rasa"]?></td>
                <td class="text-center"><?= $row["topping"]?></td>
                <td class="text-center"><?= $row["porsi"]?></td>
                <td class="text-center"><?= $row["pesan"]?></td>
                <td class="text-center"><?= $row["harga"]?></td>
                <td class="text-center">
                    <div class="continer-button">
                        <a href="" class="btn btn-warning">edit</a>
                        <a href="../../controller/hapus.php?id=<?= $row["id"]?>" class="btn btn-danger">hapus</a>
                        <a href="../../controller/konfirmasi.php?id=<?= $row["id"];?>" class="btn btn-primary">konfirmasi</a>
                    </div>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>