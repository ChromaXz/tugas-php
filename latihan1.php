<?php
// ini komentar satu paragraf

/*  

ini komentar banyak
*/

//cetak
echo 'Belajar php <br> ';
echo 'tes php';
echo '<br>';
print 'Belajar MySQL';
echo '<br>';
echo 'Belajar "PHP"';
echo '<br>';
echo "Belajar \"PHP\"";
echo '<hr>';

//membuat variabel user
$nama="Dewa Gede";
$alamat="Gunung";
$umur=20;
$berat=70.5;
$_pekerjaan="Pelajar";
echo $nama;
echo '<br>';
echo "nama saya $nama alamat di $alamat <br>";
//perbedaan menggunakan '' dan ""
echo 'nama saya $nama alamat di $alamat <br>';
echo 'nama saya ' .$nama. 'alamat di ' .$alamat. '<br>'; //biisa pake . atau , untuk pemisah variabel
echo '<br>';
echo "nama saya $nama alamat di $alamat umur $umur berat $berat pekerjaan sebagai $_pekerjaan";
echo '<br>';
//variabel sistem contoh $_SERVER, $_GET dan lain lain, bisa cari di info.php
echo $_SERVER['SERVER_ADMIN'];
echo '<br>';
echo $_SERVER['SERVER_PORT'];
//variabel konstanta
//define untuk memanggil variabel konstanta
define('PELAJARAN', 'PHP Dasar'); //Pemanggilan seperti contoh disamping harus huruf kapital "PELAJARAN"
echo '<br>';
echo "ini mata kuliah:". PELAJARAN;
echo '<hr>';
//operasi aritmatika
$a=100;
$b=50;
echo "hasil nya adalah : " .$a+$b. "<br>";
echo "hasil nya adalah : " .$a*$b. "<br>";
echo "hasil nya adalah : " .$a-$b. "<br>";
echo "hasil nya adalah : " .$a/$b. "<br>";
echo "hasil nya adalah : " .$a%$b. "<br>"; //modulus atau sisa pembagian
echo $a**$b. '<br>'; //pangkat
echo pow($a,$b). '<br>'; //pangkat
echo pow(2,3). '<br>'; //pangkat
echo "<hr>";
//cetak dalam php
define('PHI', 3.14);
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<br>';

//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2


//tipe data string
$hitungstring= "Belajar PHP di Kampus Merdeka";
var_dump($hitungstring);
echo '<br>';
//mengetahui tipe variabel
$huruf="Dewa";
$hasil=gettype($huruf);
echo  $hasil;
echo '<br>';

$bil1=100;
$hasil=gettype($bil1);
echo  $hasil;
echo '<br>';

$bil2=7.50;
$hasil=gettype($bil2);
echo  $hasil;
echo '<br>';

// contoh: nama lengkap dan alamat, cetak menggunakan style css yaitu style warna menggunakan php echo
$namaLengkap = "Dewa Gede Andika";
$alamat = "Jalan Gunung Baru, Kota Aman";
$warna = "red";

echo "<span style='color: $warna;'>$namaLengkap</span><br>";
echo "<span style='color: $warna;'>$alamat</span>";
echo '<hr>';






echo '<hr>';
?>

<!--ini merupakan batas atau code dari html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variabel user</title>
</head>
<body>
    <!-- cetak di dalam html-->
    <h2>nama saya: <?php echo $nama ?></h2>
    <!-- atau bisa diketik dengan dibawah ini lihatlah perbedaannya-->
    <h2>Saya Berumur: <?= $umur ?> Tahun</h2>
    <!-- cetak di dalam html-->
    <p>Jari jari nya adalah: <?= $jari2 ?></p>
    <p>maka luas nya adalah: <?= $luas ?></p>
    <p>maka keliling nya adalah: <?= $keliling ?></p>
</body>
</html>