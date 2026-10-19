<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tampilRegister.php" method="post">
        <p>Nama: <input type="text" name="nama" size="25"></p>
        <P>Alamat: <input type="text" name="alamat" size="25"></P>
        <p>tempat lahir: <input type="text" name="tempatLahir"></p>
        <p>tanggal lahir: <input type="date" name="tanggalLahir" id="tanggalLahir"></p>
        <p>jenis kelamin: 
            <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jeniskel" value="perempuan">Perempuan
        </p>
        <p>Pendidikan : 
            <select name="prodi" id="pendidikan">
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select></p>
        <p><input type="submit" value="kirim">
        <input type="reset" value="hapus"></p>
    </form>
</body>
</html>