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
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- icon -->
</head>
<body>
    <header class="position-fixed w-100 px-2 py-2 mt-2" >
        <div class="container-header d-flex align-items-center justify-content-between px-2" > 
            <div class="container-img">
                <img src="assets/logo.svg" alt="Logo Litbanans" class="logo-img" >
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-50 d-flex align-items-center justify-content-around" >
                <div class="container-nav navbar-nav d-flex align-items-center justify-content-around w-50">
                    <a class="nav-link active fs-5 text" href="#HOME">Home</a>
                    <a class="nav-link active fs-5 text" href="#ABOUT">About</a>
                    <a class="nav-link active fs-5 text" href="#PRODUCT">Product</a>
                    <a class="nav-link active fs-5 text" href="#CONTACT">Contact</a>
                </div>
            </nav>
            <div class="container-button-login p-2">
                <button class="px-3 py-1 button-login">Login</button>
                <button class="px-3 py-1 button-daftar ms-1">Daftar</button>
            </div>
        </div>
    </header>
    <main>
        <section class="home-section mb-3" id="HOME">
            <div class="container-img-home">
                <img src="assets/hero-img.svg" alt="banana logo" class="center-img">
                <div class="bottom-img-home d-flex align-items-center justify-content-between ">
                    <img src="assets/kiri.svg" alt="animation product" class="home-left-img">
                    <button class="order-button text fs-4 text">ORDER NOW</button>
                    <img src="assets/kanan.svg" alt="animation product" class="home-right-img">
                </div>
            </div>
        </section>
        <section class="about-section" id="ABOUT">
            <div class="container-about-section d-flex align-items-center justify-content-between">
                <div class="content-about d-flex align-items-center justify-content-around flex-row p-5">
                    <img src="assets/logo.svg" alt="" class="about-img">
                    <p class="text-about w-50 p-3 fs-5" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam libero, cumque quas eligendi, explicabo qui ipsum aliquid quisquam praesentium laudantium recusandae harum laborum doloremque officia, omnis illum nihil modi. Maxime, corporis id, similique at adipisci sapiente voluptatum molestias aperiam officia magni temporibus repellat possimus qui doloribus tempora sunt vel unde quos. Aliquam quis illo nobis cum in culpa perspiciatis fugit aperiam temporibus saepe? Voluptatibus nemo expedita quod numquam cum aperiam error est, impedit assumenda saepe voluptatum deserunt. Unde ab, molestiae deserunt aperiam sunt aliquid reiciendis provident repellat dolores minima libero debitis. Nihil beatae quibusdam ratione facilis animi fugit maxime? Nemo?</p>
                </div>
            </div>
        </section>
        <section class="product-section p-2" id="PRODUCT">
            <div class="container-product-section d-flex align-items-center justify-content-center flex-column">
                <h2 class="text-center mt-4">OUR PRODUCT</h2>
                <div class="content-product-section w-75 d-flex align-items-center justify-content-center flex-column w-100">
                    <p class="text-center py-1 px-2 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nam quod magnam consequuntur praesentium odio et! Nostrum velit praesentium aliquid.</p>
                    <div class="type-product d-flex align-items-center justify-content-evenly w-100 h-75 py-2" >
                        <div class="border-img d-flex align-items-center justify-content-around flex-column">
                            <img src="assets/product-sect/Rectangle 10.svg" alt="">
                        </div>
                        <div class="border-img d-flex align-items-center justify-content-around flex-column">
                            <img src="assets/product-sect/Rectangle 11.svg" alt="">
                        </div>
                    </div>
                    <div class="product-collection d-flex align-item-center justify-content-between w-100 p-3">
                        <img src="assets/product-sect/WhatsApp Image 2024-09-03 at 16.31.17_b0db6c9a.svg" alt="">
                        <img src="assets/product-sect/WhatsApp Image 2024-09-03 at 16.31.17_b0db6c9a.svg" alt="">
                        <img src="assets/product-sect/WhatsApp Image 2024-09-03 at 16.31.17_b0db6c9a.svg" alt="">
                        <img src="assets/product-sect/WhatsApp Image 2024-09-03 at 16.31.17_b0db6c9a.svg" alt="">
                        <img src="assets/product-sect/WhatsApp Image 2024-09-03 at 16.31.17_b0db6c9a.svg" alt="">
                    </div>
                </div>
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
        <div class="social-med-group p-2 d-flex justify-content-center align-item-center" >
            <ul class="w-25 d-flex justify-content-around align-item-center list-unstyled" >
                <li><a href=""><i data-feather="facebook"></i></a></li>
                <li><a href=""><i data-feather="instagram"></i></a></li>
                <li><a href=""><i data-feather="shopping-bag"></i></a></li>
            </ul>
        </div>
        <p class="text-center">© 2024 Chocobanas. All Rights Reserved.</p>
    </footer>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- js bootstrap -->
    <!-- js script -->
    <script src="script/homepage.js"></script>
    <!-- js script -->
     <script>
        feather.replace();
     </script>
</body>
</html>