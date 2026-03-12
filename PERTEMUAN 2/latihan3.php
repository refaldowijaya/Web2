<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana - Latihan 3</title>
    <style>
        /* Sedikit styling CSS agar mirip dengan gambar di soal */
        .judul-nilai {
            font-weight: bold;
            color: #b30000; /* Merah gelap */
        }
        td {
            padding: 5px;
        }
    </style>
</head>
<body>

    <form method="POST" action="">
        <table>
            <tr>
                <td class="judul-nilai" align="center">Nilai I</td>
                <td></td>
                <td class="judul-nilai" align="center">Nilai II</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="nilai1" required></td>
                
                <td>
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </td>

                <td><input type="text" name="nilai2" required></td>
                
                <td><button type="submit" name="submit">submit</button></td>
            </tr>
        </table>
    </form>
    
    <br><hr><br>

    <?php
    // Mengecek apakah form sudah di-submit
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        // Validasi: memastikan yang dimasukkan benar-benar angka
        if (is_numeric($nilai1) && is_numeric($nilai2)) {
            
            // Menentukan operasi matematika berdasarkan pilihan dropdown
            switch ($operator) {
                case '+':
                    $hasil = $nilai1 + $nilai2;
                    break;
                case '-':
                    $hasil = $nilai1 - $nilai2;
                    break;
                case '*':
                    $hasil = $nilai1 * $nilai2;
                    break;
                case '/':
                    // Mencegah error pembagian dengan angka nol
                    if ($nilai2 != 0) {
                        $hasil = $nilai1 / $nilai2;
                    } else {
                        $hasil = "Error: Tidak bisa membagi dengan 0!";
                    }
                    break;
            }

            // Menampilkan Hasil
            echo "<h3>Hasil Perhitungan:</h3>";
            echo "$nilai1 $operator $nilai2 = <b>$hasil</b>";

        } else {
            // Pesan error jika input berupa huruf/karakter lain
            echo "<p style='color:red;'>Mohon masukkan angka yang valid di kedua kolom.</p>";
        }
    }
    ?>

</body>
</html>