<?php

require_once 'сonnection.php';
$productid = $_GET['id'];
$product = mysqli_query($conn, "SELECT * FROM `Towar` WHERE `id` = '$productid'");
$product = mysqli_fetch_assoc($product);
echo '

<div class="card">
    <div class="all_card">
        <div class="top_card">
            <div class="img_card">
                <img src="'. $product['img'] .'" alt="">
            </div>

            <div class="info_card">
                <h1>'. $product['name'] .'</h1>
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
                            <p>'. $product['density'] .'</p>
                            <p>'. $product['textile'] .'</p>
                            <p>'. $product['clasptype'] .'</p>
                        </div>

                        <div class="info info_right">
                            <h3>Простынь</h3>
                            <h3>Пододеяльник</h3>
                            <h3>Наволочка</h3>
                        </div>

                        <div class="info_text_right">
                            <p>'. $product['sheet'] .'</p>
                            <p>'. $product['duvetcover'] .'</p>
                            <p><form action="select1.php" method="post">
                                <select class="select_od" name="" id="">
                                    <option value="">50*70, 2шт</option>
                                    <option value="">70*70, 2шт</option>
                                </select>
                            </form></p>
                        </div>
                    </div>
                    <div class="basket">
                        <a href="?card=products&action=add&id=' . $product['id'] . ' " data-id = "' . $product['id'] . '"><h3>В корзину</h3></a>
                        <div class="price">
                            <h4>Цена:</h4>
                            <p>'. $product['price'] .'</p>
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


<!-- мобилка -->
<div class="card_mobile">
    <div class="card_mobile_wi">
        <div class="">
            <h1>'. $product['name'] .'</h1>
            <div class="mobile_name">
                <img src="'. $product['img'] .'" alt="">
            </div>

            <div class="">

                <div class="shop_basket">
                    <div class="basket_h">
                        <h3>В корзину</h3>
                    </div>
                    <div class="many">
                        <h4>Цена:</h4>
                        <p>'. $product['price'] .' ₽</p>
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
                            <p>'. $product['density'] .'</p>
                            <h3>Материал</h3>
                            <p>'. $product['textile'] .'</p>
                            <h3>Тип застежки</h3>
                            <p>'. $product['clasptype'] .'</p>
                        </div>

                        <div class="info_right_mobile">
                            <h3>Простынь</h3>
                            <p>'. $product['sheet'] .'</p>
                            <h3>Пододеяльник</h3>
                            <p>'. $product['duvetcover'] .'</p>
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

'

?>