<?php
// Array multidimensi untuk menyimpan data produk
$produk = [
    [
        "id" => 1,
        "nama" => "Minyak Telon",
        "stok" => 20,
        "harga" => 31790,
    ],
    [
        "id" => 2,
        "nama" => "Diapers",
        "stok" => 25,
        "harga" => 51880,
    ],
    [
        "id" => 3,
        "nama" => "Baby Oil",
        "stok" => 15,
        "harga" => 16780,
    ],
    [
        "id" => 4,
        "nama" => "Shampo Baby",
        "stok" => 20,
        "harga" => 20650,
    ],
    [
        "id" => 5,
        "nama" => "Bedak",
        "stok" => 15,
        "harga" => 15890,
    ],
    [
        "id" => 6,
        "nama" => "Baju Bayi",
        "stok" => 20,
        "harga" => 35500,
    ],
    [
        "id" => 7,
        "nama" => "Jumper",
        "stok" => 25,
        "harga" => 50999,
    ],
];

// Menampilkan data produk dalam bentuk tabel HTML
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga (Rp)</th><th>Total Harga (Rp)</th></tr>";
foreach ($produk as $p) {
    echo "<tr>";
    echo "<td>" . $p["id"] . "</td>";
    echo "<td>" . $p["nama"] . "</td>";
    echo "<td>" . $p["stok"] . "</td>";
    echo "<td>" . $p["harga"] . "</td>";
    echo "<td>" . $p["stok"] * $p["harga"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
