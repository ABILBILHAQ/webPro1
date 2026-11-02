<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh While</title>
</head>
<body>
    <?php
    $jumlah = 1;
    while($jumlah <= 31){
        echo("<option value ='". $jumlah. "'>". $jumlah. "</option>");
        $jumlah++;
    }
    ?>
</body>
</html>