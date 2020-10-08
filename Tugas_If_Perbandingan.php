<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 6;
    $b = 10;

    if ($a < $b) {
        echo $a, " Lebih Kecil Dari ", $b;
    } else if ($a > $b) {
        echo $a, " Lebih Besar Dari ", $b;
    } else if ($a == $b) {
        echo $a, " Sama Dengan ", $b;
    }

    ?>
</body>

</html>