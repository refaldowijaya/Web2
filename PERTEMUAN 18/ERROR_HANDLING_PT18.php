<?php
try {
    $nama = "";

    if (empty($nama)) {
        throw new Exception("Nama tidak boleh kosong!");
    }

    echo "Selamat datang, $nama";

} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>