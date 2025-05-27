<?php
setcookie("nama", "", time() - 3600, "/"); // Menghapus cookie "nama"
setcookie("nama_teman", "", time() - 3600, "/"); // Menghapus cookie "nama_teman"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container py-4">
    <h3 class="text-danger">Cookie telah dihapus</h3>
    <p>Cookie <strong>nama</strong> dan <strong>nama_teman</strong> sudah tidak tersedia lagi.</p>
    
    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>