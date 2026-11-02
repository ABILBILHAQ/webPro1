<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>

    <?php
    $nim = array(
        "17250049", "17250072", "17250199", "17250206",
        "17250232", "17250278", "17250323", "17250313",
        "17250371", "17250374", "17250400", "17250439",
        "17250561", "17250571", "17250513", "17250654"
    );

    $nama = array(
        "Adriyan Sahpitran",
        "Widya Putri Rahayu",
        "Ridho Firmansyah",
        "Rangga Aji Pramudya",
        "Fernando Hasudungan Siregar",
        "Duta Arrasyid",
        "Glen Justin Maringan Simarmata",
        "Renal Ali Syahid",
        "Arla Maulana Eza Nugraha",
        "Kevin Nabil Noor Rahman",
        "Ahmad Fauzan Rizki",
        "Ahmad Abu Jihad Bilhaq",
        "Intan Purnamasari",
        "Abdillah",
        "Sefti Jikas Mu’afari",
        "Ali Muslih Alfauzan"
    );

    $kelas = "17.3A.03";

    foreach ($nim as $i => $nim) {
        echo $nim. " " .$nama[$i]. " " .$kelas."<br>";
    }
    ?>
</body>
</html>