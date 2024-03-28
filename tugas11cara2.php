<?php
$mahasiswa = [
    ['nim' => '2113101017', 'nama' => 'Dewa Gede', 'nilai' => 80],
    ['nim' => '2113101019', 'nama' => 'Jono', 'nilai' => 92],
    ['nim' => '2113101018', 'nama' => 'Bobi', 'nilai' => 78],
    ['nim' => '2113101001', 'nama' => 'Alice', 'nilai' => 65],
    ['nim' => '2113101009', 'nama' => 'Angel', 'nilai' => 75],
    ['nim' => '2113101002', 'nama' => 'Maha', 'nilai' => 88],
    ['nim' => '2113101003', 'nama' => 'Putra', 'nilai' => 62],
    ['nim' => '2113101004', 'nama' => 'Meli', 'nilai' => 90],
    ['nim' => '2113101028', 'nama' => 'Arda', 'nilai' => 81],
    ['nim' => '2113101030', 'nama' => 'Nguyen', 'nilai' => 72]
];

$jumlah_nilai = array_column($mahasiswa, 'nilai');
$nilai_total = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($mahasiswa);
$nilai_rata2 = $nilai_total / $jumlah_mahasiswa;

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
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
                }
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
            <tr>
                <th colspan="6">Nilai Total</th>
                <td><?= $nilai_total ?></td>
            </tr>
            <tr>
                <th colspan="6">Nilai Tertinggi</th>
                <td><?= $nilai_tertinggi ?></td>
            </tr>
            <tr>
                <th colspan="6">Nilai Terendah</th>
                <td><?= $nilai_terendah ?></td>
            </tr>
            <tr>
                <th colspan="6">Jumlah Mahasiswa</th>
                <td><?= $jumlah_mahasiswa ?></td>
            </tr>
            <tr>
                <th colspan="6">Rata-Rata Nilai</th>
                <td><?= $nilai_rata2 ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>