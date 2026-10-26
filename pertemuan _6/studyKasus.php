<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        jenis kendaraan: 
        <select name="jenis kendaraan" id="jenisKendaraan">
            <option value="motor">motor</option>
            <option value="mobil">mobil</option>
        </select>
        <br>
        lama parkir (jam) :
        <input type="number" name="jam" min="1">
        <br>
        <button type="submit">
            hitung tarif
        </button>
    </form>
    <?php
    if (isset($_POST['hitung'])) {

        $kendaraan = $_POST['kendaraan'];
        $jam = (int) $_POST['jam'];

        if ($kendaraan == "Motor") {
            $jam_pertama = 3000;
            $jam_berikutnya = 2000;
            $tarif_maksimal = 15000;
            $tarif_inap = 20000;
        } else {
            $jam_pertama = 5000;
            $jam_berikutnya = 3000;
            $tarif_maksimal = 30000;
            $tarif_inap = 50000;
        }

        $jumlah_inap = intdiv($jam, 24);
        $sisa_jam = $jam % 24;

        $biaya_inap = $jumlah_inap * $tarif_inap;

        if ($sisa_jam > 0) {
            $biaya_sisa = $jam_pertama;

            if ($sisa_jam > 1) {
                $biaya_sisa +=
                    ($sisa_jam - 1) * $jam_berikutnya;
            }

            if ($biaya_sisa > $tarif_maksimal) {
                $biaya_sisa = $tarif_maksimal;
            }
        } else {
            $biaya_sisa = 0;
        }

        $total = $biaya_inap + $biaya_sisa;

        echo "<h3>Hasil Perhitungan Parkir</h3>";
        echo "Kendaraan: $kendaraan <br>";
        echo "Lama Parkir: $jam jam <br>";
        echo "Total Biaya: Rp "
            . number_format($total, 0, ',', '.');
    }
?>

    
</body>
</html>