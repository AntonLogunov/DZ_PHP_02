<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>1 задание</h1>
    <?php
    $realDate = (mktime(0,0,0,10,31,date('Y')));
    $nowDate = (mktime(0,0,0,date("m"),date("d"),date('Y')));
    ?>
    <h3><?php echo (($realDate - $nowDate)/60/60/24) ?></h2>
    
    <h1>2 задание</h1>
    <form action="zadanie02.php" method="GET">
        <label for="date">Введите дату</label><br>
        <input id="date" name="date" type=""><br>
        <input type="submit" value="Отправить"><br>
    </form>

    <h1>3 задание</h1>
    <form action="zadanie03.php" method="GET">
        <label for="date">Введите дату</label><br>
        <input id="date" name="date" type=""><br>
        <input type="submit" value="Отправить"><br>
    </form>

    <h1>4 задание</h1>
    <?php 
        $date = 1418372345;
        $dateArray = getdate($date);
        echo ($dateArray['mday'].' '.$dateArray['month'].' '.$dateArray['year'].' '.' year '.$dateArray['weekday']);
    ?>

    <h1>5 задание</h1>
    <form action="zadanie05.php" method="GET">
        <label for="date">Введите дату</label><br>
        <input id="date" name="date" type=""><br>
        <input type="submit" value="Отправить"><br>
    </form>

    <h1>6 задание</h1>
    <form action="zadanie06.php" method="POST">
        <label for="date">Введите дату</label><br>
        <input id="date" name="date" type=""><br>
        <input type="submit" value="Отправить"><br>
    </form>

    <h1>7 задание</h1>
    <?php
    $holydays = [
        "1.1"=>"С днем студента",
        "23.2"=>"с днем рыбалки",
        "17.2"=>"С днем россии",
        "8.3"=>"с днем города",
        "1.5"=>"с первым мая",
        "9.5"=>"с днем победы",
        "12.6"=>"С днем пива",
        "4.11"=>"С днем рождения",
        "2.4"=>"с днем игр",
        "13.8"=>"с днем мяса"
    ];
    
    if(array_key_exists (date("j.n"),$holydays)){
        $day = $holydays[date("j.n")];
        echo "поздравляем с $day";
    }
    else{
        echo ":(";
    }
    ?> 
    
    <h1>9 задание</h1>
    <form action="zadanie09.php" method="POST">
        <textarea name="text" id="" cols="40" rows="6"></textarea><br>
        <input type="submit" value="Отправить">
    </form>

    <h1>10 задание</h1>
    <form action="zadanie10.php" method="POST">
        <textarea name="text" id="" cols="40" rows="6"></textarea><br>
        <input type="submit" value="Отправить">
    </form>

    <h1>11 задание</h1>
    <form action="zadanie11.php" method="POST">
        <textarea name="text" id="" cols="40" rows="6"></textarea><br>
        <input type="submit" value="Отправить">
    </form>

    <h1>13 задание</h1>
    <form action="zadanie13.php" method="POST">
    <?php
    $question = [
                "Вопрос 1" => [
                    "Вопрос" => "Сколько пальцев?",
                    "Ответ" =>"3"
                ],
                "Вопрос 2" => [
                    "Вопрос" => "это треугольник?",
                    "Ответ" =>"да"
                ],
                "Вопрос 3" => [
                    "Вопрос" => "вы студент?",
                    "Ответ" =>"да"
                ],
                "Вопрос 4" => [
                    "Вопрос" => "ответ?",
                    "Ответ" =>"4"
                ],
                "Вопрос 5" => [
                    "Вопрос" => "какой ответ во 2 вопросе",
                    "Ответ" =>"да"
                ]
            ];
                $counter = 1;
                foreach ($question as $qu => $questionArray) {
                    $questionText = $questionArray['Вопрос'];
                    echo "
                        <div'>
                            <p>$qu</p>
                            <p>$questionText</p>
                            <input type='text' name='question$counter'>
                        </div>
                    ";
                    $counter++;
                }
        ?>
        </form>
        <input type="submit" value="Отправить">
    <h1>14 задание</h1>
    <form action="zadanie14.php" method="POST">
    <label>
        <select name="selector1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <select name="selector2">
            <option value="1">Январь</option>
            <option value="2">Февраль</option>
            <option value="3">Март</option>
            <option value="4">Апрель</option>
            <option value="5">Май</option>
            <option value="6">Июнь</option>
            <option value="7">Июль</option>
            <option value="8">Август</option>
            <option value="9">Сентябрь</option>
            <option value="10">Октябрь</option>
            <option value="11">Ноябрь</option>
            <option value="12">Декабрь</option>
        </select>
        <select name="selector3">
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>
    </label>
    <input type="submit" value="Выделить">
</body>
</html>