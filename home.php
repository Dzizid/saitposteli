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
    <link rel="stylesheet" href="sait/html/footer/footer.css">
    <title>Bella</title>
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
                    <img class="logo" src="img/logo/logoblack.png" alt="">
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

        <div class="container_two">
            <div class="content">
                <div class="content_left">
                    <img src="img/catalog/photoleft.png">
                </div>
                <div class="content_center">
                    <h1>PosteliBell</h1>
                    <p><a href="catalog.php"  >Перейти в каталог</a></p>
                    <p class="natural">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspnatural <br> 100% materials </p>
                    
                    <div class="logo_mess">
                        <a href="#"><img src="img/logo/vk.svg" alt="#"></a>
                        <a href="#"><img src="img/logo/telegram.svg" alt="#"></a>
                        <a href="#"><img src="img/logo/viber.svg" alt="#"></a>
                    </div>
                    
                    
                </div>
                <div class="content_right">
                    <img src="img/catalog/photoright.png">
                    <p>Текстиль для вашего дома with love</p>
                </div>
            </div>
        </div>

        <div class="content_about" id="about_us">
            <div class="about_px">
                <div class="about_us">
                    <h2>О нас</h2>
                    <p>Мы создали наш интернет-магазин, чтобы у вас всегда<br> была возможность выбрать не
                        только готовые<br> комплекты, но и создать собственный из лучших<br> материалов.</p>
                    <img class="decor_abs" src="img/logo/decor.png">
                </div>
            </div>
        </div>

        <div class="content_hits">

            <div class="menu_hits" id="HIT`S">
                <h1>HIT`S</h1>

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
                </div>

                <div class="download_position">
                    <p><a id="button" class="download">Загрузить еще</a></p>
                </div>
            </div>

        </div>

        <div class="content_construct">

            <div class="menu_construct">
                <div class="menu_text_construct">
                    <div class="col-1-1">
                        <h3>Собери свой уникальный<br> комплект в конструкторе<br> Postelibell</h3>
                        <p>А здесь хорошо бы написать, про какую-нибудь<br> скидку</p>
                    </div>
                    <div class="col-2-1">
                        <p><a id="myBtn">Собрать комплект</a></p>
                        <!-- Собираем комплект модальное окно -->
                    </div>
                </div>
            </div>

        </div>

        <div class="delivery">
            <div class="delivery_menu" id="delivery">

                <div class="content_delivery_menu">
                    <h1>Доставка и оплата</h1>
                </div>

                <div class="flex_delivery">
                    <div class="col-5-1">
                        <div class="line line_one"></div>

                        <div class="flex_content_delivery left">
                            <h2>01</h2>
                            <p>Выберете нужный товар в каталоге или сделайте заказ на индивидуальный пошиф.</p>
                        </div>

                        <div class="line"></div>
                        <div class="flex_content_delivery right">
                            <p>Менеджер уточняет детали заказа. Вы получаете СМС с информацией о заказе.</p>
                            <h2>02</h2>
                        </div>

                        <div class="line"></div>
                        <div class="flex_content_delivery left">
                            <h2>03</h2>
                            <p>Оплачиваете банковской картой при оформлении заказа или наличными/картой при получении.</p>
                        </div>

                        <div class="line"></div>
                        <div class="flex_content_delivery right">
                            <p>Доставляем заказ Почтой России или курьером по Оренбургу (все транспортные расходы оплачивает закзчик).</p>
                            <h2>04</h2>
                        </div>

                    </div>
                    <div class="col-5-2">
                        <div class="img_wrap">
                            <img class="img_one" src="img/logo/taisiia-shestopal-mqHjCth7bTU-unsplash.png">
                            <img class="img_two" src="img/logo/bao-nguyen-xR6g5T0J_vo-unsplash%201.png">
                            <img class="img_three" src="img/logo/decor.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rectangle" id="contacts">
            <div class="glitch">
            <h1>liBell</h1>
            <h1>PosteliBell</h1>
            <h1>PosteliBell</h1>
            <h1>PosteliBell</h1>
            <h1>PosteliBell</h1>
            <h1>PosteliBell</h1>
            <h1>Posteli</h1>
            </div>
        </div>

        <div class="contacts">
            <div class="contacts_menu">
                <div class="contacts_menu_flex">
                    <h1>Контакты</h1>
                    <div class="contacts_address">
                            <h2>Адрес</h2>
                        <p>г. Оренбург, ул. 60 лет Октября, д. 76</p>
                    </div>
                    <div class="contacts_contact">
                        <h2>Связаться с нами</h2>
                        <p>Postelibel@gmail.com</p>
                        <p>+ 7 (999) 999-99-99</p>
                    </div>
                    <div class="contacts_mess">
                        <div class="contacts_mess_justify">
                            <a><img src="/img/logo/vk.svg" alt=""></a>
                            <a><img src="/img/logo/telegram.svg" alt=""></a>
                            <a><img src="/img/logo/viber.svg" alt=""></a>
                        </div>
                    </div>
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
                        <p><a href="home.html">Главная</a></p>
                        <p><a href="#about_us">О нас</a></p>
                        <p><a href="#delivery">Доставка и оплата</a></p>
                        <p><a href="/catalog.php">Каталог</a></p>
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
<script src="sait/js/menu.js"></script>
</body>
</html>