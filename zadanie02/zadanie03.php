<?php
$date = $_GET['date'];
$date = strtotime($date);
$dateArrray = getdate($date);
$res = ($dateArrray['mday'].' '.$dateArrray['weekday']);
echo $res;