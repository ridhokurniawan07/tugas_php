<?php
//nomor 1
for ($i = 1; $i <= 9; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "$j";
    }
    echo "<br>";
}
?>

<br>

<!-- nomor 2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            text-align: center;
        }

        .ganjil {
            background-color: #ECECEC;
        }

        .genap {
            background-color: white;
        }
    </style>
</head>

<body>
    <table>
        <tr style="background-color: #0000FF ;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $nama = "Nama ke $i";
            $kelas = "Kelas " . (11 - $i);
            $baris = ($i % 2 == 0) ? 'genap' : 'ganjil';
        ?>
            <tr class="<?php echo $baris; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $kelas; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>