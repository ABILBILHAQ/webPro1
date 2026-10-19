<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses data mahasiswa</title>
</head>
<body>
    <?php
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    echo "Nama Anda: $nama <br>";
    echo "Email Anda: $email";
    ?>
</body>
</html>