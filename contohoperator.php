<?PHP
//Operastor Mahasiswa
$jumlah_barang = 90;
$harga_satuan = 1000;
$terjual = 30;
$total_pendapatan = $terjual * $harga_satuan; // Menghitung total pendapatan
$sisa_barang = $jumlah_barang - $terjual; // Menghitung sisa barang

echo("Jumlah Barang = ".$jumlah_barang."<br>");
echo("Terjual = ".$terjual."<br>");
echo("Total Pendapatan = ".$total_pendapatan."<br>");
echo("Sisa Barang = ".$sisa_barang."<br>");
?>