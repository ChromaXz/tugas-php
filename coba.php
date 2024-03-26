<!DOCTYPE html>
<html>
<head>
    <title>Nama dan Alamat</title>
</head>
<body>
    <?php
        $namaLengkap = "Dewa Gede Andika";
        $alamat = "Jalan Pembangunan No. 123, Kota Baru";
        $warna = "red";
    ?>

    <h1 style="color: <?php echo $warna; ?>;"><?php echo $namaLengkap; ?></h1>
    <p style="color: <?php echo $warna; ?>;"><?php echo $alamat; ?></p>
</body>
</html>