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

    $warna = "merah";
    switch ($warna) {
        case "merah":
            echo "warna adalah merah";
            break;
        case "kuning":
            echo "warna adalah kuning";
            break; 
        case "hijau":
            echo "warna adalah hijau";
            break;
        default:
            echo "warna tidak dikenal";      
    }
    echo "<br>";