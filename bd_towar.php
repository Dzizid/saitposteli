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