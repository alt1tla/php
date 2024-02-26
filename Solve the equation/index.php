<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veronika Gerdzhikova 231-322</title>
</head>
<body>
    <?php
        $number = "27-x=17";
        echo 'Уравнение: '.$number;
        $part =  explode("=", $number);
        $left = $part[0];
        $right = $part[1];

        if (strpos($left,'-') !== false){
            $operator = '-';
        } else if (strpos($left,'+') !== false){
            $operator = '+';
        } else if (strpos($left,'*') !== false){
            $operator = '*';
        } else if (strpos($left,'/') !== false){
            $operator = '/';
        }

        echo '<br>';
        $oper =  explode($operator, $left);
        if (is_numeric($oper[0])){
            $num = $oper[0];
            if ($operator=='-'){
                echo 'x = '.(-1)*($right-$num);
            } else if ($operator=='+'){
                echo 'x = '.(-1)*($right+$num);
            } else if ($operator=='*'){
                echo 'x = '.($right/$num);
            } else if ($operator=='/'){
                echo 'x = '.($num/$right);
            }
            
            
            
        } else {
            $num = $oper[1];
            $x = $oper[0];
            if ($operator=='-'){
                echo 'x = '.($right-$num);
            } else if ($operator=='+'){
                echo 'x = '.($right+$num);
            } else if ($operator=='*'){
                echo 'x = '.($right/$num);
            } else if ($operator=='/'){
                echo 'x = '.($right*$num);
            }
        }
    ?>
</body>
</html>