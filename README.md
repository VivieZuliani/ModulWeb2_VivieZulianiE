# MODUL LATIHAN PEMROGRAMAN WEB2
## Modul 1_2 PHP DASAR DAN FORUM INPUT
### Latihan 2 PHP DASAR
Script untuk file bernama `php_dasar.php` :
```
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
```
### Outputnya :

![Screenshot 2024-04-22 143154](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/d6f0dbb2-411a-4cc4-ae60-487311d7164d)

> Sebelum ditambahkan url `?nama=Abdullah` pada akhir url maka terdapat peringatan pada variabel $_GET. Sehingga perlu ditambahkan `?nama=Abdullah` di akhir url, maka akan tampilannya akan berubah dan muncul nama Abdullah pada bagian variabel $_GET sebagai berikut :

![Screenshot 2024-04-22 143145](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/953b984c-c707-42db-b322-7c6f937dfcca)


Script untuk file `Form_Input.php` :
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama : </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
    echo'Selamat Datang ' . $_POST['nama'];
    ?>
</body>
<body>
    <h2>Operator Gaji</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
<body>
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari =date("1");
    if ($nama_hari == "Sunday"){
        echo "Minggu";
    } elseif ($nama_hari == "Monday"){
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
</body>
<body>
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari){ 
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
        echo "Sabtu";
    }
    ?>
</body>
<body>
    <h2>Perulangan For</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++){
        echo "Perulangan ke : " . $i . '<br />';
    }

    echo '<br />';
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--){
        echo "Perulangan ke : " . $i . '<br />';
    }
    ?>
</body>
<body>
    <h2>Perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke : " . $i . '<br />';
        $i++;
    }
    ?>
</body>
<body>
    <h2>Perulangan Dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke : " . $i . '<br />';
        $i++;
     } while ($i<=10);
    ?>
</body>
</html>
```

### Outputnya : 

![Screenshot 2024-03-25 221756](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/bb118edd-352f-4b6e-91bf-0d8638bddf9d)

> Pada gambar pertama, masih terdapat undefine dikarenakan user belum  mengetikkan nama Abdullah ke dalam form input. Setelah memasukkan nama Abdullah, maka form input baru terdefinisi

![Screenshot 2024-03-25 221815](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/7ccfc3a2-9aa2-4162-b7da-3517baead969)


![Screenshot 2024-04-22 143558](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/9948588f-7472-4ec8-b9f9-2358757affd3)

### Latihan 3 PHP dan DATABASE MYSQL
> Buat databse latihan1;
![Screenshot 2024-04-22 144250](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/95664297-84c4-452a-9b8e-a1df8cef7523)

> Masukkan tabel
![Screenshot 2024-04-22 144604](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/ba5def76-4169-479c-bdff-4646407c21d4)

> Tampilan di cmd
![Screenshot 2024-04-22 152937](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/9b1af2fe-70ef-436a-a4e3-96c5d9b7a2ef)

Script :
> index.php
```
<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="C:\xampp\htdocs\Lab8_php_database\style.css" rel="stylesheet" type="text/css" />
    <title>DATA BARANG</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><img src="gambar/<?= $row['gambar'];?>"  alt="<?=$row['nama'];?>" ></td>
                        <td><?= $row['nama'];?></td>
                        <td><?= $row['kategori'];?></td>
                        <td><?= $row['harga_jual'];?></td>
                        <td><?= $row['harga_beli'];?></td>
                        <td><?= $row['stok'];?></td>
                        <td><?= $row['id_barang'];?></td>
                    </tr>
                    <?php endwhile; else: ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
```
> tambah.php
```

```
> ubah.php
```

```
> hapus.php
```

```
> koneksi.php
```

```

#### Output :
> Tampilan di localhost
![Screenshot 2024-04-23 223632](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/7507df6b-ee23-4c51-abd5-faab91d9c2c6)

> Halaman tambah.php
![Screenshot 2024-04-23 223953](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/000f6aba-8bd4-4174-9933-b2f622907a0b)





## MODUL 3_4 PHP MODULAR DAN OOP
### LAB 4_PHP MODULAR
> home.php
```
<?php require('header.php'); ?>
<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require('footer.php');?>
```
> header.php
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="kontak.php">Kontak</a>
        </nav>
```
> footer.php
```
<footer>
    <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
</footer>
</div>
</body>
</html>
```
> about.php
```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman About</h2>
    <p>Ini adalah content dari halaman.</p>
</div>

<?php require('footer.php');?>
```
> index.php
```
<?php

$mod = $_REQUEST['mod'];

switch  ($mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about");
        break;
    default:
        require("home.php");
        break;
}
?>
```
> .htaccess
```
<IfModule mod_rewrite.c>
RewriteEngine On 
RewriteBase /Lab4_php_modular/

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?mod=$1 [L]
</IfModule>
```

### Outputnya :

 ![Screenshot 2024-04-26 153057](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/6da89037-e326-4479-b477-fcd64dc356a1)

 > hasilnya undefine karena memerlukan mod di urlnya, jadi undefine akan hilang jika sudah mengklik `home` atau `about`

> halaman home

![Screenshot 2024-04-26 153752](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/4cc25ec0-7d9a-417b-bd24-a25200041ec2)


> halaman about

![Screenshot 2024-04-26 153837](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/e691efd7-eed2-4c27-bb66-2e1c7728c89c)

#### Pertanyaan dan Tugas
Tugas : 
![Screenshot 2024-04-26 154540](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/aa1d9b53-89e2-4d0a-9291-58d60d48e371)

Outputnya :
![Screenshot 2024-04-26 131229](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/4566d7b6-524a-4dc0-a2c1-fdc59e6f2df0)


### LAB 5_PHP OOP





