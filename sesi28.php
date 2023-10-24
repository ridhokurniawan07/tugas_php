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
            width: 80%;
            /* Atur lebar tabel sesuai kebutuhan Anda */
            margin: 0 auto;
            /* Ini akan memusatkan tabel */
        }

        td {
            border: 1px solid black;
            text-align: center;
        }

        .ganjil {
            background-color: white;
        }

        .genap {
            background-color: #ECECEC;
        }
    </style>
</head>

<body>
    <div style="background-color: yellow; width: 100%; height: 70px;  ">
        <H3>Daftar Nilai</H3>
    </div>
    <div style="margin-top: 50px;">
        <table>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Nilai</td>
                <td>Hasil</td>

            </tr>
            <?php
            $data = file_get_contents("data.json");
            $students = json_decode($data);
            foreach ($students as $key => $student) {
                if ($key % 2 == 0) {
                    $baris = 'genap';
                } else {
                    $baris = 'ganjil';
                }

                $tahun_sekarang = date("Y");
                $tanggal_lahir = $student->tanggal_lahir;
                $tahun_lahir = date("Y", strtotime($tanggal_lahir));
                $tanggal_lahir_format = date("d F Y", strtotime($tanggal_lahir));
                $umur = $tahun_sekarang - $tahun_lahir;

                $nilai = $student->nilai;
                $grade = '';

                if ($nilai == 90 && $nilai <= 100) {
                    $grade = 'A';
                } elseif ($nilai >= 80 && $nilai < 90) {
                    $grade = 'B';
                } elseif ($nilai >= 70 && $nilai < 80) {
                    $grade = 'C';
                } elseif ($nilai >= 55 && $nilai < 70) {
                    $grade = 'D';
                } else {
                    $grade = 'Tidak Ada';
                }
            ?>
                <tr class="<?php echo $baris; ?>">
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $student->nama; ?></td>
                    <td><?php echo $tanggal_lahir_format; ?></td>
                    <td><?php echo $umur; ?></td>
                    <td><?php echo $student->alamat; ?></td>
                    <td><?php echo $student->kelas; ?></td>
                    <td><?php echo $student->nilai; ?></td>
                    <td><?php echo $grade; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>