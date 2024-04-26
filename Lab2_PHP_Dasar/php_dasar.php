<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP DASAR</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
<body>
    <h2>Menggunakan Variabel</h2>
    <?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : ". $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
<body>
    <h2>Perdefine Variabel $_GET</h2>
    <h3>tambahin ?nama=Abdullah pada url, mepet .php</h3>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>