<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Do-While</title>
</head>
<body>
    <?php
    $jumlah = 1;
    do{
        echo("<option value ='" . $jumlah. "'>". $jumlah. "</option>");
        $jumlah++;
    } while($jumlah <= 31);
    ?>
</body>
</html>