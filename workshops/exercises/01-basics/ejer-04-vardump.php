<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $ejTitle="Ejercicio 4";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$ejTitle";
    ?></title>
</head>
<body>
    <?php
        echo "$ejTitle<br>"; 

        // Esta variable indica mi nombre
        $nombre="Pablo";
        // Esta variable indica mi edad
        $edad=27;

        echo "Información de la variable \"nombre\": <br>";
        echo var_dump($nombre), "<br>";
        echo "Contenido de la variable: $nombre <br>";

        $nombre=null;
        echo "Después de asignarle un valor nulo: ", var_dump($nombre);
    ?>
</body>
</html>