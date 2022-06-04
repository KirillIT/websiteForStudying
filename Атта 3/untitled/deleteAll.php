<!DOCTYPE html>
<html lang="ru">

<body background="bg.png">
<div style="text-align: center;" >
    <font size="8">
<a href="index.php"><p><font size="8"><span style="color: #f5f5f5; ">На главную</span></font></p></a>
        <a ><p><font size="6"><span style="color: #f5f5f5; ">Удаление данных из БД прошло успешно</span></font></p></a>

<?php

 $connect = mysqli_connect('localhost', 'a0678543_root','root','a0678543_crud');
        if($connect->connect_error){
            die("Ошибка: " . $connect->connect_error);
        }

$products = mysqli_query($connect, "SELECT * FROM `crud`");
$row = mysqli_fetch_array($products);
$inc = $row["id"];
do
{
    mysqli_query($connect, "DELETE FROM `crud` WHERE `crud`.`id` = '$inc'");
    $inc++;
}
while($row = mysqli_fetch_array($products));
?>
  </div>
</body>
</html>