<html>
<head><title> Сведения о Кинозалах </title></head>
<body>
<h2>Сведения о Кинозалах:</h2>
<table border="1">
    <tr>
        <th>id Зала</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
</tr>
<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
$result = mysqli_query($link, "SELECT id_zal, name_z, cat_z FROM zal"); // запрос на выборку сведений о пользователях
mysqli_select_db($link, "users");

while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['id_zal'] . "</td>";
    echo "<td>" . $row['name_z'] . "</td>";
    echo "<td>" . $row['cat_z'] . "</td>";
    echo "<td><a href='edit_zal.php?id_zal=" . $row['id_zal']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    echo "<td><a href='delete_zal.php?id_zal=" . $row['id_zal']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего Залов: $num_rows </p>");
?>
<p><a href="new_zal.php"> Добавить Кинозал </a>
<p><a href="index.php"> Вернуться назад </a>
</body>
</html>