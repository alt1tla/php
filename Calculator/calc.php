<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'];
    if (preg_match("/^[0-9\+\-\*\/\.\(\)]+$/", $expression)) {
        $result = calculateExpression($expression); 
        echo $result; 
    } else if ($expression == '') {
        echo 'None';
    }
    else {
        echo 'Error calc';
    }
}

function calculateExpression($expression) {
    $expression = str_replace(' ', '', $expression);
    return calculateAdditionAndSubtraction($expression);
}

function calculateAdditionAndSubtraction(&$expression) {
    $result = calculateMultiplicationAndDivision($expression);
         
    while (strlen($expression) > 0) {
        $operator = $expression[0];
        
        if ($operator == '+' || $operator == '-') {
            $expression = substr($expression, 1);
            $num2 = calculateMultiplicationAndDivision($expression);

            if ($operator == '+') {
                $result += $num2;
            } elseif ($operator == '-') {
                $result -= $num2;
            }
        } else {
            break;
        }
    }

    return $result;
}
function calculateMultiplicationAndDivision(&$expression) {
    $result = calculateNumber($expression);

    while (strlen($expression) > 0) {
        $operator = $expression[0];

        if ($operator == '*' || $operator == '/') {
            $expression = substr($expression, 1);
            $num2 = calculateNumber($expression);
            if ($operator == '*') {
                $result *= $num2;
            } elseif ($operator == '/') {
                if ($num2 == 0) {
                    $result = 'Division by zero!';
                } else {
                    $result /= $num2;
                }
            }
        } else {
            break;
        }
    }

    return $result;
}

function calculateNumber(&$expression) {
    $number = "";
    if ($expression[0] == "(") {
        $expression = substr($expression, 1);
        $number = calculateAdditionAndSubtraction($expression);
        $expression = substr($expression, 1); 
    } else {
        while (strlen($expression) > 0 && (is_numeric($expression[0]) || $expression[0] == '.')) {
            $number .= $expression[0];
            $expression = substr($expression, 1);
        }
        $number = floatval($number);
    }

    return $number;
}
?>