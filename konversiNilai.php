<!DOCTYPE html>
<html>
<body>

<h2>Konversi Nilai Angka ke Huruf</h2>

<form action="" method="post">
    Masukkan Nilai Angka: <input type="number" name="nilai" min="0" max="100">
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];
    if ($nilai >= 0 && $nilai <= 59) {
        $huruf = "C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        $huruf = "BC";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        $huruf = "B";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        $huruf = "AB";
    } elseif ($nilai >= 90 && $nilai <= 100) {
        $huruf = "A";
    } else {
        $huruf = "Nilai angka tidak valid";
    }
    echo "<p>Nilai Huruf: $huruf</p>";
}
?>

</body>
</html>
