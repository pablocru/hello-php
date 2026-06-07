<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
        function producto ($n1, $n2){
            return $n1*$n2;
        }

        $n1=5;
        $n2=7;

        echo "El producto de $n1 y $n2 es ", producto ($n1, $n2);
    ?>
</body>
</html>