<?php
session_start();
session_unset();
$menus = [
    ["Double Chocolate", "IDR 307.500", "Kue cokelat terbaik yang sangat lembab, kaya, dan fudgy. Dengan kue bolu cokelat yang diperkaya dengan perpaduan unik ganache cokelat yang kaya, kue ini sangat cocok untuk perayaan atau teh sore hari.", "2chocolate.jpg"],
    ["Triple Decter", "IDR 300.000", "Kue cokelat yang sangat menggoda dengan kombinasi ceri hitam, krim kue, dan mousse cokelat yang lembut.", "tripledecter.jpg"],
    ["Brownies", "IDR 86.000", "Chocolate Brownies dengan 5 topping:<br>- Tiramisu <br>- Keju <br>- Biscoff <br>- Kacang <br>- Choco Renyah", "brownies.jpg"],
    ["Cup Cake", "IDR 22.000", "Kue mangkuk mousse cokelat dan vanila yang lembut. Let the happy tounge dancing.", "cupcake.jpg"],
    ["Red Velvet", "IDR 345.000", "Red Velvet yang cantik ini kami memeriahkannya dengan menambahkan Remah Biskuit di sekeliling Kue Coklat Berwarna Merah yang diolesi krim dengan Butter Cream Cheese kami yang manis dan tajam.", "redvelvet.jpg"],
    ["Choco Ball", "IDR 7.000", "Waktu minum teh memanggil, sekarang pilih Chocoball Anda dan pilih yang favorit Anda.", "chocoball.jpg"],
    ["Mokka Torte", "IDR 130.000", "Kue lapis ala Jerman dengan krim mentega mocca ringan dan topping lezat di atasnya.", "mokkatorte.jpg"],
    ["Tiramisu", "IDR 180.000", "Favorit Italia sepanjang masa. harmoni sempurna dari mascarpone mousse, kopi espresso, dan bubuk kakao murni menjadikan kue ini suguhan surgawi untuk setiap kesempatan!", "tiramisu.jpg"],
    ["Sponge Cake", "IDR 100.000", "Kue yang memiliki tekstur ringan dan banyak dijadikan kue ulang tahun. Dibuat dari campuran telur dan gula, tepung terigu,susu bubuk,dan margarin cair yang diaduk hingga mengembang.", "spongecake.jpg"],
    ["Black Forest", "IDR 290.000", "Chocolate Cake dilapisi dengan dark sweet cherry syrup dan filling, dipadukan dengan whipped cream yang lembut dan dilapisi dengan coklat salut.", "blackforest.jpg"],
    ["Pudding Cheese Cake", "IDR 95.000", "Keju Jepang yang creamy dibuat dengan hati-hati untuk pecinta keju yang mencari rasa manis tanpa rasa bersalah!", "puddingcheesecake.jpg"],
    ["Ugly Cake", "IDR 150.000", "Kue viral. Kue dengan tampilan jelek dengan beragam karakter yang diberi hiasan pada kue tersebut membuat acara/perayaan menjadi lebih seru!", "uglycake.jpg"]
];

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
    <title>Products</title>
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

    <div class="Products">
        <div class="homeProducts">
            <h1 id="haha">PRODUCTS</h1>
        </div>
    </div>

    <div class="products-menus">
        <div class="product-menu">
            <?php foreach ($menus as $menu) : ?>
                <form method="POST" action="detailproduct.php">
                    <input type="hidden" name="fotokue" value="<?= $menu[3]; ?>">
                    <input type="hidden" name="namakue" value="<?= $menu[0]; ?>">
                    <input type="hidden" name="hargakue" value="<?= $menu[1]; ?>">
                    <input type="hidden" name="deskripsi" value="<?= $menu[2]; ?>">
                    <button class="button-product">
                        <div class="box">
                            <div class="img">
                                <img src="../img/<?= $menu[3]; ?>" alt="">
                            </div>
                            <div class="product-content">
                                <h3><?= $menu[0]; ?></h3>
                                <p><?= $menu[1]; ?></p>
                            </div>
                        </div>
                    </button>
                </form>
            <?php endforeach; ?>
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