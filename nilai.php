<?php
$nilai = 80;
if ($nilai >= 90 && $nilai <= 100) {
    echo "Grade A";
} else if ($nilai >= 80 && $nilai < 90) {
    echo "Grade B";
} else if ($nilai >= 70 && $nilai < 80) {
    echo "Grade C";
} else {
    echo "Grade D";
}
