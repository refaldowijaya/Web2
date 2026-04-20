<?php
/*
Jawaban Pertanyaan Latihan 5:
Perbedaan perintah break dan continue:
- break: Digunakan untuk menghentikan atau keluar dari seluruh proses perulangan (looping) secara total, meskipun kondisi perulangan sebenarnya masih bernilai *true* atau belum selesai aslinya.
- continue: Digunakan untuk melewati atau "melompati" (skip) satu iterasi saat ini, lalu langsung melanjutkan ke iterasi berikutnya di perulangan tersebut.
*/

echo "Tabel Perkalian<br>";
echo "==================<br>";

// Membuat tabel perkalian angka 12, pengalinya dari 15 sampai 45 dengan lompatan 2 angka 
for ($i = 15; $i <= 45; $i += 2) {
    $hasil = 12 * $i;
    echo "12 * $i = $hasil <br>\n";
}
?>
