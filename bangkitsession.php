<?php
session_start();

// Koneksi ke database
$host = 'localhost';
$dbname = 'nama_database';
$username = 'username_db';
$password = 'password_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Validasi input
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $no_hp = htmlspecialchars($_POST['no_hp'] ?? '');

    if (!empty($nama) && !empty($no_hp)) {
        try {
            // Menyimpan ke database
            $stmt = $pdo->prepare("INSERT INTO pengguna (nama, no_hp) VALUES (:nama, :no_hp)");
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':no_hp', $no_hp);
            $stmt->execute();

            // Menyimpan ke session
            $_SESSION['var_session1'] = $nama;
            $_SESSION['var_session2'] = $no_hp;
            $_SESSION['last_insert_id'] = $pdo->lastInsertId();

            // Redirect untuk menghindari resubmit
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        } catch (PDOException $e) {
            $error = "Gagal menyimpan ke database: " . $e->getMessage();
        }
    } else {
        $error = "Nama dan No HP harus diisi!";
    }
}

// Menghapus data jika diminta
if (isset($_POST['hapus'])) {
    if (isset($_SESSION['last_insert_id'])) {
        try {
            $stmt = $pdo->prepare("DELETE FROM pengguna WHERE id = :id");
            $stmt->bindParam(':id', $_SESSION['last_insert_id']);
            $stmt->execute();
        } catch (PDOException $e) {
            $error = "Gagal menghapus data: " . $e->getMessage();
        }
    }
    
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Mengambil data dari database untuk ditampilkan
$data_pengguna = [];
if (isset($_SESSION['last_insert_id'])) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM pengguna WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['last_insert_id']);
        $stmt->execute();
        $data_pengguna = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $error = "Gagal mengambil data: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penyimpanan Data</title>
    <style>
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"] { width: 100%; padding: 8px; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Input Data Pengguna</h1>
        
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['var_session1']) && isset($_SESSION['var_session2'])): ?>
            <div class="success">
                <p>Data berhasil disimpan!</p>
                <p>Nama: <?php echo htmlspecialchars($_SESSION['var_session1']); ?></p>
                <p>No HP: <?php echo htmlspecialchars($_SESSION['var_session2']); ?></p>
                
                <?php if (!empty($data_pengguna)): ?>
                    <h3>Data dari Database:</h3>
                    <p>ID: <?php echo $data_pengguna['id']; ?></p>
                    <p>Nama: <?php echo htmlspecialchars($data_pengguna['nama']); ?></p>
                    <p>No HP: <?php echo htmlspecialchars($data_pengguna['no_hp']); ?></p>
                    <p>Tanggal Dibuat: <?php echo $data_pengguna['created_at']; ?></p>
                <?php endif; ?>
                
                <form method="post">
                    <input type="hidden" name="hapus" value="1">
                    <input type="submit" value="Hapus Data">
                </form>
            </div>
        <?php else: ?>
            <p>Silakan isi form berikut:</p>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required 
                       value="<?php echo isset($_SESSION['var_session1']) ? htmlspecialchars($_SESSION['var_session1']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" required
                       value="<?php echo isset($_SESSION['var_session2']) ? htmlspecialchars($_SESSION['var_session2']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" value="Simpan Data">
            </div>
        </form>
    </div>
</body>
</html>