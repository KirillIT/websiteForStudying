<?php
date_default_timezone_set("Europe/Moscow");
$last = $_COOKIE["last"] ?? "никогда";
setcookie("last", date('Y-m-d H:i:s'), time()+3600*12*24*30);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" content="index, follow"/>
    <title>Чуркин Кирилл</title>
</head>
<body background="bg.png">

<script src="/path/to/js.cookie.js"></script>
<div style="text-align: center;">

    <a href="index.php"><p><font size="8"><span style="color: #f5f5f5; ">На главную</span></font></p></a>
    <p><font size="6"><span style="color: #f5f5f5; ">Об авторе</span></font></p>

    <p><span style="color: #f5f5f5; ">Всем привет!</span></p>
    <p><span style="color: #f5f5f5; ">Меня зовут <i>Чуркин Кирилл Алексадрович</i>.</span></p>
    <p><span style="color: #f5f5f5; ">Мне <i>18 лет</i>. Я родился в Воронеже <i>в 2003 году</i>.</span></p>
    <p><span style="color: #f5f5f5; ">Получил среднее общее образование <i>в Лицее №65</i>.</span></p>
    <p><span style="color: #f5f5f5; "><i>В 2021 году</i> поступил в <i>Воронежский государственный университет</i>, в котором сейчас и обучаюсь.</span></p>
    <div id ="slider"><img scr =""></div>
    <script >

        const images = ['mainPhoto.jpg', '1.jpg', '2.jpg', '3.jpg'];

        const slider = document.querySelector('#slider');

        const img = slider.querySelector('img');

        img.width = 280;

        img.height = 360;
        img.alt = "Тут везде есть я!";
        img.title = "Тут везде есть я!";

        let i = 1;

        img.src = images[0];

        window.setInterval(function (){

            img.src = images[i];

            i++;

            if (i == images.length){

                i = 0;
            }

        }, 1500);

    </script>

    <p><font size="6"><span  style="color: #f5f5f5; ">Мои социальные сети</span></font></p>
    <a href="https://vk.com/badboykirill"><p><span style="color: #f5f5f5; ">ВКонтакте</span></p></a>
    <a href="https://www.instagram.com/badboynamekirill/"><p><span style="color: #f5f5f5; ">Инстаграм</span></p></a>

    <p><font size="6"><span  style="color: #f5f5f5; ">Интересные ссылки (по моему мнению)</span></font></p>
    <a href="https://vk.com/oxxxymiron"><p><span style="color: #f5f5f5; ">Оксимирон во ВКонтакте (группа артиста)</span></p></a>
    <a href="https://www.youtube.com/playlist?list=PLQOaTSbfxUtCrKs0nicOg2npJQYSPGO9r"><p><span style="color: #f5f5f5; ">Хороший бесплатный курс по языку C++</span></p></a>


    <h1><span style="color: #f5f5f5; ">
                                Последний раз вы заходили на сайт <?php echo $_COOKIE["last"];
            ?>
    </span></h1>

    <form name = "text" action="check.php" method="get">
        <input type="submit" name="submit" value="Удалить данные о времени посещения сайта">
    </form>




    <br>
    <font size="10"> <a href="mailto:newlifekirill@mail.ru" target="_blank" rel="noopener noreferrer">Напишите мне письмо: newlifekirill@mail.ru</a></font>



</div>


</body>
</html>