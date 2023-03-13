<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="sait/js/basket.js"></script>
    <title>Document</title>
</head>
<body>



<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', "postelibell");
$query = "SET NAMES UTF8";
$mysqli->query($query);

$action = $_POST["action"];
if ($action == 'show') {
    if (!(isset($_SESSION['cart']))) {
        echo 'У вас нет заказов';
        exit();
    };
    $cart = $_SESSION['cart'];
    if (count($cart) == 0) {
        echo 'У вас нет заказов';
        exit();
    }

    echo '<div class="top" id="in_check">
                <h3 class="start">Товар</h3>
                <h3 class="center">Цена</h3>
                <h3 class="end">Количество</h3>
            </div>
            <hr>';

    for ($i = 0; $i < count($cart); $i++) {
        $idProduct = $cart[$i]["idProduct"];
        $query = 'SELECT * FROM Towar WHERE id = ' . $cart[$i]["idProduct"] . '';
        $results = $mysqli->query($query);
        while ($row = $results->fetch_assoc()) {
            echo '<div class="basket_product in-check" id="in-check">
                        <div class="basket_product_one">
                            <div class="img_wost">
                                <img src="'. $row['img'] .'" alt="">
                            </div>

                            <div class="menu_one">
                                <div class="menu_one_top">
                                    <h2>'. $row['type'] .'</h2>
                                    <h4>'. $row['name'] .'</h4>

                                    <h5>Размер и количество</h5>
                                </div>
                                <div class="info_text">
                                    <div class="info_text_left">
                                        <h3>Простынь</h3>
                                        <h3>Пододеяльник</h3>
                                        <h3>Наволочка</h3>
                                        <h3>Материал</h3>
                                    </div>

                                    <div class="info_text_left">
                                        <p>'. $row['sheet'] .'</p>
                                        <p>'. $row['duvetcover'] .'</p>
                                        <p>70*70, 2 шт</p>
                                        <p>'. $row['textile'] .'</p>
                                    </div>
                                </div>
                            </div>

                        <div class="praise">
                            <h1>'. $row['price'] .' ₽</h1>
                        </div>

                        <div class="all">
                            <img src="img/logo/minus.png" alt="">
                            <h2>1</h2>
                            <img src="img/logo/plus.png" alt="">
                        </div>
                    </div>
                    <hr>
                </div>
                
                <div class="container_basket_product_mobile">
                <div class="element_mobile_basket">
                <div class="mobile_basket">
                    <div class="img_mobile_basket">
                    <img src="'. $row['img'] .'" alt="">
                    </div>
                    <div class="mobile_basket_info">
                            <h2>'. $row['type'] .'</h2>
                        <div class="number_basket">
                            <h3>'. $row['name'] .'</h3>
                            <select class="mobile_select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="info_basket">
                        <h4>Размер и количество</h4>
                            <div class="info_text">
                                <div class="info_text_left">
                                    <h3>Простынь</h3>
                                    <h3>Пододеяльник</h3>
                                    <h3>Наволочка</h3>
                                    <h3>Материал</h3>
                                </div>

                                <div class="info_text_left">
                                    <p>'. $row['sheet'] .'</p>
                                    <p>'. $row['duvetcover'] .'</p>
                                    <p>70*70, 2 шт</p>
                                    <p>'. $row['textile'] .'</p>
                                </div>
                            </div>
                            <div class="basket_click">
                                <h4>Цена:</h4>
                                <p>'. $row['price'] .' ₽</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr_mobile">
            </div>
            </div>'
            ;
        }
    }
}

if ($action == 'add') {
    $cart = $_SESSION['cart'];

    $id = $_POST['id'];

    $newProduct["idProduct"] = $id;

    $cart[count($cart)] = $newProduct;

    $_SESSION['cart'] = $cart;
}

if ($action == 'del') {
    $id = $_POST["id"];
    $newCart = array();

    $cart = $_SESSION['cart'];
    for ($i = 0; $i < count($cart); $i++) {
        $idProduct = $cart[$i]["idProduct"];
        if ($id != $idProduct) {
            $newCart[count($newCart)] = $cart[$i];
        }
    }
    $_SESSION['cart'] = $newCart;
}

echo            '<div class="summ">
                    <p>Сумма: 14800 ₽</p>
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
                </div>';

?>


</body>
</html>













