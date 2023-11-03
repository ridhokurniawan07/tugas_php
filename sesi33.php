<!-- nomor 1 -->
<?php
echo "NOMOR 1 <br> <br>";
$array = array("satu", "dua", "tiga", "empat", "lima");

for ($i = count($array) - 1; $i >= 0; $i--) {
    echo $array[$i] . "<br>";
}
?>
<br>

<!-- nomor 2 -->
<?php
echo "NOMOR 2 <br> <br>";
$array = array("apel", "nanas", "mangga", "jeruk");

for ($i = 0; $i < count($array); $i++) {
    echo "Terdapat " .  count($array) .  " buah";
}
?>
<br><br>

<!-- nomor 3  -->
<?php
echo "NOMOR 3 <br> <br>";
$array = array(7, 3, 4, 9);
$sum = 0;

for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
}

echo "Totalnya adalah " . $sum;
?>
<br><br>

<!-- nomor 4 -->
<?php
echo "NOMOR 4 <br> <br>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        $hasil = $i * $j;
        echo "$j x $i = $hasil<br>";
    }
}
