<?php
$mahasiswa = [
    ['nim' => '1234567890', 'nama' => 'John Doe', 'nilai' => 85],
    ['nim' => '0987654321', 'nama' => 'Jane Smith', 'nilai' => 92],
    ['nim' => '1111111111', 'nama' => 'Bob Johnson', 'nilai' => 78],
    ['nim' => '2222222222', 'nama' => 'Alice Williams', 'nilai' => 68],
    ['nim' => '3333333333', 'nama' => 'Charlie Brown', 'nilai' => 75],
    ['nim' => '4444444444', 'nama' => 'David Lee', 'nilai' => 88],
    ['nim' => '5555555555', 'nama' => 'Emily Chen', 'nilai' => 62],
    ['nim' => '6666666666', 'nama' => 'Frank Rodriguez', 'nilai' => 90],
    ['nim' => '7777777777', 'nama' => 'Grace Kim', 'nilai' => 81],
    ['nim' => '8888888888', 'nama' => 'Henry Nguyen', 'nilai' => 72]
];

$jumlah_nilai = array_column($mahasiswa, 'nilai');
$nilai_total = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($mahasiswa);
$nilai_rata2 = $nilai_total / $jumlah_mahasiswa;

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$keterangan = [
    'Nilai Total' => $nilai_total,
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Rata-Rata Nilai' => $nilai_rata2
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3 align="center">Daftar Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <?php foreach ($ar_judul as $judul) { ?>
                <th><?= $judul ?></th>
            <?php } ?>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) {
                $keterangan = ($mhs['nilai'] >= 65) ? 'Lulus' : 'Tidak Lulus';
                $grade = ($mhs['nilai'] >= 85) ? 'A' : (($mhs['nilai'] >= 75) ? 'B' : (($mhs['nilai'] >= 65) ? 'C' : (($mhs['nilai'] >= 55) ? 'D' : 'E')));
                switch ($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    default:
                    $predikat = 'Buruk';
                };
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php foreach($keterangan as $ket => $hasil) { ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <td><?= $hasil ?></td>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>