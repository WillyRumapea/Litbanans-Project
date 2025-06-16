<?php
    require "connection.php";

    function addOrder($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $produk = htmlspecialchars($data["produk"]);
        $rasa = htmlspecialchars($data["rasa"]);
        $topping = htmlspecialchars($data["topping"]);
        $porsi = htmlspecialchars($data["porsi"]);
        $pesan = htmlspecialchars($data["pesan"]);
        $harga = htmlspecialchars($data["harga"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $status_pembayaran = 0;

        $qpost = "INSERT INTO order_table VALUES ('','$nama','$produk','$rasa','$topping','$porsi','$pesan','$harga', '$alamat', '$status_pembayaran')";

        mysqli_query($conn,$qpost);

        return mysqli_affected_rows($conn);
    }

        
    function addReport($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $pesan = htmlspecialchars($data["pesan"]);

        $reportPost = "INSERT INTO report_table VALUES('', '$nama', '$pesan')";

        $result = mysqli_query($conn, $reportPost);

        if(!$result){
        echo "Query Error: " . mysqli_error($conn);
        }

        return mysqli_affected_rows($conn);
    }

    function query($data){
        global $conn;

        $result = mysqli_query($conn,$data);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function update($data){
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $produk = htmlspecialchars($data["produk"]);
        $rasa = htmlspecialchars($data["rasa"]);
        $topping = htmlspecialchars($data["topping"]);
        $porsi = htmlspecialchars($data["porsi"]);
        $pesan = htmlspecialchars($data["pesan"]);
        $harga = htmlspecialchars($data["harga"]);

        $updata = "UPDATE order_table SET nama = '$nama', produk = '$produk', rasa = '$rasa', topping = '$topping', porsi = '$porsi', pesan = '$pesan', harga = '$harga' WHERE id = $id";

        mysqli_query($conn,$updata);
        
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        $query = "DELETE FROM order_table WHERE id = $id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function find($keyword){
        $query = "SELECT * FROM order_table WHERE nama LIKE '%$keyword%'";
        return query($query);
    }

    function add($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $produk = htmlspecialchars($data["produk"]);
        $rasa = htmlspecialchars($data["rasa"]);
        $topping = htmlspecialchars($data["topping"]);
        $porsi = htmlspecialchars($data["porsi"]);
        $pesan = htmlspecialchars($data["pesan"]);
        $harga = htmlspecialchars($data["harga"]);
        $status_pembayaran = 0;

        $query = "INSERT INTO order_table VALUES  ('', '$nama', '$produk', '$rasa', '$topping','$porsi', '$pesan', '$harga', '$status_pembayaran')";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

?>