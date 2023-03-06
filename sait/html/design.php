<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/basket.css">
    <link rel="stylesheet" href="../css/design.css">
    <title>Basket</title>
</head>
<body>

<div>
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

<script src="design.js"></script>
</body>
</html>