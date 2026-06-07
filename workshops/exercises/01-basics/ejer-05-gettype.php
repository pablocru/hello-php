<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 5</title>
</head>
<body>
    <?php
        $temporal="Pablo";
        echo "La variable temporal es de tipo: ", gettype($temporal), "<br>";

        $temporal=3.14;
        echo "La variable temporal es de tipo: ", gettype($temporal), "<br>";

        $temporal=false;
        echo "La variable temporal es de tipo: ", gettype($temporal), "<br>";
        
        $temporal=3;
        echo "La variable temporal es de tipo: ", gettype($temporal), "<br>";
        
        $temporal=null;
        echo "La variable temporal es de tipo: ", gettype($temporal), "<br>";
    ?>
</body>
</html>