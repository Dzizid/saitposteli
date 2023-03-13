<?php

$sql = "SELECT * FROM Towar";
if ($result = $conn->query($sql)) {
foreach ($result as $row) {

$productid = $row["id"];
$productname = $row["name"];
$productprice = $row["price"];
$producttextile = $row["textile"];
$producttype = $row["type"];
$productimg = $row["img"];

echo '<div class="catalog_element_one catalog_element box">
    <img src="'. $productimg .'" alt="">

    <div>
        <div class="info_element">
            <div class="info_left">
                <p class="info_left">'. $producttype .'</p>
            </div>
            <div class="info_right">
                <p>'. $producttextile .'</p>
            </div>
        </div>
        <div class="info_element">
            <div class="info_element_left_bar">
                <h2>'. $productname .'</h2>
                <h3>'. $productprice .' ₽</h3>
            </div>
            <div class="info_element_right_bar">
                <p><a href="cart.php?id='. $productid .'">Подробнее</a></p>
            </div>
        </div>
    </div>
</div>
';
    }
        }

$conn->close();

?>