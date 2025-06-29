<?php
$hari = ["Senin", "Selasa"];

print_r($hari);
echo "<br>";

$hari[] = "Rabu"; // Menambah elemen pada urutan terakhir array
print_r($hari);
echo "<br>";

$hari[3] = "Kamis"; // Menambah elemen pada index tertentu
// Jika index sudah terisi, maka elemen lama akan diganti
print_r($hari);
?>