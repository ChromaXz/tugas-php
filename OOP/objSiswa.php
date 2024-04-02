<?php
session_start();
require_once 'Mahasiswa.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $matakuliah, $nilai);
    $_SESSION['mahasiswa'] = $mahasiswa;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Form Input Nilai Mahasiswa</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="universitas" class="form-label">Universitas</label>
                <select class="form-select" id="universitas" name="universitas" required>
                    <option value="">Pilih Universitas</option>
                    <option value="Universitas Pendidikan Ganesha">Universitas Pendidikan Ganesha</option>
                    <option value="Universitas Udayana">Universitas Udayana</option>
                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                    <option value="Universitas Gajah Mada">Universitas Gajah Mada</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Matakuliah</label>
                <select class="form-select" id="matakuliah" name="matakuliah" required>
                    <option value="">Pilih Matakuliah</option>
                    <option value="PHP">PHP</option>
                    <option value="HTML">HTML</option>
                    <option value="API">API</option>
                    <option value="CSS">CSS</option>
                    <option value="Javascript">Javascript</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php if (isset($_SESSION['mahasiswa'])): ?>
        <div class="container my-5">
            <h2 class="text-center mb-4">Daftar Nilai Mahasiswa</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Universitas</th>
                        <th>Matakuliah</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $_SESSION['mahasiswa']->nim; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->nama; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->universitas; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->matakuliah; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->nilai; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->grade; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->predikat; ?></td>
                        <td><?php echo $_SESSION['mahasiswa']->status; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>