<?php
$text = $_POST['text'];
$values = array_count_values(mb_str_split(str_replace(' ', '', $text)));
$count = count(mb_str_split(str_replace(' ', '', $text)));
foreach ($values as $key => $value) {
    echo "Символ: - $key - ".round(100/($count/$value),3)."%", "<br>";
}