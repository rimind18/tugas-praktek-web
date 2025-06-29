<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Modul 2</title>
</head>
<body>

<h3>Pengulangan untuk mencari kategori bilangan :</h3>
<ul>
<?php
// Fungsi untuk mengecek bilangan prima
function isPrima($angka) {
    if ($angka <= 1) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

for ($i = 1; $i <= 20; $i++) {
    $jenis = "";

    // Cek ganjil/genap
    if ($i % 2 == 0) {
        $jenis = "bilangan genap";
    } else {
        $jenis = "bilangan ganjil";
    }

    // Cek prima
    if (isPrima($i)) {
        $jenis .= " dan sekaligus bilangan prima";
    }

    echo "<li>Angka $i adalah $jenis</li>";
}
?>
</ul>

</body>
</html>