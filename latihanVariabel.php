<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{233307016}">
    <meta name="author" content="{HEsti Awalia Putri}"
</head>
<body>

<body>
    <h1>Halaman PHP saya</h1>

    <?php

// Array nama hari dalam bahasa Indonesia
$namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Mendapatkan hari ini (angka)
$hariIni = date('w');

// Menampilkan nama hari ini
echo "Hari ini adalah: " . $namaHari[$hariIni] . "<br>";

// Menampilkan 6 hari berikutnya
for ($i = 1; $i <= 6; $i++) {
  $hariBerikutnya = ($hariIni + $i) % 7;
  echo "Besok " . ($i + 1) . " adalah: " . $namaHari[$hariBerikutnya] . "<br>";
}

?>
</body>
</html>