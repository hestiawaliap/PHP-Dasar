<?php

// Jumlah uang yang ingin ditarik Ani
$uangDitarik = 1387500;

// Inisialisasi variabel untuk setiap pecahan uang
$pecahan100ribu = 0;
$pecahan50ribu = 0;
$pecahan20ribu = 0;
$pecahan10ribu = 0;
$pecahan5ribu = 0;
$pecahan2ribu = 0;
$pecahan500 = 0;

// Hitung jumlah masing-masing pecahan uang
while ($uangDitarik >= 100000) {
  $uangDitarik -= 100000;
  $pecahan100ribu++;
}

while ($uangDitarik >= 50000) {
  $uangDitarik -= 50000;
  $pecahan50ribu++;
}

while ($uangDitarik >= 20000) {
  $uangDitarik -= 20000;
  $pecahan20ribu++;
}

while ($uangDitarik >= 10000) {
  $uangDitarik -= 10000;
  $pecahan10ribu++;
}

while ($uangDitarik >= 5000) {
  $uangDitarik -= 5000;
  $pecahan5ribu++;
}

while ($uangDitarik >= 2000) {
  $uangDitarik -= 2000;
  $pecahan2ribu++;
}

while ($uangDitarik >= 500) {
  $uangDitarik -= 500;
  $pecahan500++;
}

// Tampilkan hasil
echo "Rincian uang yang diterima Ani:<br>";
echo "Rp. 100.000: " . $pecahan100ribu . " lembar<br>";
echo "Rp. 50.000: " . $pecahan50ribu . " lembar<br>";
echo "Rp. 20.000: " . $pecahan20ribu . " lembar<br>";
echo "Rp. 10.000: " . $pecahan10ribu . " lembar<br>";
echo "Rp. 5.000: " . $pecahan5ribu . " lembar<br>";
echo "Rp. 2.000: " . $pecahan2ribu . " lembar<br>";
echo "Rp. 500: " . $pecahan500 . " lembar<br>";
