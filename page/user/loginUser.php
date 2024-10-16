<?php
    session_start();
    require "../../controller/connection.php";

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
    }

    $query = "SELECT * FROM user_table WHERE username = '$username'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row["password"])){
            $_SESSION["username"] = $username;
            header("Location: ../../homepage.php");
            exit;
        }else{
            echo "<script>
                alert('password salah/tidak sesuai!!');
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- css style -->
    <link rel="stylesheet" href="../style/loginUser.css">
    <!-- css style -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->
</head>
<body style="background-color: #fffaa6;" class="mt-5">
    <div class="container-title d-flex align-items-center justify-content-center py-2 px-2">
        <h1 class="title text-center w-25 h2 rounded" style="background-color: #fbc606;">Login</h1>
    </div>
    <div class="container-form d-flex align-items-center justify-content-center flex-column">
        <form action="" method="post" class=" bg-white d-flex justify-content-center d-flex align-items-center flex-column h-100 w-25 rounded">
            <input class="text-center w-75 my-5 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="text" name="username" placeholder="masukkan username">
            <input class="text-center w-75 mb-5 border-black border-top-0 border-start-0 border-end-0 border-bottom-10" type="password" name="password" placeholder="masukkan password" mb-3>
            <button type="submit" class="login-user-button text-black mb-5 px-4 py-1 rounded" name="login">Login</button>
        </form>
        <p class="text-center mt-2">Belum punya akun? Regis <a href="regisUser.php">Sini</a></p>
    </div>
    <img class="logo-img" src="../../assets/new logo.png" alt="">

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- js bootstrap -->
</body>
</html>