<html>
<head>
    <meta charset="utf-8" />
</head>
<body background="bg.png">

<a align="center" href="index.php"><p><font size="8"><span style="color: #f5f5f5; ">На главную</span></font></p></a>

<p align="center"><strong><font color="white" size = '5'>Поиск минимума и максимума среди чисел массива</font></strong></p>
<p align="center"><font color = "white" size = "5">Программа получает на вход некоторое количество чисел. После обработки массива данных максимальное из них выделяется <font color = "red">красным</font> цветом, а минимальное - <font color = "lime">зелёным</font>.</font></size></p>
<p align = "center"><font size = "5" color = "white">Пример реализации приложения: </font></p>

<p align = "center"><font size = "5" color = "white">162 15 1000 <font color = "lime">7</font> 993 228 322 69 <font color = "red">1984</font></font></p>
<form action="maxmin2.php" method="post">
    <p align="center"><font color="white" size = '5'>Ваш массив чисел <input type="text" name="data" /><br />
    <p align="center"><strong><font color="white" size = '5'>Также введённые числа запишутся в базу данных</font></strong></p>
    <p align="center">
    <input type="submit" value="Выделить минимум и максимум и внести данные в БД" /></p>
</form>


<a align="center"><font size="8">
        <body>
        <style>
            th, td{padding:10px;
                }
            th{
                background: #606060;
                color: #fff;

            }
            td{
                background: #b5b5b5;

            }
            </style>
        <div align="center">
            <a align="center">База данных<font size="8">

                <?php
        $conn = mysqli_connect('localhost', 'a0678543_root','root','a0678543_crud');
        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM `crud` ORDER BY `crud`.`id` ASC";
        if($result = $conn->query($sql)){
            echo "<table><tr><th>Значение</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row["value"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
        ?>
        </body>

    </font></a>
</div>


<a align="center"><font size="8">
        <body>
        <style>
            th, td{padding:10px;}
            th{

                background: #606060;
                color: #fff;


            }
            td{
                background: #b5b5b5;
            }
        </style>
        <div align="center">
            <a align="center">После сортировки<font size="8">

                    <?php
                    $conn = mysqli_connect('localhost', 'a0678543_root','root','a0678543_crud');
                    if($conn->connect_error){
                        die("Ошибка: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM `crud` ORDER BY `crud`.`value` DESC";
                    if($result = $conn->query($sql)){
                        echo "<table ><tr><th>Значение</th></tr>";
                        foreach($result as $row){
                            echo "<tr>";
                            echo "<td>" . $row["value"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        $result->free();
                    } else{
                        echo "Ошибка: " . $conn->error;
                    }
                    $conn->close();
                    ?>
        </body>

    </font></a>
</div>

<form action="deleteAll.php" method="post">
    <p align="center">
    <input type="submit" value="Удалить всё из БД" /></p>
</form>
</body>
</html>