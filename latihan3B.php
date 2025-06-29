<?php
// Contoh variabel
$var1 = "";
$var2 = null;
$var3 = 0;
$var4 = "Halo";

// Mengecek dengan isset()
echo "<h3>Hasil isset()</h3>";
echo "var1: " . (isset($var1) ? "Ada" : "Tidak ada") . "<br>";
echo "var2: " . (isset($var2) ? "Ada" : "Tidak ada") . "<br>";
echo "var3: " . (isset($var3) ? "Ada" : "Tidak ada") . "<br>";
echo "var4: " . (isset($var4) ? "Ada" : "Tidak ada") . "<br>";

// Mengecek dengan empty()
echo "<h3>Hasil empty()</h3>";
echo "var1: " . (empty($var1) ? "Kosong" : "Isi") . "<br>";
echo "var2: " . (empty($var2) ? "Kosong" : "Isi") . "<br>";
echo "var3: " . (empty($var3) ? "Kosong" : "Isi") . "<br>";
echo "var4: " . (empty($var4) ? "Kosong" : "Isi") . "<br>";
?>