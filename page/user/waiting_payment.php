<?php
    session_start();
    if(isset($_SESSION['payment_confirmed'])){
        echo "<script>
        alert('Terima kasih sudah bayar ke kasir, pesanan akan segera dibuat.');
        document.location.href = '../../homepage.php';
    </script>";
    unset($_SESSION['payment_confirmed']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menunggu Pembayaran</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->

    <!-- css -->
     <link rel="stylesheet" href="../style/waiting_payment.css">
    <!-- css -->

    <!-- animation lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- animation lottie -->
</head>
<body>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="text-center">
        <h1>Silahkan bayar ke kasir untuk memproses pesananmu.</h1>
        <p class="mt-3">Kasir akan mengkonfirmasi pesanan setelah pembayaran diterima.</p>
        <lottie-player
      src="https://lottie.host/73aff097-a843-4371-a17d-673aa0e26bd8/5Xm3kDUgxU.json"
      background="##FFFFFF"
      speed="1"
      style="width: 250px; height: 250px"
      loop
      autoplay
      direction="1"
      mode="normal"
    ></lottie-player>
    </div>
</body>
</body>
</html>