<?php
$nama = $_GET['nama'];
$email = $_GET['email'];
$jurusan = $_GET['jurusan'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p>Nama: <?= $nama ?></p>
    <p>Email: <?= $email ?></p>
    <p>Jurusan: <?= $jurusan ?></p>
</body>
</html>