<?php
$mahasiswa = [
    "001" => "Ahmad",
    "002" => "Budi",
    "003" => "Chika",
    "004" => "Dini",
    "005" => "Erwin"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>

<ul>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama"; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>