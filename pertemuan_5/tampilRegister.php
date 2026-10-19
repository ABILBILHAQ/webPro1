<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jeniskel = $_POST['jeniskel'];
    $prodi = $_POST['prodi'];
    echo "Nama: $nama <br>";
    echo "Alamat: $alamat <br>";
    echo "Tempat Lahir: $tempatLahir <br>";
    echo "Tanggal Lahir: $tanggalLahir <br>";
    echo "Jenis Kelamin: $jeniskel <br>";
    echo "Pendidikan: $prodi <br>";
    ?>
</body>
</html>