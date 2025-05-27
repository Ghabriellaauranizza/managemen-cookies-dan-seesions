<?php
// Fungsi ketiga: menghitung 4 + 7
function ketiga() {
    $hitung = 4 + 7;
    return $hitung;
}

echo ketiga(); // Memanggil fungsi ketiga dan menampilkan hasil

// Fungsi keempat: menghitung luas persegi
function keempat($sisi) {
    $luas_persegi = $sisi * $sisi;
    return $luas_persegi;
}
?>

<!-- Kode ekspresi: langsung menampilkan hasil tanpa echo -->
<?= keempat(4); ?>
