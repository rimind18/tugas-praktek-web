<?php
// Array awal
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Tampilkan daftar awal
echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Tambahkan 3 elemen baru
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Tampilkan daftar baru
echo "<h3>Daftar Negara ASEAN baru :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>