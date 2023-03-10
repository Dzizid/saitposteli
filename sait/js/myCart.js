function addToCart(id) {
    console.log('add' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "ajax/cart.php",
        dataType: "text",
        data: 'action=add&id=' + id,
        error: function () {
            alert("Не смог");
        },
        success: function (response) {
            alert('Добавили ' + id);
        }
    });
}

function showMyCart() {
    console.log('show ');
    $.ajax({
        async: false,
        type: "POST",
        url: "ajax/cart.php",
        data: "action=show",
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при выводе в корзину");
        },
        success: function (response) {
            $('#in-check').html(response);
        }
    });
}

function delFromCart(id) {
    console.log('del' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "ajax/cart.php",
        data: 'action=del&id=' + id,
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при удалении товара");
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}