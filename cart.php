<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sait/css/home.css">
    <link rel="stylesheet" href="sait/css/card.css">
    <link rel="stylesheet" href="sait/css/footer.css">
    <link rel="script" href="sait/js/catalog.js">

    <script src="sait/js/jquery-ui.js"></script>
    <script src="sait/js/jquery.js"></script>
    <script src="sait/js/myCart.js"></script>
    <title>Card</title>
</head>
<body>

<header class="container_max">

    <div class="container">
        <div class="col-1-3">
            <a href="home.php"><img class="logo_width" src="img/logo/logoblack.png"></a>
        </div>
        <div class="col-2-3">
            <ul>
                <li style="padding-left: 1vw"><a href="#HIT`S">HIT`S</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="#about_us">О нас</a></li>
                <li><a href="#delivery">Доставка и оплата</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="col-3-3">
            <div class="position_left">
                <img class="fish_menu" src="img/logo/heart-regular.svg">
                <p class="fish"><a href="basket.php">BAG</a></p>
                <img class="fish_menu" src="img/logo/circle-solid.svg">
                <img class="fish_menu" src="img/logo/magnifying-glass-solid.svg">
                <p class="fish"><input type="search" name="q" placeholder=""></p>
            </div>
        </div>
    </div>

    <div class="mobile" id="mobile">
        <div class="container_mobile" id="container_mobile">
            <div class="mob-1-3">
                <a href="home.php"><img class="logo" src="img/logo/logoblack.png" alt=""></a>
            </div>
            <img src="img/logo/bars-solid.svg" onmousedown="viewDiv()">
            <div class="mob-2-3">
                <h2><a href="basket.php">BAG</a></h2>
                <img class="logo_width" src="img/logo/circle-solid.svg" alt="">
                <img class="logo_width" src="img/logo/heart-regular.svg" alt="">
            </div>
        </div>
    </div>
</header>

<div id="menu_wrap">
    <div class="container_menu_mobile">
        <div class="logo_mobile">
            <img class="logo_mobile_white" onmousedown="closeDiv()" src="img/logo/logowhite.png" alt="">
        </div>
        <div class="menu_bar">
            <div class="container_bar">
                <p>Комплекты постельного белья</p>
                <p>Постельные принадлежности</p>
                <p>Отдельные предметы</p>
                <p>Покрывала и пледы</p>
                <p>Текстиль для кухни</p>
                <p>Полотенца</p>
            </div>
        </div>
        <div class="mess_info_bar_mobile container_bar">
            <h1>Собрать свой собственный комплект</h1>
            <p>+ 7 (999) 999-99-99</p>
            <div class="img_mobile_img">
                <a><img src="/img/logo/vkwhite.png" alt=""></a>
                <a><img src="/img/logo/telegramwhite.png" alt=""></a>
                <a><img src="/img/logo/viberwhite.png" alt=""></a>
            </div>
        </div>
    </div>
</div>


<main>

    <div>
        <!-- Главная -> Каталог -> Комплект белья Rain -->
    </div>

    <?php
    include 'bd_cart.php';
    ?>

    <div class="component_3_1">
        <div class="component_3">
            <h1>Вам может понравиться</h1>
            <div class="catalog_menu wrapper-boxes">
                <div class="catalog_element_one catalog_element box">
                    <img src="img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

                    <div>
                        <div class="info_element">
                            <div class="info_left">
                                <p class="info_left">Комплект белья</p>
                            </div>
                            <div class="info_right">
                                <p>Ткань сатин</p>
                            </div>
                        </div>
                        <div class="info_element">
                            <div class="info_element_left_bar">
                                <h2>Grey</h2>
                                <h3>8600 ₽</h3>
                            </div>
                            <div class="info_element_right_bar">
                                <p><a href="#">Подробнее</a></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="catalog_element_one catalog_element box">
                    <img src="img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

                    <div>
                        <div class="info_element">
                            <div class="info_left">
                                <p class="info_left">Комплект белья</p>
                            </div>
                            <div class="info_right">
                                <p>Ткань сатин</p>
                            </div>
                        </div>
                        <div class="info_element">
                            <div class="info_element_left_bar">
                                <h2>Grey</h2>
                                <h3>8600 ₽</h3>
                            </div>
                            <div class="info_element_right_bar">
                                <p><a href="#">Подробнее</a></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="catalog_element_one catalog_element box">
                    <img src="img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

                    <div>
                        <div class="info_element">
                            <div class="info_left">
                                <p class="info_left">Комплект белья</p>
                            </div>
                            <div class="info_right">
                                <p>Ткань сатин</p>
                            </div>
                        </div>
                        <div class="info_element">
                            <div class="info_element_left_bar">
                                <h2>Grey</h2>
                                <h3>8600 ₽</h3>
                            </div>
                            <div class="info_element_right_bar">
                                <p><a href="#">Подробнее</a></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</main>

<?php
include 'footer.php';
?>

<script src="sait/js/catalog.js"></script>
<script src="sait/js/menu.js"></script>
<script src="sait/js/card.js"></script>
</body>
</html>