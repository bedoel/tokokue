<?php
session_start();
session_unset();
$menus = [
    ["Kue Tart", "IDR 100.000", "Kue tart pastafrola sudah menjadi bagian dari masakan Amerika Selatan. Beberapa isian sering dipilih keju quince, selai ubi jalar, jambu biji, atau selai stroberi. Bagian atas setiap tart didekorasi dengan pola kisi lebar yang menunjukkan isian berwarna-warni. Tart ini bisa disantap sebagai makanan penutup atau camilan sore yang manis.", "kue-tart.jpg"],
    ["Roll Cake", "IDR 80.000", "Roll cake atau beberapa orang menyebutnya bolu gulung adalah kue yang dipanggang menggunakan loyang dangkal dan dilapisi selai lalu digulung. Kamu bisa menggunakan selai stroberi, cokelat, nanas, blueberry, dan selai lainnya sesuai keinginanmu. Kamu juga bisa menambahkan topping di atasnya.", "kueroll.jpg"],
    ["Pie", "IDR 150.000", "Pie adalah makanan yang terdiri dari kulit kue yang kering dan diisi dengan berbagai macam isian. Kamu bisa mengisinya dengan buah, daging, cokelat, kacang-kacangan, dan banyak pilihan isian lainnya. Kamu bisa memilih salah satunya sebagai isian pie buatanmu sendiri.", "kue-pie.jpg"],
    ["Dessert Box", "IDR 50.000", "Dessert box adalah makanan penutup atau bisa disebut dessert yang memadukan antara krim, kue, biscuit, dan pudding jadi satu dan dikemas dalam box bening.", "dessert-box.jpg"]
];

$acc = [
    ["Fadlur Rahman Faiq", "17210297", "https://www.instagram.com/fadlur.rf/", "fadlur.jpg"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIFJY Bakery</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="../projectkue/" class="logo"><img src="img/logo.png" alt=""></a>
            <h1 class="logoName"> TRIFJY BAKERY </h1>
        </div>

        <nav class="navbar">
            <a href="../projectkue/">home</a>
            <a href="product/">product</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
    </header>

    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Tidak Ada Diet, Hanya Ada Gigitan</h2>
            <div class="home-btn">
                <a href="product/"><button>lets see! </button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>New Products</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <?php foreach ($menus as $menu) : ?>
                    <div class="swiper-slide box">
                        <div class="img">
                            <img src="img/<?= $menu[3]; ?>" alt="">
                        </div>
                        <div class="product-content">
                            <h3><?= $menu[0]; ?></h3>
                            <p><?= $menu[1]; ?></p>
                            <div class="readme">
                                <button>Read Me</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- product section end here  -->

    <!-- About Start -->
    <div class="container-about" id="about">
        <div class="heading">
            <h2>About Us</h2>
        </div>
        <div class="container-people">
            <?php foreach ($acc as $anggota) : ?>
                <div class="c-about">
                    <div class="card">
                        <div class="box"></div>
                        <div class="content-about">
                            <h2><?= $anggota[0]; ?></h2>
                            <h2><?= $anggota[1]; ?></h2>
                            <a href="<?= $anggota[2]; ?>" target="_blank">INSTAGRAM</a>
                        </div>
                        <div class="img-container">
                            <img src="img/<?= $anggota[3]; ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- About End -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="blur">
            <div class="box-container">
                <div class="mainBox">
                    <h3>Contact Info</h3>
                    <a href="#"> <i class="fas fa-phone"></i>0123456789</a>
                    <a href="#"> <i class="fas fa-envelope"></i>hahahihi@gmail.com</a>
                </div>
                <div class="logo-box">
                    <a href="../projectkue/" class="logo"><img src="img/logo.png" alt=""></a>
                </div>
            </div>

            <div class="credit">
                <p class="copy">Copyright &copy; 2022 TRIFJY Bakery</p>
            </div>
        </div>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="js/bagian.js"></script>

</body>

</html>