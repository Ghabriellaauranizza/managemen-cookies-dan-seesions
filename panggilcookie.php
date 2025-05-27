<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-light">
    <h3 class="text-info">Data Cookie</h3>
    <?php
    if (isset($_COOKIE["nama"]) && isset($_COOKIE["nama_teman"])) {
        echo "<p>Nama Anda : <strong>{$_COOKIE['nama']}</strong></p>";
        echo "<p>Nama Teman Anda : <strong>{$_COOKIE['nama_teman']}</strong></p>";
    } else {
        echo "<div class='alert alert-warning'>Cookie Belum Dibuat!</div>";
    }
    ?>
    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>