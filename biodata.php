<?php
//ini adalah variabel dari PHP nya
$nama = "Dewa Gede Andika Andara Putra";
$nim = 2113101017 ;
$univ = "Pendidikan Ganesha";
$prov = "Bali";
$kel = "2 Full Stack Development";

?>
<!--Ini HTML nya-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">BIODATA DIRI</h1>
    <hr width="600px">
    <table align="center" cellpading="10px" width="600px">
        <tr>
            <td>NAMA:</td>
            <td><?php echo $nama?></td>
            <td rowspan="8"><img src="foto.jpg" height="200px" width="170px"></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><?php echo $nim?></td>
        </tr>
        <tr>
            <td>UNIVERSITAS:</td>
            <td><?php echo $univ?></td>
        </tr>
        <tr>
            <td>PROVINSI:</td>
            <td><?php echo $prov?></td>
        </tr>
        <tr>
            <td>KELOMPOK:</td>
            <td><?php echo $kel?></td>
        </tr>
    </table>
</body>
</html>