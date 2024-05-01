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

    $x = 5;
    $y = 10;

    //Aritmetic operators
    echo "Penambahan ".$x + $y."<br>";
    echo "Pengurangan ".$x - $y."<br>";
    echo "Perkalian ".$x * $y."<br>";
    echo "Pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";
    echo ("<br>");

    //Assigment operatos
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y * 2
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";
    echo ("<br>");

    //increment/Decrement operators
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo ("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo ("<br>");

    $user = "Hesti Awalia Putri";
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    echo $color = $color ?? "red";

    ?>

</body>
</html>
    