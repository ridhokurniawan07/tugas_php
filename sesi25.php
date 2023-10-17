<?php
//nomor 1
$bil = 10;
if ($bil % 2 == 0) {
    echo "Bilangan Genap";
} else {
    echo "Bilangan Ganjil";
}
?>

<br>

<?php
//nomor 2
$tahun = 2023;
if ($tahun % 4 == 0) {
    echo "Tahun Kabisat";
} else {
    echo "Bukan Tahun Kabisat";
}
?>

<br>

<?php
//nomor 3
$nilai = 80;
if ($nilai >= 90 && $nilai <= 100) {
    echo "Grade A";
} else if ($nilai >= 80 && $nilai <= 89) {
    echo "Grade B";
} else if ($nilai >= 70 && $nilai <= 79) {
    echo "Grade C";
} else if ($nilai >= 60 && $nilai <= 69) {
    echo "Grade D";
} else {
    echo "Grade E";
}
?>