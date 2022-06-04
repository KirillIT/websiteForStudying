<!DOCTYPE html>
<html lang="ru">

<body background="bg.png">
<div style="text-align: center;" >
    <font size="8">
        <a href="index.php"><p><font size="8"><span style="color: #f5f5f5; ">На главную</span></font></p></a>

        <?php


        $data=$_POST['data'];
$fopen = fopen('data.txt', ' ');
fputs ($fopen, $data);
fclose ($fopen);

$info = explode(" ", $data);
$max = -10000000000000000;
$min = 1000000000000000;

$length = count($info);
        $connect = mysqli_connect('localhost', 'a0678543_root','root','a0678543_crud');
        if(!$connect){die('Error connect to database!');}
foreach ($info as $value) {

    $crud = mysqli_query($connect, "INSERT INTO `crud` (`id`, `value`) VALUES (NULL, '$value')");
    if ($value > $max) {
        $max = $value;
    }
    if ($value< $min) {
        $min = $value;
    }

}
foreach ($info as &$int) {
    $color = $int === $min ? 'lime' : ($int === $max ? 'red' : 'white');
    echo "<span style='color:$color;' >$int</span>
";
}

?>
    </div>
</body>
</html>