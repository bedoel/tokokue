<?php
session_start();
if (isset($_POST['namakue'])) {
    $_SESSION['foto_kue'] = $_POST['fotokue'];
    $_SESSION['nama_kue'] = $_POST['namakue'];
    $_SESSION['harga_kue'] = $_POST['hargakue'];
    $_SESSION['deskripsi_kue'] = $_POST['deskripsi'];
} elseif (empty($_SESSION['nama_kue']) and empty($_POST['namakue'])) {
    header("Location: ../product/");
    exit;
} else {
    $_SESSION['foto_kue'];
    $_SESSION['nama_kue'];
    $_SESSION['harga_kue'];
    $_SESSION['deskripsi_kue'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="../css/style.css">
    <title><?= $_SESSION['nama_kue']; ?></title>
</head>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="../../projectkue/" class="logo"><img src="../img/logo.png" alt=""></a>
            <h1 class="logoName"> TRIFJY BAKERY </h1>
        </div>

        <nav class="navbar">
            <a href="../../projectkue/">home</a>
            <a href="../product/">product</a>
            <a href="../#about">about</a>
            <a href="../#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
    </header>

    <div class="detail-container">
        <div class="detail-container2">
            <div class="detail-img">
                <img src="../img/<?= $_SESSION['foto_kue']; ?>" alt="">
            </div>
            <div class="detail">
                <div class="header-detail">
                    <h2><?= $_SESSION['nama_kue']; ?></h2>
                    <p><?= $_SESSION['harga_kue']; ?></p>
                </div>
                <div class="footer-detail">
                    <p><?= $_SESSION['deskripsi_kue']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="copyright" id="copyright">
        <p class="copy">Copyright &copy; 2022 TRIFJY Bakery</p>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="../js/bagian.js"></script>
</body>

</html>