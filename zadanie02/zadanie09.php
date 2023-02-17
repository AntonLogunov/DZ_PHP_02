<?php
$text = $_POST['text'];
$textNonSpace = str_replace(array(" "), '', $text);
echo "Количество символов: ", mb_strlen($text, 'utf-8');
echo '<br>', "Количество символов без пробелов: ", mb_strlen($textNonSpace, "utf-8");

for ($i = 192; $i < 256; $i ++){ 
    $abc = chr($i);
}
$abc = iconv('cp1251', 'utf-8', $abc);
echo '<br>', "Количесиво слов: ", str_word_count($text,0, $abc);