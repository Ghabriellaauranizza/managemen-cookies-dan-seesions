<?php
$nama = "Ghabriella Auranizza Fransrico"; // Variabel degan tipe dta integer
$nilai_bhs = 2; // Variabel degan tipe data integer
$nilai_ipa = 2.5; // Variabel degan tipe data double
$bentuk_boolean = true; // Variabel degan tipe data boolean
echo("Nama Mahasiswa = ".$nama."<br>");
echo("Nilai BHS =" .$nilai_bhs."<br>");
echo("Nilai IPA =".$nilai_ipa."<br>");
if($bentuk_boolean == true) {
    echo ("Boolean Menunjukkan nilai benar <br>");
}

//Konfers ke float
$nilai_bhs = (float)$nilai_bhs; // Konversi ke float

//Konversi ke integer
$nilai_ipa = (int)$nilai_ipa; // Konversi ke integer

echo("Nilai Bahasa setelah dikonersi ke float = ".$nilai_bhs."<br>");
echo("Nilai IPA setelah dikonersi integer = ".$nilai_ipa."  <br>");
?>