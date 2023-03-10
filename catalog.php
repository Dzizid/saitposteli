<?php
include 'сonnection.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sait/css/home.css">
    <link rel="stylesheet" href="sait/css/catalog.css">
    <link rel="stylesheet" href="sait/css/footer.css">
    <script src="sait/js/jquery-ui.js"></script>
    <script src="sait/js/jquery.js"></script>
    <script src="sait/js/catalog.js"></script>
    <script src="sait/js/menu.js"></script>
    <script src="sait/js/myCart.js"></script>

    <title>Catalog</title>
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
                <li><a href="catalog.html">Каталог</a></li>
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

    <div class="content_hits">

        <div class="menu_hits">
            <div>

                <h1>Каталог</h1>
                <h2>Комплекты постельного белья</h2>


                <div class="select_mess">

                    <form class="form_select_one from_select" action="select1.php" method="post">
                        <select class="select_mobile" name="select">
                            <option selected="selected">Размер:</option>
                            <option>Двухспальное(евро)</option>
                            <option>Семейное</option>
                            <option>Полутороспальное</option>
                            <option>Двухспальное</option>
                            <option>Евро Макси</option>
                            <option>Евро</option>
                        </select>
                    </form>

                    <form class="form_select_two from_select" action="select1.php" method="post">
                        <select class="select_mobile" name="select">
                            <option selected="selected">Материал:</option>
                            <option>Бязь</option>
                            <option>Сатин</option>
                            <option>Поплин</option>
                            <option>Перкаль</option>
                        </select>
                    </form>

                    <form class="form_select_three from_select" action="select1.php" method="post">
                        <select class="select_mobile" name="select">
                            <option selected="selected">Цена:</option>
                            <option>1500-2500</option>
                            <option>2500-4000</option>
                            <option>4000-6000</option>
                            <option>6000-8000</option>
                            <option>8000-...</option>
                        </select>
                    </form>

                    <form class="form_select_foo from_select" action="select1.php" method="post">
                        <select class="select_mobile" name="select">
                            <option selected="selected">Скидки:</option>
                            <option>Актуальные товары</option>
                            <option>Товары со скидкой</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="catalog_menu wrapper-boxes">

                <?php
                    include "bd_towar.php";
                ?>

            <div class="download_position">
                <p><a id="button" class="download">Загрузить еще</a></p>
            </div>

        </div>

    </div>

</main>

    <?php
        include 'footer.php';
    ?>


</body>
</html>