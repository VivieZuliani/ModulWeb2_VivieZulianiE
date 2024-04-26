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
<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['$file_gambar'];
    $gambar = null;
    if ($file_gambar['error'] == 0)
    {
        $filename = str_replace('', '_',$file_gambar['name']);
        $destination = dirname(__FILE__) .'/gambar/' . $filename;
        if(move_uploaded_file($file_gambar['tmp_name'], $destination))
        {
            $gambar = 'gambar/' . $filename;;
        }
    }
    $sql = 'INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar) ';
    $sql = "VALUE ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
    $result =mysqli_query($conn, $sql);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container">
    <h1>Tambah Barang</h1>
    <form method="post" action="tambah.php" enctype="multipart/form-data">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama"/>
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option value="Komputer">Komputer</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Hand Phone">Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" />
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" />
        </div>
        <div class="input">
            <label>stok</label>
            <input type="text" name="stok" />
        </div>
        <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar" />
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Simpan" />
        </div>
        </div>
    </form>
</body>
</html>
```
> ubah.php
```
<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if(isset($_POST['submit']));
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    if ($file_gambar['error'] == 0)
    {
        $file_gambar = str_replace('', '_', $file_gambar['nama']);
        $destination = dirname(__FILE__) . '/gambar/' . $filename;
        if (move_uploaded_file($file_gambar['tmp_name'], $destination))
        {
            $gambar = 'gambar/' . $filename;;
        }
    }

    $sql = 'UPDATE data_barang SET';
    $sql = "nama = '{$nama}', kategori = '{$kategori}', ";
    $sql = "harga_jual = '{$harga_jual}', harga_beli = '{$harga_beli}', stok = '{$stok}', ";
    if (!empty($gambar))
        $sql .= ", gambar = '{$gambar}' ";
    $sql .= "WHERE id_barang ='{$id}'";
    $result = mysqli_query($conn, $sql);

    header('location: index.php');
}

$id = $_GET['id']; 
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Barang</title>
</head>
<body>
    <div class="container">
        <h1>Ubah Barang</h1>
        <div class="main">
            <form method="post" action="ubah.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama Barang</label>
                    <input type="text" name="nama" value="<?php echo $data['nama'];?>" />
                </div>
                <div class="input">
                    <label> Kategori</label>
                    <select name="kategori">
                        <option> <?php echo is_select ('Komputer', $data['kategori']);?> value="Komputer">Komputer</option>
                        <option> <?php echo is_select ('Komputer', $data['kategori']);?> value="Elektronik">Elektronik</option>
                        <option> <?php echo is_select ('Komputer', $data['kategori']);?> value="Hand Phone">Hand Phone</option>
                    </select>
                </div>
                <div class="input">
                    <label>Harga Jual</label>
                    <input type="text" name="harga_jual" value="<>php echo $data['harga_jual'];?>" />
                </div>
                <div class="input">
                    <label>Harga Beli</label>
                    <input type="text" name="harga_beli" value="<>php echo $data['harga_beli'];?>" />
                </div>
                <div class="input">
                    <label>stok</label>
                    <input type="text" name="harga_jual" value="<>php echo $data['stok'];?>" />
                </div>
                <div class="input">
                    <label>File Gambar</label>
                    <input type="file" name="file_gambar" />
                </div>
                <div class="submit">
                    <input type="hidden" name="id" value="<?php echo $data['id_barang'];?>" />
                    <input type="submit" name="submit" value="Simpan" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>
