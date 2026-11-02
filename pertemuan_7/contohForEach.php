<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh For Each</title>
</head>
<body>
    <?php
    $nama = array("Andi", "Budi", "Citra", "Dewi", "Eka");
    echo "<form name=form1 method=post";
    echo "Nama";
    echo "<select name=nama>";
    foreach($nama as $nama){
        echo "$nama <br>";
    }
    echo "</select>";
    echo "</form>";
    ?>
</body>
</html>