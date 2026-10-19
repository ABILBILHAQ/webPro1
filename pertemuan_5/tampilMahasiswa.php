<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Mahasiswa</title>
</head>
<body>
    <?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jeniskel = $_POST['jeniskel'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    echo "NIM: $nim <br>";
    echo "Nama: $nama <br>";
    echo "Kelas: $kelas <br>";
    echo "Jenis Kelamin: $jeniskel <br>";
    echo "Prodi: $prodi <br>";
    echo "Alamat: $alamat <br>";
    ?>
    <a href="formInputMahasiswa.php">Input data lagi</a>
</body>
</html>