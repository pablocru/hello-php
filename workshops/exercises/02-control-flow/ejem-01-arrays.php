<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Arrays</title>
</head>
<body>
    <?php
        $a=array(0=>8, 1=>9);

        $title="Lista de numeros usando";

        echo "$title for:<br>";
        for($i=0; $i < count($a); ++$i) {
            echo $a[$i], "<br>";
        }

        echo "<br>";
        
        echo "$title foreach:<br>";
        foreach($a as $num) {
            echo $num, "<br>";
        }
    ?>
</body>
</html>