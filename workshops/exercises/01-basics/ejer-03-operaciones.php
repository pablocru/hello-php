<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 3</title>
</head>
<body>
    <?php
        $operador1=13;
        $operador2=4;

        echo "Resta: ";
        $resultado=$operador1-$operador2;
        echo "$operador1 - $operador2 = $resultado";
        echo "<br><br>";

        echo "Suma: ";
        $resultado=$operador1+$operador2;
        echo "$operador1 + $operador2 = $resultado";
        echo "<br><br>";

        echo "Multiplicacion: ";
        $resultado=$operador1*$operador2;
        echo "$operador1 * $operador2 = $resultado";
        echo "<br><br>";

        echo "Division: ";
        $resultado=$operador1/$operador2;
        echo "$operador1 / $operador2 = $resultado";
        echo "<br><br>";

        echo "Resto: ";
        $resultado=$operador1%$operador2;
        echo "$operador1 % $operador2 = $resultado";
        echo "<br><br>";
    ?>
</body>
</html>