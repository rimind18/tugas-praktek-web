<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5a</title>
</head>
<body>
    <form method="get" action="">
        Jumlah Baris: <input type="number" name="angka" required>
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if (isset($_GET['angka'])) {
        $jumlahBaris = $_GET['angka'];

        for ($i = 1; $i <= $jumlahBaris; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>