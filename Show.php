<?php

// Извлекаем и выводим статистику
$res = mysqli_query($db, "SELECT * FROM `ips`");


while ($row = mysqli_fetch_assoc($res)) {
    print_r($row);
    echo "<br>";
}

?>