<?php
// Array multidimensi untuk menyimpan data kota
$data_kota = [
    ["Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"],
    ["Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"],
    ["Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"],
    ["Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"],
    ["Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"],
    ["Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"],
    ["Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"],
    ["Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95"]
];

// Menampilkan data dalam tabel
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($data_kota as $kota) {
    echo "<tr>
            <td>{$kota['Negara']}</td>
            <td>{$kota['Ibukota']}</td>
            <td>{$kota['Kode Telepon']}</td>
          </tr>";
}
echo "</table>";
?>