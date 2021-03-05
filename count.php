<?php
include 'db.php';
include 'robot.php';

$a = $_SERVER['HTTP_REFERER'];
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$current_ip = mysqli_query($db, "SELECT `ip_id` FROM `ips` WHERE `ip_address`='$visitor_ip'");


if (mysqli_num_rows($current_ip) == 1 && !is_bot())
{
    // Добавляем для текущей даты +1 просмотр (хит)
    mysqli_query($db, "UPDATE `ips` SET `views`=`views`+1 WHERE `ip_address`='$visitor_ip' ");
}

// Если такого IP-адреса еще не было (т.е. это уникальный посетитель)
else
{
    // Заносим в базу IP-адрес этого посетителя
    mysqli_query($db, "INSERT INTO `ips` SET `ip_address`='$visitor_ip',`views`=1 , otkyda ='$a' ");


    //mysqli_query($db, "UPDATE `visits` SET `hosts`=`hosts`+1,`views`=`views`+1 WHERE `ip_address`='$visitor_ip'");
}
?>
