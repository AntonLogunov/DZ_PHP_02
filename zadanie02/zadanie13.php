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
    $questionPOST = $_POST['question'.$counter];
    $questionText = $questionArray['Вопрос'];
    $answer = $questionPOST;
    $corAnswer = $questionArray['Ответ'];
    $isCurrect = ($answer == $corAnswer)? true:false;
    $color = $isCurrect?'green':'red';
    if($isCurrect){
        echo "
        <div>
            <p>$qu</p>
            <p>$questionText</p>
            <p style='background-color:$color;'>Ответ: $answer - верен!</p>
        </div>
        ";
        $counter++;
    }
    else if(!$isCurrect){
        echo "
        <div>
            <p>$qu</p>
            <p>$questionText</p>
            <p style= 'background-color:$color;'>Ответ: $answer - неверен!</p>
            <p style= 'background-color:green;'>Правильный ответ: $corAnswer!</p>
        </div>
        ";
        $counter++;
    }
}


