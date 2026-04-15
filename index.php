<?php

// Mendeklarasikan variabel $nama dengan tipe data String (teks)
$nama = "Abdul";

// Mendeklarasikan variabel $umur dengan tipe data Integer (bilangan bulat)
$umur = 20;

// Mendeklarasikan variabel $tinggi dengan tipe data Float/Double (bilangan desimal)
$tinggi = 175.5;

// Mendeklarasikan variabel $kelas dengan tipe data String (teks)
$kelas = "TIB Semester 4";

// Menampilkan kalimat ke layar dengan menggabungkan teks dan memanggil variabel-variabel di atas
echo "Nama saya $nama, umur saya $umur, tinggi saya $tinggi, kelas saya $kelas";


echo "<br><br>=======================================================";

$nilai = 12;
$nilai2 = 12;
$nilai3 = 2;

$hasil = $nilai * $nilai2 - $nilai3;

echo "<br>Hasil dari $nilai x $nilai2 - $nilai3 adalah $hasil";

if ($hasil >= 100) {
    echo "<br>Nilai anda lebih dari 100";
} else if ($hasil < 100) {
    echo "<br>Nilai anda kurang dari 100";
} else {
    echo "Nilai Anda Kosong";
}

echo "<br><br>=======================================================";



?>