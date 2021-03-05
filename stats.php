<?php
include 'db.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <title>Страница регистрации</title>
</head>
<h2>Статистика</h2>

<table style="border: 1px solid silver;">

<tr>
    <td style="border: 1px solid silver;">Уникальных посетителей</td>
    <td style="border: 1px solid silver;">Просмотров</td>
    <td style="border: 1px solid silver;">Первое посещение из</td>
</tr>

<?php
    $res = mysqli_query($db, "SELECT * FROM `ips`");

    // Формируем вывод строк таблицы в цикле
	while ($row = mysqli_fetch_assoc($res))
    {
        echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['ip_address'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['views'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['otkyda'] . '</td>
			 </tr>';
	}
?>
</table>
</html>