<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 3 php</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>

<?php
$m1 = ['nim' => '0111111', 'nama'=>'Andi Setyo', 'nilai' =>95];
$m2 = ['nim' => '0111112', 'nama'=>'Rafael', 'nilai' =>80];
$m3 = ['nim' => '0111113', 'nama'=>'Ali Hakim', 'nilai' =>78];
$m4 = ['nim' => '0111114', 'nama'=>'Ari', 'nilai' =>76];
$m5 = ['nim' => '0111115', 'nama'=>'Ani', 'nilai' =>86];
$m6 = ['nim' => '0111116', 'nama'=>'Aji', 'nilai' =>50];
$m7 = ['nim' => '0111117', 'nama'=>'Budi Santoso', 'nilai' =>20];
$m8 = ['nim' => '0111118', 'nama'=>'Chandra', 'nilai' =>30];
$m9 = ['nim' => '0111119', 'nama'=>'Dewi', 'nilai' =>70];
$m10 = ['nim' => '0111110', 'nama'=>'Elisa', 'nilai' =>65];

$ar_judul = ['No', 'NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$nilai_keseluruhan = array_sum(array_column($mahasiswa, 'nilai'));
$nilai_tertinggi = max(array_column($mahasiswa, 'nilai'));
$nilai_terendah = min(array_column($mahasiswa, 'nilai'));
$nilai_rata_rata = $nilai_keseluruhan / count($mahasiswa);
$jumlah_mahasiswa = count($mahasiswa);
$keterangan = [
    'nilai keseluruhan' => $nilai_keseluruhan,
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'nilai - Rata - Rata' => $nilai_rata_rata,
    'Jumlah mahasiswa' => $jumlah_mahasiswa
];

// Fungsi untuk menghitung nilai rata-rata
function hitungRataRata($nilaiMahasiswa)
{
    $totalNilai = array_sum(array_column($nilaiMahasiswa, 'nilai'));
    return $totalNilai / count($nilaiMahasiswa);
}

// Fungsi untuk menentukan keterangan lulus
function keterangan($nilai)
{
    return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
}

// Fungsi untuk menentukan grade dengan if multi-kondisi
function grade($nilai)
{
    if ($nilai >= 90) {
        return 'A';
    } else if ($nilai >= 80) {
        return 'B';
    } else if ($nilai >= 70) {
        return 'C';
    } else if ($nilai >= 60) {
        return 'D';
    } else {
        return 'E';
    }
}

// Fungsi untuk menentukan predikat
function predikat($grade)
{
    switch ($grade) {
        case 'A':
            return 'Sangat Baik';
        case 'B':
            return 'Baik';
        case 'C':
            return 'Cukup';
        case 'D':
            return 'Kurang';
        default:
            return 'Sangat Kurang';
    }
}

$nilaiRataRata = hitungRataRata($mahasiswa);

?>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table>
        <thead>
            <tr>
                <?php 
                foreach($ar_judul as $judul){ ?>
                    <th><?= $judul ?></th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>
    <?php $no = 1;
    foreach ($mahasiswa as $mhs) {
        $ket = keterangan($mhs['nilai']);
        $grd = grade($mhs['nilai']);
        $prd = predikat($grd);
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grd ?></td>
            <td><?= $prd ?></td>
        </tr>
    <?php } ?>
    </tbody>
        <tfoot>
            <?php
                foreach($keterangan as $ket => $hasil){
                    ?>
                    <tr>
                        <th colspan="3"><?= $ket ?></th>
                        <th colspan="5"><?= $hasil ?></th>
                    </tr>
                
               <?php  }

?>
        </tfoot>
    </table>
</body>
</html>