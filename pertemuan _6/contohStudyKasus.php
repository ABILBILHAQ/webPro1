<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table.tarif {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 14px;
        }
        table.tarif th, table.tarif td {
            border: 1px solid #999;
            padding: 8px 10px;
            text-align: center;
        }
        table.tarif th {
            background-color: #2c3e50;
            color: #fff;
        }
        table.tarif tr:nth-child(even) {
            background-color: #ecf0f1;
        }
        .info {
            background: #eaf6ff;
            border-left: 4px solid #3498db;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
        }
        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }
        form select, form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            box-sizing: border-box;
        }
        form button {
            background-color: #2c3e50;
            color: #fff;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        form button:hover {
            background-color: #1a252f;
        }
        .hasil {
            margin-top: 20px;
            background: #e8f8e8;
            border-left: 4px solid #27ae60;
            padding: 16px;
            border-radius: 4px;
        }
        .hasil h3 {
            margin-top: 0;
            color: #27ae60;
        }
        .hasil table {
            width: 100%;
            border-collapse: collapse;
        }
        .hasil table td {
            padding: 6px 0;
            font-size: 15px;
        }
        .hasil table td:first-child {
            font-weight: bold;
            width: 180px;
        }
        .total {
            font-size: 20px;
            font-weight: bold;
            color: #27ae60;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🅿️ Sistem Parkir Sederhana</h2>

        <!-- Tabel Tarif -->
        <table class="tarif">
            <tr>
                <th>Kendaraan</th>
                <th>Jam Pertama</th>
                <th>Jam Berikutnya</th>
                <th>Tarif Maksimal (&lt; 24 jam)</th>
                <th>Tarif Inap per 24 Jam</th>
            </tr>
            <tr>
                <td>Motor</td>
                <td>Rp 3.000</td>
                <td>Rp 2.000</td>
                <td>Rp 15.000</td>
                <td>Rp 20.000</td>
            </tr>
            <tr>
                <td>Mobil</td>
                <td>Rp 5.000</td>
                <td>Rp 3.000</td>
                <td>Rp 30.000</td>
                <td>Rp 50.000</td>
            </tr>
        </table>

        <!-- Info Cara Menghitung -->
        <div class="info">
            <strong>Cara menghitung:</strong>
            <ul style="margin: 6px 0 0 0; padding-left: 20px;">
                <li>Setiap <b>24 jam penuh</b> dikenakan tarif inap.</li>
                <li><b>Sisa jam</b> dihitung dengan tarif biasa: jam pertama, lalu jam berikutnya, dan tetap dibatasi tarif maksimal.</li>
            </ul>
            <br>
            <em>Contoh: motor parkir 30 jam = 1 × inap (Rp 20.000) + sisa 6 jam (Rp 13.000) = <b>Rp 33.000</b></em>
        </div>

        <!-- Form Input -->
        <form action="" method="POST">
            <label for="kendaraan">Jenis Kendaraan:</label>
            <select name="kendaraan" id="kendaraan">
                <option value="Motor">Motor</option>
                <option value="Mobil">Mobil</option>
            </select>

            <label for="jam">Lama Parkir (jam):</label>
            <input type="number" name="jam" id="jam" min="1" placeholder="Masukkan lama parkir" required>

            <button type="submit" name="hitung">Hitung Tarif</button>
        </form>

        <!-- Hasil Perhitungan -->
        <?php
        if (isset($_POST['hitung'])) {

            $kendaraan = $_POST['kendaraan'];
            $jam = (int) $_POST['jam'];

            // Tentukan tarif berdasarkan jenis kendaraan
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

            if ($kendaraan == "Mobil") {
                $jam_pertama = 5000;
                $jam_berikutnya = 3000;
                $tarif_maksimal = 30000;
                $tarif_inap = 50000;
            } else {
                $jam_pertama = 3000;
                $jam_berikutnya = 2000;
                $tarif_maksimal = 30000;
                $tarif_inap = 50000;
            }

            // Hitung jumlah inap (kelipatan 24 jam)
            $jumlah_inap = intdiv($jam, 24);
            $sisa_jam = $jam % 24;

            // Biaya inap
            $biaya_inap = $jumlah_inap * $tarif_inap;

            // Biaya sisa jam
            if ($sisa_jam > 0) {
                $biaya_sisa = $jam_pertama; // jam pertama

                if ($sisa_jam > 1) {
                    $biaya_sisa += ($sisa_jam - 1) * $jam_berikutnya; // jam berikutnya
                }

                // Batasi dengan tarif maksimal
                if ($biaya_sisa > $tarif_maksimal) {
                    $biaya_sisa = $tarif_maksimal;
                }
            } else {
                $biaya_sisa = 0;
            }

            // Total biaya
            $total = $biaya_inap + $biaya_sisa;

            // Tampilkan hasil
            echo '<div class="hasil">';
            echo '<h3>Hasil Perhitungan Parkir</h3>';
            echo '<table>';
            echo '<tr><td>Kendaraan</td><td>: ' . $kendaraan . '</td></tr>';
            echo '<tr><td>Lama Parkir</td><td>: ' . $jam . ' jam</td></tr>';
            echo '<tr><td>Jumlah Inap (24 jam)</td><td>: ' . $jumlah_inap . ' kali</td></tr>';
            echo '<tr><td>Sisa Jam</td><td>: ' . $sisa_jam . ' jam</td></tr>';
            echo '<tr><td>Biaya Inap</td><td>: Rp ' . number_format($biaya_inap, 0, ',', '.') . '</td></tr>';
            echo '<tr><td>Biaya Sisa Jam</td><td>: Rp ' . number_format($biaya_sisa, 0, ',', '.') . '</td></tr>';
            echo '</table>';
            echo '<p class="total">Total Biaya: Rp ' . number_format($total, 0, ',', '.') . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
