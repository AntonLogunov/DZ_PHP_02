<?php
$selector1 = $_POST['selector1'];
$selector2 = $_POST['selector2'];
$selector3 = $_POST['selector3'];
echo $selector1.".".$selector2.".".$selector3." - ";
$arrayDays =  array(
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"   
);
echo $arrayDays[date("l",mktime(0,0,0,$selector1,$selector2,$selector3))];