<?php
$hari = ["Senin", "Selasa", "Rabu"];

echo "array awal : <br>";
print_r($hari);
echo "<hr>";

echo "array setelah di pop : <br>";
$hasil = array_pop($hari); // Menghapus elemen terakhir dari array
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di push : <br>";
$hasil = array_push($hari, "Kamis", "Jum'at"); // Menambahkan elemen di akhir array
print_r($hari);
echo "<hr>";

echo "array setelah di shift : <br>";
$hasil = array_shift($hari); // Menghapus elemen pertama dari array
print_r($hari);
echo "<br>elemen yang di shift : $hasil <hr>";

echo "array setelah di unshift : <br>";
array_unshift($hari, "Hari", "elemen", "ditambahkan"); // Menambahkan di awal array
print_r($hari);
?>