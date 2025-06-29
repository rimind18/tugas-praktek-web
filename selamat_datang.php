<?php
// Cek apakah form sudah disubmit dan ada input nama
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama-anda'])) {
    $nama_anda = htmlspecialchars(trim($_POST['nama-anda']));
} else {
    $nama_anda = "Guest"; // Nilai default jika form belum diisi
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo $nama_anda ?></title>
</head>
<body>
    <h2>selamat datang , <?php echo $nama_anda ?>!</h2>
    
    <!-- Form input untuk mengisi nama -->
    <form method="POST" action="">
        <label for="nama-anda">Your Name:</label>
        <input type="text" id="nama-anda" name="nama-anda" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
