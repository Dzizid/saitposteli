<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="script" href="../js/catalog.js">
    <link rel="script" href="../js/card.js">
    <title>Card</title>
</head>
<body>

<header class="container_max">

    <div class="container">
        <div class="col-1-3">
            <a href="../../home.php"><img class="logo_width" src="../../img/logo/logoblack.png"></a>
        </div>
        <div class="col-2-3">
            <ul>
                <li style="padding-left: 1vw"><a href="#HIT`S">HIT`S</a></li>
                <li><a href="../../catalog.php">Каталог</a></li>
                <li><a href="#about_us">О нас</a></li>
                <li><a href="#delivery">Доставка и оплата</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="col-3-3">
            <div class="position_left">
                <img class="fish_menu" src="../../img/logo/heart-regular.svg">
                <p class="fish"><a href="basket.php">BAG</a></p>
                <img class="fish_menu" src="../../img/logo/circle-solid.svg">
                <img class="fish_menu" src="../../img/logo/magnifying-glass-solid.svg">
                <p class="fish"><input type="search" name="q" placeholder=""></p>
            </div>
        </div>
    </div>

    <div class="mobile" id="mobile">
        <div class="container_mobile" id="container_mobile">
            <div class="mob-1-3">
                <a href="../../home.php"><img class="logo" src="../../img/logo/logoblack.png" alt=""></a>
            </div>
            <img src="../../img/logo/bars-solid.svg" onmousedown="viewDiv()">
            <div class="mob-2-3">
                <h2><a href="basket.php">BAG</a></h2>
                <img class="logo_width" src="../../img/logo/circle-solid.svg" alt="">
                <img class="logo_width" src="../../img/logo/heart-regular.svg" alt="">
            </div>
        </div>
    </div>
</header>

<div id="menu_wrap">
    <div class="container_menu_mobile">
        <div class="logo_mobile">
            <img class="logo_mobile_white" onmousedown="closeDiv()" src="../../img/logo/logowhite.png" alt="">
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

    <div class="card">
        <div class="all_card">
            <div class="top_card">
                <div class="img_card">
                    <img src="../../img/logo/jake-charles-LyALgKdcUVI-unsplash.png" alt="">
                </div>

                <div class="info_card">
                    <h1>Rain</h1>
                    <div>
                    <h2>РАЗМЕРЫ</h2>
                        <form class="form_select_one from_select" action="select1.php" method="post">
                            <select class="select" name="select">
                                <option selected="selected">Двухспальное(евро)</option>
                                <option>Семейное</option>
                                <option>Полутороспальное</option>
                                <option>Двухспальное</option>
                                <option>Евро Макси</option>
                                <option>Евро</option>
                            </select>
                        </form>
                    </div>
                    <div class="characteristics">
                        <h2>ХАРАКТЕРИСТИКИ</h2>
                        <div class="info_menu">
                            <div class="info info_left">
                                <h3>Плотность</h3>
                                <h3>Материал</h3>
                                <h3>Тип застежки</h3>
                            </div>

                            <div class="info_text_left">
                                <p>130 г/м2</p>
                                <p>Сатин</p>
                                <p>На замке</p>
                            </div>

                            <div class="info info_right">
                                <h3>Простынь</h3>
                                <h3>Пододеяльник</h3>
                                <h3>Наволочка</h3>
                            </div>

                            <div class="info_text_right">
                                <p>190*220, 1шт</p>
                                <p>180*215, 1шт</p>
                                <p><form action="select1.php" method="post">
                                    <select class="select_od" name="" id="">
                                        <option value="">50*70, 2шт</option>
                                        <option value="">70*70, 2шт</option>
                                    </select>
                                </form></p>
                            </div>
                        </div>
                        <div class="basket">
                            <h3>В корзину</h3>
                            <div class="price">
                            <h4>Цена:</h4>
                            <p>7400 ₽</p>
                            </div>
                        </div>
                        <div class="description">
                            <h2>ОПИСАНИЕ И УХОД</h2>
                            <div class="description_info">
                                <p>Комплект постельного белья из сатина - это всегда стильно, минималистично, и, конечно, качественно.</p>
                                <p>Ткань полностью состоит из 100% хлопковой нити высокого класса, что обеспечивает ее мягкость и прочность.</p>
                                <p>Цвет Rain благородный природный темно-серый оттенок идеально подойдёт для спальни любого цвета и впишется в любой интерьер.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom card">

            </div>
        </div>
    </div>

    <div class="card_mobile">
        <div class="card_mobile_wi">
            <div class="">
                <h1>Rain</h1>
                <div class="mobile_name">
                    <img src="../../img/logo/jake-charles-LyALgKdcUVI-unsplash.png" alt="">
                </div>

                <div class="">

                    <div class="shop_basket">
                        <div class="basket_h">
                            <h3>В корзину</h3>
                        </div>
                        <div class="many">
                            <h4>Цена:</h4>
                            <p>7400 ₽</p>
                        </div>
                    </div>

                    <div class="var_pos">
                        <h2 class="info_mobile">РАЗМЕРЫ</h2>
                        <form class="form_select_mobile" action="select1.php" method="post">
                            <select class="select_mobile" name="select">
                                <option selected="selected">Двухспальное(евро)</option>
                                <option>Семейное</option>
                                <option>Полутороспальное</option>
                                <option>Двухспальное</option>
                                <option>Евро Макси</option>
                                <option>Евро</option>
                            </select>
                        </form>
                    </div>

                    <hr class="hr_mobile">
                    <div class="">
                        <h2 class="info_mobile"><a onmousedown="vievDivHar()">ХАРАКТЕРИСТИКИ</a></h2>
                        <div class="info_menu_mobile" id="info_har">
                            <div class="info_left_mobile">
                                <h3>Плотность</h3>
                                <p>130 г/м2</p>
                                <h3>Материал</h3>
                                <p>Сатин</p>
                                <h3>Тип застежки</h3>
                                <p>На замке</p>
                            </div>

                            <div class="info_right_mobile">
                                <h3>Простынь</h3>
                                <p>190*220, 1шт</p>
                                <h3>Пододеяльник</h3>
                                <p>180*215, 1шт</p>
                                <h3>Наволочка</h3>
                                <form action="select1.php" method="post">
                                    <select class="" name="" id="">
                                        <option value="">50*70, 2шт</option>
                                        <option value="">70*70, 2шт</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <hr class="hr_mobile">
                        <div class="info_menu_bottom_mobile">
                            <h2 class="info_mobile"><a onmousedown="vievDivHarOpis()">ОПИСАНИЕ И УХОД</a></h2>
                            <div class="info_text_mobile" id="info_har_opis">
                                <p>Комплект постельного белья из сатина - это всегда стильно, минималистично, и, конечно, качественно.</p>
                                <p>Ткань полностью состоит из 100% хлопковой нити высокого класса, что обеспечивает ее мягкость и прочность.</p>
                                <p>Цвет Rain благородный природный темно-серый оттенок идеально подойдёт для спальни любого цвета и впишется в любой интерьер.</p>
                            </div>
                        </div>
                        <hr class="hr_mobile">
                    </div>
                </div>
            </div>

            <div class="bottom card">

            </div>
        </div>
    </div>

    <div class="component_3_1">
        <div class="component_3">
            <h1>Вам может понравиться</h1>
            <div class="catalog_menu wrapper-boxes">
                <div class="catalog_element_one catalog_element box">
                    <img src="../../img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

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
                    <img src="../../img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

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

            <!--    </div>

                    <div class="catalog_element_one catalog_element box">
                    <img src="../../img/catalog/ryan-kwok-S1kOsHqGrw0-unsplash.png" alt="">

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

                </div> -->

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
                    <p><a href="../../home.php">Главная</a></p>
                    <p><a href="../../home.php">О нас</a></p>
                    <p><a href="../../home.php">Доставка и оплата</a></p>
                    <p><a href="../../home.php">Каталог</a></p>
                </div>
                <div class="foo-3-3 pad_bot">
                    <p>Контакты</p>
                    <p>+ 7 (999) 999-99-99</p>
                    <p>г. Оренбург, ул. 60 лет Октября, д. 76</p>
                    <p>Postelibel@gmail.com</p>
                    <div class="img">
                        <img src="../../img/logo/vkwhite.png" alt="">
                        <img src="../../img/logo/telegramwhite.png" alt="">
                        <img src="../../img/logo/viberwhite.png" alt="">
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
                        <img src="../../../img/logo/vkwhite.png" alt="">
                        <img src="../../../img/logo/telegramwhite.png" alt="">
                        <img src="../../../img/logo/viberwhite.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<script src="../js/catalog.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/card.js"></script>
</body>
</html>