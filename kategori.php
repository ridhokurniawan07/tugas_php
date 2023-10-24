<?php
$nama = 'ridho';
$tinggi = 1.7;
$berat = 66;

$bmi = $berat / ($tinggi * $tinggi);

if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kategori = "sedang";
} else {
    $kategori = "gemuk";
}

echo "Halo, $nama. Nilai BMI Anda adalah $bmi, Anda termasuk $kategori.";
