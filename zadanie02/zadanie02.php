<?php
$date = $_GET['date'];
if($date % 400 == 0 || $date % 4 == 0 && $date % 100 != 0) print("Год весокосный");
else print("Год не весокосный");