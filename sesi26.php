<?php
// nomor 1

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        echo "$i Bilangan Ganjil <br>";
    } else {
        echo "$i Bilangan Genap <br>";
    }
}
?>

<br>

<?php
// nomor 2

for ($i = 2000; $i <= 2023; $i++) {
    if ($i % 4 == 0) {
        echo "Tahun $i tahun Kabisat <br>";
    } else {
        echo "Tahun $i Bukan Tahun Kabisat <br>";
    }
}
?>

<br>

<?php
//nomor 3
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>