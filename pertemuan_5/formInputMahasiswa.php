<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
    <style>
        body{
            background-color: aquamarine;
            text-align: center;
        }

        .jeniskelamin{
            text-align: center;
        }

    </style>    
</head>
<body>
    <form action="tampilMahasiswa.php" method="post">
        <b>input data mahasiswa</b>
        <p>NIM : <input type="text" name="nim" size="25" maxlength="50"></p>
        <p>Nama : <input type="text" name="nama" size="25" maxlength="50"></p>
        <p>Kelas: <input type="text" name="kelas" size="25" maxlength="50"></p>
        <p class="jeniskelamin">jenis kelamin: 
            <input type="radio" name="jeniskel" value="laki-laki">Laki-Laki</p>
            <input type="radio" name="jeniskel" value="perempuan">Perempuan</p>
        <p>jurusan: 
            <select name="prodi" id="jurusan">
                <option value="">--Pilih Jurusan--</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
            </select></p><br>
        <p>Alamat: <input type="text" name="alamat" cols="25" rows="10"></p>
        <p>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
        </p>
        </p>
    </form>
</body>
</html>