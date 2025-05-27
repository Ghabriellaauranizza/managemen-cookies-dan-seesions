<?php
session_start(); // Memulai session
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container py-4">
    <h3 class="text-info">Data Session</h3>
    <?php
    if (isset($_SESSION["var_session1"]) && isset($_SESSION["var_session2"])) {
        echo "<p>{$_SESSION['var_session1']}</p>";
        echo "<p>{$_SESSION['var_session2']}</p>";
    } else {
        echo "<div class='alert alert-warning'>Session Kosong!</div>";
    }
    ?>

    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
