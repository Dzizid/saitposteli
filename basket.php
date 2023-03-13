<?php

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sait/css/home.css">
    <link rel="stylesheet" href="sait/css/basket.css">
    <link rel="stylesheet" href="sait/css/design.css">
    <link rel="stylesheet" href="sait/css/footer.css">

    <script src="sait/js/jquery-ui.js"></script>
    <script src="sait/js/jquery.js"></script>
    <link rel="script" href="sait/js/basket.js">
    <script src="sait/js/menu.js"></script>
    <script src="sait/js/myCart.js"></script>

    <title>Basket</title>
</head>
<body onload="showMyCart()">

<header class="container_max">

    <div class="container">
        <div class="col-1-3">
            <a href="home.php"><img class="logo_width" src="img/logo/logoblack.png"></a>
        </div>
        <div class="col-2-3">
            <ul>
                <li style="padding-left: 1vw"><a href="home.php">HIT`S</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="home.php">О нас</a></li>
                <li><a href="home.php">Доставка и оплата</a></li>
                <li><a href="home.php">Контакты</a></li>
            </ul>
        </div>
        <div class="col-3-3">
            <div class="position_left">
                <img class="fish_menu" src="img/logo/heart-regular.svg">
                <p class="fish"><a href="basket.html">BAG</a></p>
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
                <h2><a href="basket.html">BAG</a></h2>
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



    <div class="container_basket">
        <h1>BAG</h1>
        <div class="container_basket_product" id="in-check">
            <div class="top" id="in_check">
                <h3 class="start">Товар</h3>
                <h3 class="center">Цена</h3>
                <h3 class="end">Количество</h3>
            </div>
            <hr>
            <div class="mess">

                <div class="basket_product in-check" id="in-check">

                </div>

                <div class="summ">

                </div>

                <div class="design">
                    <p><a id="myBtnDesign">Оформить</a></p>
                </div>
                <div id="myModalDesign" class="modal">
                    <div class="modal-design">
                        <div class="center_one " >
                            <div class="content_design">
                                <div class="all_info_modal">
                                    <h1>Мои данные</h1>
                                    <div class="info_all">
                                        <div class="info_name">
                                            <p>Имя</p>
                                            <p>Фамилия</p>
                                            <p>Адрес</p>
                                            <p>Телефон</p>
                                            <p>Почта</p>
                                        </div>
                                        <div class="info_input">
                                            <input type="text" name="1">
                                            <input type="text" name="2">
                                            <input type="text" name="3">
                                            <input type="text" name="4">
                                            <input type="text" name="5">
                                        </div>
                                    </div>
                                    <h1>Доставка</h1>
                                    <div class="info_all">
                                        <div class="info_citi">
                                            <p>Город</p>
                                        </div>
                                        <div class="info_input_citi">
                                            <input type="text" name="1">
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Самовывоз г. Оренбург
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Доставка по г. Оренбург в любую точку - 150 р
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Доставка почтой России
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Доставка через транспортную компанию
                                        </label>
                                    </div>
                                    <div class="info_all">
                                        <div class="info_citi">
                                            <p>Улица</p>
                                        </div>
                                        <div class="info_input_citi">
                                            <input type="text" name="1">
                                        </div>
                                    </div>
                                    <div  class="home_info">
                                        <div class="home_input">
                                            <p>Дом</p>
                                            <input class="home_input" type="text" name="1">
                                        </div>
                                        <div class="home_input">
                                            <p>Квартира/Офис</p>
                                            <input type="text" name="1">
                                        </div>
                                    </div>
                                    <div class="comment_input">
                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="1">
                                    </div>
                                    <h1 style="padding-top: 30px">Способы оплаты</h1>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Картой онлайн
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Наличными при самовывозе
                                        </label>
                                    </div>
                                    <div class="summ_num">
                                        <h2>Итоговая сумма: 16000 ₽</h2>
                                    </div>
                                    <div class="button_shop">
                                        <h3>Заказать</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container_basket_product_mobile" id="in-check">
            <div class="element_mobile_basket" id="in-check">

            </div>

            <div class="summ">

            </div>

            <div class="design_mobile">
                <p><a id="myBtnDesignMobile" onmousedown="viedInfoClient()">Оформить</a></p>
            </div>

            <div class="info_client" id="myClient">
                <div class="modal-design">
                    <div class="center_one " >
                        <div class="content_design">
                            <div class="all_info_modal">
                                <h1>Мои данные</h1>
                                <div class="info_all">
                                    <div class="info_name">
                                        <p>Имя</p>
                                        <p>Фамилия</p>
                                        <p>Адрес</p>
                                        <p>Телефон</p>
                                        <p>Почта</p>
                                    </div>
                                    <div class="info_input">
                                        <input type="text" name="1">
                                        <input type="text" name="2">
                                        <input type="text" name="3">
                                        <input type="text" name="4">
                                        <input type="text" name="5">
                                    </div>
                                </div>
                                <h1>Доставка</h1>
                                <div class="info_all">
                                    <div class="info_citi">
                                        <p>Город</p>
                                    </div>
                                    <div class="info_input_citi">
                                        <input type="text" name="1">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Самовывоз г. Оренбург
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Доставка по г. Оренбург в любую точку - 150 р
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Доставка почтой России
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Доставка через транспортную компанию
                                    </label>
                                </div>
                                <div class="info_all">
                                    <div class="info_citi">
                                        <p>Улица</p>
                                    </div>
                                    <div class="info_input_citi">
                                        <input type="text" name="1">
                                    </div>
                                </div>
                                <div  class="home_info">
                                    <div class="home_input">
                                        <p>Дом</p>
                                        <input class="home_input" type="text" name="1">
                                    </div>
                                    <div class="home_input">
                                        <p>Квартира/Офис</p>
                                        <input type="text" name="1">
                                    </div>
                                </div>
                                <div class="comment_input">
                                    <p>Комментарий к заказу</p>
                                    <input type="text" name="1">
                                </div>
                                <h1 style="padding-top: 30px">Способы оплаты</h1>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Картой онлайн
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Наличными при самовывозе
                                    </label>
                                </div>
                                <div class="summ_num">
                                    <!--<h2>Итоговая сумма: 16000 ₽</h2>-->
                                </div>
                                <div class="button_shop">
                                    <!--<h3>Заказать</h3>-->
                                </div>
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

</body>
</html>