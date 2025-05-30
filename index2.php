<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website Modular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .menu {
            width: 150px;
            float: left;
            background-color: #f1f1f1;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .menu a {
            display: block;
            color: blue;
            text-decoration: none;
            margin-bottom: 5px;
        }
        .menu a:hover {
            text-decoration: underline;
        }
        .content {
            margin-left: 180px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=profil">Profil</a>
        <a href="index.php?page=galeri">galeri</a>
    </div>

    <div class="content">
        <div class="header">
            <?php
            $halaman = $_GET["page"] ?? "home";
            echo ucfirst($halaman);
            ?>
        </div>
        <?php include "./modul.php"; ?>
    </div>
    
</body>
</html>