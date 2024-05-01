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

$t = date("H");
echo "if";
if ($t < 16) {
    echo"Selamat Siang"; 
}

$t = date ("H");
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat Siang!";
} else {
    echo "Selamat malam!";
}

echo "<br> Nested If <br>";
if ($t < 10) {
  echo "Selamat Pagi!";
} elseif ($t < 19) {
  echo "Selamat Sore!";
} else {
  echo "Selamat Malam!";
}

?>

</body>
</html>