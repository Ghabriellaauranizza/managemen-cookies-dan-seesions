<?php
$nama_cookie = "nama_teman";
$nilai_cookie = "Ghabriella Auranizza";
setcookie($nama_cookie, $nilai_cookie, time() +(3600), "/"); // 1 jam
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-success shadow rounded text-center">
            <h4 class="alert-heading">Cookie Berhasil Dibuat</h4>
            <p>
                Cookie <strong><?= $nama_cookie?></strong>
                dengan nilai <strong><?= $nilai_cookie?></strong>
                Telah Disimpan selama 1 jam.
                <hr>
            </p>

            <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>