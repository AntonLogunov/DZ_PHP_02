<?php
$date = $_POST['date'];
$date = strtotime($date);
$dateArray = getdate($date);

if (($dateArray['mon'] == 3 && ($dateArray['mday'] >= 21 && $dateArray['mon'] <= 31)) || ($dateArray['mon'] == 4 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 20)))
echo("Овен");
else if (($dateArray['mon'] == 4 && ($dateArray['mday'] >= 21 && $dateArray['mday'] <= 30)) || ($dateArray['mon'] == 5 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 20)))
echo("Телец");           
else if (($dateArray['mon'] == 5 && ($dateArray['mday'] >= 21 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 6 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 20)))
echo("Близнецы");           
else if (($dateArray['mon'] == 6 && ($dateArray['mday'] >= 21 && $dateArray['mday'] <= 30)) || ($dateArray['mon'] == 7 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 22)))
echo("Рак");            
else if (($dateArray['mon'] == 7 && ($dateArray['mday'] >= 23 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 8 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 22)))
echo("Лев");            
else if (($dateArray['mon'] == 8 && ($dateArray['mday'] >= 23 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 9 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 22)))
echo("Дева");            
else if (($dateArray['mon'] == 9 && ($dateArray['mday'] >= 23 && $dateArray['mday'] <= 30)) || ($dateArray['mon'] == 10 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 22)))
echo("Весы");            
else if (($dateArray['mon'] == 10 && ($dateArray['mday'] >= 23 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 11 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 21)))
echo("Скорпион");            
else if (($dateArray['mon'] == 11 && ($dateArray['mday'] >= 22 && $dateArray['mday'] <= 30)) || ($dateArray['mon'] == 12 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 21)))
echo("Стрелец");            
else if (($dateArray['mon'] == 12 && ($dateArray['mday'] >= 22 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 1 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 19)))
echo("Козерог");            
else if (($dateArray['mon'] == 1 && ($dateArray['mday'] >= 20 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 2 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 18)))
echo("Водолей");           
else if (($dateArray['mon'] == 2 && ($dateArray['mday'] >= 19 && $dateArray['mday'] <= 31)) || ($dateArray['mon'] == 3 && ($dateArray['mday'] > 0 && $dateArray['mday'] <= 20)))
echo("Рыбы");