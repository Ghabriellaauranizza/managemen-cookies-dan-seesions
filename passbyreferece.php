<?php
$nama = "Masukkan nama anda"; // Variabel dengan tipe data string, bukan integer

function bkn_reference($nama) {
    $nama .= " Memang tidak gaul"; // Gunakan .= untuk menambahkan string
    echo("<br>" . $nama);
}

bkn_reference($nama); // Pemanggilan prosedur
echo("<br>Kata Tidak Gaul Hilang ==> " . $nama); // Variabel asli tetap karena tidak lewat referensi

function reference(&$nama) {
    $nama .= " Memang tidak gaul"; // Gunakan .= untuk menambahkan string
    echo("<br><br>" . $nama);
}

reference($nama); // Pemanggilan prosedur dengan referensi
echo("<br>Kata Tidak Gaul Hilang ==> " . $nama); // Variabel asli berubah karena lewat referensi
?>
