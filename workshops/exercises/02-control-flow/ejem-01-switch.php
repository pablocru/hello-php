<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $codigo=1;

        // Es un ejemplo, pero se que no tiene ningun sentido el siguiente codigo
        $msg="Has seleccionado el";
        switch ($codigo) {
            case 0: echo "$msg 0"; break;
            case 1: echo "$msg 1"; break;
            case 2: echo "$msg 2"; break;
            case 3: echo "$msg 3"; break;
            default: echo "$msg $codigo";
        }
    ?>
</body>
</html>