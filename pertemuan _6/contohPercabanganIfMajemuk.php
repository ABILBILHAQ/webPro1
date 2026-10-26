<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai= 90;
    if (($nilai >= 0) && ($nilai < 50)){
        $grade = "E";
    }
    else if (($nilai >=50) && ($nilai < 60)){
        $grade = "D";
    }
    else if (($nilai >=60) && ($nilai < 70)){
        $grade = "C";
    }
    else if (($nilai >=70) && ($nilai < 80)){
        $grade = "B";
    }
    else if (($nilai >=80) && ($nilai <= 100)){
        $grade = "A";
    }
    else{
        $grade = "Nilai anda diluar jangkauan";
    }
    echo "Nilai anda : $nilai, dikonversi menjadi $grade";
    ?>
</body>
</html>