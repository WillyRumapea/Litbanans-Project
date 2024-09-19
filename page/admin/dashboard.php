<?php
    require "../../controller/connection.php";
    require "../../controller/query.php";

    $result = query("SELECT * FROM order_table");

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
    <h1>Hello Admin!</h1>
    <table class="table table-striped" border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>produk</th>
            <th>rasa</th>
            <th>topping</th>
            <th>porsi</th>
            <th>pesan</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($result as $row):?>
        <tr>
            <td><?= $i;?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["produk"]?></td>
            <td><?= $row["rasa"]?></td>
            <td><?= $row["topping"]?></td>
            <td><?= $row["porsi"]?></td>
            <td><?= $row["pesan"]?></td>
            <td><?= $row["harga"]?></td>
            <td>
                <div class="continer-button">
                    <a href="" class="btn btn-warning">edit</a>
                    <a href="../../controller/hapus.php?id=<?= $row["id"]?>" class="btn btn-danger">hapus</a>
                    <a href="" class="btn btn-primary">konfirmasi</a>
                </div>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>