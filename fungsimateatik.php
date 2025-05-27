<?php
$nilai = 21.345123; // Variabel degan tipe data double
echo("Nilai Absolute Dari Nilai =" .abs($nilai)."<br>");
echo("Nilai Pembulatan Ke Atas =" .ceil($nilai)."<br>");
echo("Nilai Pebulatan Ke Bawah =" .floor($nilai)."<br>");
echo("Nilai Pembulatan =" .round($nilai)."<br>");
echo("Nilai Phi ".pi()."<br>");

$bilangan = 2;
echo("Nilai Pangkat 2 =" .pow($bilangan, 2)."<br>");
echo("Nilai Pangkat 3 =" .pow($bilangan, 3)."<br>");
echo("Nilai Random =" .rand(0,100));
?>