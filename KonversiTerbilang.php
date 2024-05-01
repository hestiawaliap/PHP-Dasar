<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Angka ke Huruf</title>
</head>
<body>
    <h1>Konversi Angka ke Huruf</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="angka">Masukkan Angka (1-9):</label>
        <input type="number" id="angka" name="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];

        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Angka tidak valid";
        }

        echo "<p>Hasil: " . $angka . " dikonversi menjadi huruf: " . $terbilang . "</p>";
    }
    ?>
</body>
</html>