```
> hapus.php
```
<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
```
> koneksi.php
```
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if  ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "koneksi berhasil";
?>
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
Script :
> mobil.php
```
<?php
/**
 * PROGRAM PENDEFINISIAN DAN PEMANGGILAN CLASS
 */

 class Mobil
 {
  private $warna;
  private $merk;
  private $harga;  
  public function __construct()
  {
    $this->warna = "Biru";
    $this->merk = "BMW";
    $this->harga = "10000000";
  }

  public function gantiWarna($warnaBaru)
  {
    $this->warna = $warnaBaru;
  }
  
  public function tampilWarna()
  {
    echo "Warna mobilnya : " . $this->warna;
  }
 }
 
 // membuat objek mobil
 $a = new Mobil();
 $b = new Mobil();

 // memanggil objek
 echo "<b>Mobil Pertama</b><br>";
 $a->tampilWarna();
 echo "<br>Mobil pertama ganti warna<br>";
 $a->gantiWarna("Merah");
 $a->tampilWarna();

 // memanggil objek
 echo "<br><b>Mobil kedua</b><br>";
 $b->gantiWarna("Hijau");
 $b->tampilWarna();

 ?>
```

#### Outputnya :

![Screenshot 2024-04-26 180843](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/2d1615ba-bcb1-4a8a-a305-f8a7b6fa0eda)


> form.php
```
<?php
/**
 * Nama Class : Form
 * Deskripsi : Class untuk membuat form inputan text sederhana
 */

 class Form
 {
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo "<form action ='".$this->action."' method='POST'>";
        echo '<table width="100%" border="0">';
        for ($j=0; $j<count($this->fields); $j++){
            echo "<tr><td align='right'>".$this->fields[$j]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$j]['name']."'></td></tr>";
        }
        echo "<tr><td colspan='2";
        echo "<input type='submit value='".$this->submit."'></td></tr>";
        echo "</table>";
    }

    public function addField($name, $label)
    {
        $this->fields [$this->jumField]['name'] = $name;
        $this->fields [$this->jumField]['label'] = $label;
    }
 }
 ?>
```

#### Outputnya :

![Screenshot 2024-04-26 180925](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/cfc11f1b-53d9-4b42-bd80-1a46002bc315)


> form_input.php
```
<?php
/**
 * Program memanfaatkan 10.2 untuk membuat form inputan sederhana
 */

include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini : </h3>";
$form->displayForm();
echo "</body></html>";

?>
```

#### Outputnya :

![Screenshot 2024-04-26 181008](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/f8a25ce2-bdeb-4a91-b871-87d27d985fc2)


> database.php
```
<?php

class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    public function __construct(){
        $this->getConfig();
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        if($this->conn->connect_error){
            die("Connection failed : ". $this->conn->connect_error);
        }
    }

    private function getConfig(){
        include_once("config.php");
        $this->host =$config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    public function query($sql){
        return $this->conn->query($sql);
    }

    public function get($table, $where=null){
        if($where){
            $where = " WHERE ".$where;
        }
        $sql = "SELECT * FROM".$table.$where;
        $sql = $this->conn->query($sql);
        $sql = $sql->fetch_assoc();
        return $sql;
    }

    public function insert($table, $data)
    {
        if (is_array($data)){
            foreach ($data as $key => $value) {
                # code...
                $column[] = $key;
                $value[] = "'{$value}'";
            }
            $column = implode(",", $column);
            $values = implode(",", $value);
        }
        $sql = "INSERT INTO ".$table." (".$column.") VALUES (".$values.")";
        $sql = $this->conn->query($sql);
        if($sql == true){
            return $sql;
        } else {
            return false;
        }
    }

    public function update($table, $data, $where){
        $update_value ="";
        if(is_array($data)){
            foreach($data as $key => $val){
                $update_value[] = "$key='{$val}'";
            }
            $update_value = implode(",", $update_value);
        }

        $sql = "UPDATE".$table." SET ".$update_value." WHERE ".$where;
        $sql = $this->conn->query($sql);
        if($sql == true){
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $filter){
        $sql = "DELETE FROM ".$table."".$filter;
        $sql = $this->conn->query($sql);
        if ($sql == true){
            return true;
        } else {
            return false;
        }
    }
}
?>
```

#### Outputnya :

![Screenshot 2024-04-26 181042](https://github.com/VivieZuliani/ModulWeb2_VivieZulianiE/assets/130271255/54e168d4-a563-44c7-aebf-d0466b93a3a3)





