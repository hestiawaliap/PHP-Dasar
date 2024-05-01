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
    // variabel dalam php
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variabel txt adalah: $txt</p>" ;
    echo "<p>isi Variabel x adalah: $x</p>" ;
    echo "<p>isi Variabel y adalah: $y</p>" ;
    echo "Belajar PHP di" .  $txt2 . "<br>";
    echo $x + $y;

    //PHP konstanta
    define("nama_konstanta", "{hesti awalia putri}");
    echo "<br>".nama_konstanta;

    ?>

</body>
</html>

