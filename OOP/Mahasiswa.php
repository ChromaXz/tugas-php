<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $universitas;
    public $matakuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $universitas, $matakuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->setGradePredikat();
        $this->setStatus();
    }

    private function setGradePredikat() {
        if ($this->nilai >= 80) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
            $this->predikat = 'Bagus';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } elseif ($this->nilai >= 50) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Kurang Memuaskan';
        }
    }

    private function setStatus() {
        $this->status = ($this->nilai >= 50) ? 'Lulus' : 'Gagal';
    }
}
?>