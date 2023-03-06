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
    <link rel="stylesheet" href="sait/html/footer/footer.css">
    <link rel="script" href="sait/js/catalog.js">
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
                <p class="fish"><a href="sait/html/basket.php">BAG</a></p>
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
                <h2><a href="sait/html/basket.php">BAG</a></h2>
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

                $sql = "SELECT * FROM Towar";
                if ($result = $conn->query($sql)) {
                    foreach ($result as $row) {

                        $towarid = $row["id"];
                        $towarname = $row["name"];
                        $towarprice = $row["price"];
                        $towartextile = $row["textile"];
                        $towartype = $row["type"];
                        $towarimg = $row["img"];

                        echo '<div class="catalog_element_one catalog_element box">
                        <img src="'. $towarimg = $row["img"] .'" alt="">

                        <div>
                            <div class="info_element">
                                <div class="info_left">
                                    <p class="info_left">'. $towartype = $row["type"] .'</p>
                                </div>
                                <div class="info_right">
                                    <p>'. $towartextile = $row["textile"] .'</p>
                                </div>
                            </div>
                            <div class="info_element">
                                <div class="info_element_left_bar">
                                    <h2>'. $towarname = $row["name"] .'</h2>
                                    <h3>'. $towarprice = $row["price"] .' ₽</h3>
                                </div>
                                <div class="info_element_right_bar">
                                    <p><a href="sait/html/card.php">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                    }
                }

                $conn->close();

                ?>

            <div class="download_position">
                <p><a id="button" class="download">Загрузить еще</a></p>
            </div>

        </div>

    </div>

</main>

<footer>
    <div class="footer_bg">
        <div class="footer_content">

            <div class="footer_content_all">
                <div class="foo-1-3 pad_bot">
                    <img src="../../../img/logo/logowhite.png" alt="">
                    <p>© Все права защищены</p>
                    <h1>Политика конфеденциальности</h1>
                </div>
                <div class="foo-2-3 pad_bot">
                    <p>Главная</p>
                    <p>О нас</p>
                    <p>Доставка и оплата</p>
                    <p>Каталог</p>
                </div>
                <div class="foo-3-3 pad_bot">
                    <p>Контакты</p>
                    <p>+ 7 (999) 999-99-99</p>
                    <p>г. Оренбург, ул. 60 лет Октября, д. 76</p>
                    <p>Postelibel@gmail.com</p>
                    <div class="img">
                        <img src="img/logo/vkwhite.png" alt="">
                        <img src="img/logo/telegramwhite.png" alt="">
                        <img src="img/logo/viberwhite.png" alt="">
                    </div>
                </div>
            </div>

            <div class="footer_content_all_one">
                <div class="foo-1-3 pad_bot">
                    <img src="../../../img/logo/logowhite.png" alt="">
                    <p>© Все права защищены</p>
                    <h1>Политика конфеденциальности</h1>
                </div>
                <div class="foo-2-3 pad_bot">
                    <p><a href="home.php">Главная</a></p>
                    <p><a href="home.php">О нас</a></p>
                    <p><a href="home.php">Доставка и оплата</a></p>
                    <p><a href="home.php">Каталог</a></p>
                </div>
                <div class="foo-3-3 pad_bot">
                    <p>Контакты</p>
                    <p>+ 7 (999) 999-99-99</p>
                    <p>г. Оренбург, ул. 60 лет Октября, д. 76</p>
                    <p>Postelibel@gmail.com</p>
                    <div class="img">
                        <img src="../../../img/logo/vkwhite.png" alt="">
                        <img src="../../../img/logo/telegramwhite.png" alt="">
                        <img src="../../../img/logo/viberwhite.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="sait/js/catalog.js"></script>
<script src="sait/js/menu.js"></script>
</body>
</html>