<?php
$date = $_GET['date'];
$dateD = "12.12.2023";
$d1 = strtotime($date);
$d2 = strtotime($dateD);
$result = $d2 - $d1;
$result = $result/(60*60*24*365);
$years = Floor($result);
echo $years;