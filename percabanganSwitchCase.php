<?php
$hari_sekarang = date("l"); // Mengambil hari saat ini
switch ($hari_sekarang) {
    case "Monday" : $hari = "Senin";
    break;
    case "Thursday" : $hari = "Selasa";
    break;
    case "Wednesday" : $hari = "rabu";
    break;
    case "Tuesday" : $hari = "Kamis";
    break;
    case "Friday" : $hari = "Jum'at";
    break;
    case "Saturday" : $hari = "Sabtu";
    break;
    default : $hari = "Minggu";
}

echo("Sekarang adalah hari".$hari);

?>