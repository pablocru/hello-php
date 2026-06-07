<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Calculadora</title>
</head>
<body>
    <?php
        $n1=$_POST["op1"];
        $operand=$_POST["operand"];
        $n2=$_POST["op2"];

        switch ($operand) {
            case "+": $res=$n1+$n2; break;
            case "-": $res=$n1-$n2; break;
            case "*": $res=$n1*$n2; break;
            case "/": 
                if($n2 != 0) $res=$n1/$n2;
                else $res="error";
                break;
            default: $res="error";
        }

        echo "$n1 $operand $n2 = $res";
    ?>
</body>
</html>