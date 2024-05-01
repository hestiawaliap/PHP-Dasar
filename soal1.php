<?php

// Gaji pokok
$gajiPokok = 3250000;

// Tunjangan jabatan
$tunjanganJabatan = 1200000;

// Hitung gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan;

// Persentase pajak penghasilan
$pajakPersen = 10;

// Hitung pajak penghasilan
$pajakPenghasilan = $gajiKotor * ($pajakPersen / 100);

// Hitung gaji bersih
$gajiBersih = $gajiKotor - $pajakPenghasilan;

// Tampilkan hasil
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak Penghasilan: Rp. " . number_format($pajakPenghasilan, 0, ',', '.') . "<br>";
echo "Gaji Bersih: Rp. " . number_format($gajiBersih, 0, ',', '.') . "<br>";
