<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Beli</title>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="latihan5.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pelanggan:</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="masukkan nama anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="produk" class="col-4 col-form-label">produk:</label>
            <div class="col-8">
                <select id="produk" name="produk" class="custom-select">
                    <option value="">--Pilihan--</option>
                    <option value="TV">TV</option>
                    <option value="Lemari">Lemari</option>
                    <option value="Tas">Tas</option>
                    <option value="Baju">Baju</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah Beli:</label>
            <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="masukkan jumlah beli anda" type="text" class="form-control"
                    aria-describedby="jumlahHelpBlock">
                <span id="jumlahHelpBlock" class="form-text text-muted">berupa angka</span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">masukkan</button>
                <button name="reset" type="reset" class="btn btn-primary">Batal</button>
            </div>
        </div>
    </form>
</body>

</html>


<?php
error_reporting(0);
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$beli = $_POST['jumlah'];
$proses = $_POST['proses'];

// Harga satuan menggunakan if
if ($produk == "TV") {
    $harga_satuan = 5000000;
} elseif ($produk == "Lemari") {
    $harga_satuan = 2500000;
} elseif ($produk == "Tas") {
    $harga_satuan = 500000;
} elseif ($produk == "Baju") {
    $harga_satuan = 200000;
} else {
    $harga_satuan = 0;
}

// Total belanja = jumlah beli * harga satuan
$total_belanja = $beli * $harga_satuan;

// Diskon = 20% * Total Belanja
$diskon = 0.2 * $total_belanja;

// PPN = 10% (total belanja - diskon)
$ppn = 0.1 * ($total_belanja - $diskon);

// Harga bersih: (total belanja - diskon) + PPN
$harga_bersih = ($total_belanja - $diskon) + $ppn;

echo "<hr>";
echo "Nama Pelanggan: $nama";
echo "<br>";
echo "Produk Pilihan: $produk";
echo "<br>";
echo "Jumlah Beli: $beli";
echo "<br>";
echo "Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.');
echo "<br>";
echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.');
echo "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.');
echo "<br>";
echo "PPN: Rp " . number_format($ppn, 0, ',', '.');
echo "<br>";
echo "Harga Bersih: Rp " . number_format($harga_bersih, 0, ',', '.');

if (isset($proses)) {
    
}
?>
