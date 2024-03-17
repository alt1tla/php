<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'];

    if (preg_match("/^[0-9\+\-\*\/\(\) \s\t\.\^sin\(\)\^cos\(\)\^tan\(\)^asin\(\)]+$/", $expression)) {
        $result = calculateExpression($expression);
        echo $result;
    } else {
        echo 'Ошибка: Неверное выражение.';
    }
}


function calculateExpression($expression) {
    eval('$result = ' . $expression . ';');
    return $result;
}
?>