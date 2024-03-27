<?php

// Mendapatkan data dari form
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

// Mendefinisikan class
class NilaiMahasiswa {

    // Mendefinisikan variabel
    private $nim;
    private $matkul;
    private $nilai;

    // Mendefinisikan properties
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setMatkul($matkul) {
        $this->matkul = $matkul;
    }

    public function getMatkul() {
        return $this->matkul;
    }

    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }

    public function getNilai() {
        return $this->nilai;
    }

    // Mendefinisikan method
    public function hitungHasil() {
        return ($this->nilai >= 75) ? "Lulus" : "Tidak Lulus";
    }
       public function hitungGrade(){
        if ($this->nilai >= 90) {
            return 'A';
        } elseif ($this->nilai >= 80) {
            return 'B';
        } elseif ($this->nilai >= 70) {
            return 'C';
        } else {
            return 'D';
        }
}
// Menampilkan hasil
echo "NIM: $nim";
echo "<br>";
echo "Mata Kuliah: $matkul";
echo "<br>";
echo "Nilai: $nilai";
echo "<br>";
echo "Hasil Ujian: $hasil";
echo "<br>";
echo "Grade: $grade";

}


?>