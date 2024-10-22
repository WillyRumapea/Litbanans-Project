<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css bootstrap -->

    <!-- css style -->
     <link rel="stylesheet" href="page/style/homepage.css">
    <!-- css style -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <!-- fonts -->    

    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
    <!-- icon -->
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container-img-logo">
                <a href="homepage.php">
                    <img src="assets/new logo.png" width="120" height="80" alt="logo img">
                </a>
            </div>
            <div class="container-navbar">
                <ul>
                    <li><a href="#HOME" class="nav-link">Home</a></li>
                    <li><a href="#ABOUT" class="nav-link">About</a></li>
                    <li><a href="#PRODUCT" class="nav-link">Product</a></li>
                    <li><a href="#CONTACT" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div class="container-loggin-button">
                <?php if(isset($_SESSION["username"])):?>
                    <span class="username fs-5" style="border: 1px solid; background-color:darkorange; border-radius:5px; padding:5px; box-shadow: 2px 1px 2px #000;"><?= htmlspecialchars($_SESSION["username"])?></span>
                <?php else:?>
                    <button class="button-login">Loggin</button>
                    <button class="button-daftar">Regis</button>
                        <?php endif;?> 
            </div>
            <span class="material-symbols-outlined ham-menu">menu</span>
        </nav>
    </header>
    <main>
        <section class="home-section mb-3" id="HOME">
            <div class="container-img-home" >
                <img src="assets/hero-img.svg" alt="banana logo" class="center-img">
                <div class="bottom-img-home d-flex align-items-center justify-content-between ">
                    <img src="assets/kiri.svg" alt="animation product" class="home-left-img">
                    <button class="order-button text fs-4 text">ORDER NOW</button>
                    <img src="assets/kanan.svg" alt="animation product" class="home-right-img">
                </div>
            </div>
        </section>
        <section class="about-section" id="ABOUT">
            <h1 class="text-center">About Us</h1>
            <div class="container-about-section d-flex align-items-center justify-content-around">
                    <img src="assets/logo.svg" alt="" class="about-img">
                    <p class="text-about w-75 p-3 fs-5 text-justify lh-base" >LitBanans adalah UMKM yang bergerak di bidang kuliner, khususnya desert pisang lumer. Kami menawarkan berbagai varian dessert berbahan dasar pisang yang disajikan dengan tekstur lembut dan meleleh di mulut. LitBanans berfokus pada kualitas bahan baku terbaik, dengan pisang pilihan yang dipadukan dengan saus manis, cokelat, keju, Tiramisu dan berbagai topping lainnya untuk menciptakan pengalaman rasa yang unik.Kami mengutamakan inovasi dalam setiap produk, menggabungkan cita rasa dengan tren makanan modern untuk memberikan variasi yang memuaskan semua kalangan. LitBanans berkomitmen untuk memberikan pelayanan yang cepat dan ramah, dengan tujuan menjadi pilihan utama pecinta dessert di seluruh Indonesia.</p>
            </div>
        </section>
        <section class="product-section p-2" id="PRODUCT">
            <div class="container-product-section d-flex align-items-center justify-content-center flex-column">
                <h2 class="text-center mt-4">OUR PRODUCT</h2>
                <div class="content-product-section w-75 d-flex align-items-center justify-content-center flex-column w-100">
                    <p class="product-definition-text text-center py-1 px-2 mt-2">Kami dengan bangga mempersembahkan dua jenis produk kami yang pastinya akan sangat anda dan pelanggan lainnya sukai, yaitu Pisang Lumer dan Banana Rolls.</p>
                    <div class="type-product d-flex align-items-center justify-content-evenly w-100 h-75 py-5" >
                        <div class="border-img d-flex align-items-center justify-content-center flex-column">
                            <img src="assets/product-sect/Rectangle 10.svg" alt="" class="product-img">
                            <div class="desc-img-content">
                                <h3 class="product-sect-title">Pisang Lumer</h3>
                                <p class="product-sect-desc"> Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. Tersedia dalam berbagai rasa dan topping pilihan mu.</p>
                            </div>
                        </div>
                        <div class="border-img d-flex align-items-center justify-content-center flex-column">
                            <img src="assets/product-sect/Rectangle 11.svg" alt="" class="product-img">
                            <div class="desc-img-content">
                                <h3 class="product-sect-title">Banana Rolls</h3>
                                <p class="product-sect-desc" > Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. Tersedia dalam berbagai rasa dan topping pilihan mu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-collection d-flex align-item-center justify-content-around w-100 p-3">
                        <div class="desc-prod-collect">
                            <img src="assets/product-sect/piscok_coklat_keju.jpg" class="img-collect" alt="gambar_produk">
                            <div class="content-text-collect-product">
                                <h3 class="collect-title">Piscok Coklat Keju</h3>
                                <p class="collect-text">Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut.</p>
                            </div>
                        </div>
                        <div class="desc-prod-collect">
                            <img src="assets/product-sect/pisang_lumer_cappucino.jpg" class="img-collect" alt="gambar_produk">
                            <div class="content-text-collect-product">
                                <h3 class="collect-title">Piscok Lumer Cappucino</h3>
                                <p class="collect-text">Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. </p>
                            </div>
                        </div>
                        <div class="desc-prod-collect">
                            <img src="assets/product-sect/pisang_lumer_coklat.jpg" class="img-collect" alt="gambar_produk">
                            <div class="content-text-collect-product">
                                <h3 class="collect-title">Piscok Lumer Coklat</h3>
                                <p class="collect-text">Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. </p>
                            </div>
                        </div>
                        <div class="desc-prod-collect">
                            <img src="assets/product-sect/piscok_coklat.jpg"  class="img-collect"alt="gambar_produk">
                            <div class="content-text-collect-product">
                                <h3 class="collect-title">Piscok Coklat Meises</h3>
                                <p class="collect-text">Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. </p>
                            </div>
                        </div> 
                        <div class="desc-prod-collect">
                            <img src="assets/product-sect/pislum_mix_coklat_strawberry.jpg" class="img-collect" alt="gambar_produk">
                            <div class="content-text-collect-product">
                                <h3 class="collect-title">Piscok Lumer Mix</h3>
                                <p class="collect-text">Dibuat dari pisang pilihan berkualitas yang diolah dengan cara khusus sehingga menghasilkan tekstur lembut dan lumer di mulut. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/new logo.png" class="background-img-product" alt="">
                <div class="button-product-section mt-4">
                    <button class="fs-4 order-button">ORDER NOW</button>
                </div>
            </div>
        </section>
    </main>
    <footer class="p-2 mt-4" id="CONTACT">
        <div class="container-logo-footer d-flex align-item-center justify-content-center p-2" >
            <img src="assets/logo.svg" alt="logo" >
        </div>
        <div class="social-med-group p-2 d-flex justify-content-around align-item-center">
            <p>Jl.Roso Gg. Roso Indah No.8 Kecamatan Delitua</p>
            <h3>LitBanans</h3>
            <ul class="w-25 d-flex justify-content-around align-item-center list-unstyled">
                <li><a href="">Litbanans<i data-feather="facebook"></i></a></li>
                <li><a href="">@litbanans<i data-feather="instagram"></i></a></li>
                <li><a href="">Litbanans<i data-feather="shopping-bag"></i></a></li>
            </ul>
        </div>
        <p class="text-center">© 2024 Chocobanas. All Rights Reserved.</p>
    </footer>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- js bootstrap -->

    <!-- js script -->
    <script src="script/homepage.js"></script>
    <script src="script/navbar.js"></script>
    <!-- js script -->
</body>
</html>