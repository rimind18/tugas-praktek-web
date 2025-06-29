<?php
// Associative array untuk menyimpan data
$data_nrp = [
    "001" => ["Nama" => "Andi", "Kategori" => "Budaya Daerah di Indonesia"],
    "002" => ["Nama" => "Budi", "Kategori" => "Penemu-penemu terkenal di dunia"],
    "003" => ["Nama" => "Citra", "Kategori" => "Flora dan Fauna terancam punah"],
    "004" => ["Nama" => "Dewi", "Kategori" => "Pahlawan Nasional Indonesia"],
    "005" => ["Nama" => "Eka", "Kategori" => "Perusahaan Teknologi"]
];

// Menampilkan data dalam tabel
echo "<table border='1'>";
echo "<tr><th>NRP</th><th>Nama</th><th>Kategori</th></tr>";
foreach ($data_nrp as $nrp => $data) {
    echo "<tr>
            <td>$nrp</td>
            <td>{$data['Nama']}</td>
            <td>{$data['Kategori']}</td>
          </tr>";
}
echo "</table>";
?>