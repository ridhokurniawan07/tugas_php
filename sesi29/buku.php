<?php
include "config.php";
$query = mysqli_query($conn, "select * from buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0000FF;
            color: #fff;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            text-align: center;
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
    <div class="navbar" style="text-align: center;">
        <a href="index.php" style="flex: 1;">Anggota</a>
        <a href="buku.php" style="flex: 1;">Buku</a>
        <a href="penerbit.php" style="flex: 1;">Penerbit</a>
    </div>
    <div class="mt-3">
        <h2>Tabel Daftar Buku</h2>
    </div>

    <div>
        <a href="tampilan_form/tambahbuku.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div>
        <table>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Id Penerbit</th>
                <th>Id Pengarang</th>
                <th>Id Katalog</th>
                <th>Stok</th>
                <th>Harga Pinjam</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["isbn"]; ?></td>
                    <td><?php echo $data["judul"]; ?></td>
                    <td><?php echo $data["tahun"]; ?></td>
                    <td><?php echo $data["id_penerbit"]; ?></td>
                    <td><?php echo $data["id_pengarang"]; ?></td>
                    <td><?php echo $data["id_katalog"]; ?></td>
                    <td><?php echo $data["qty_stok"]; ?></td>
                    <td><?php echo $data["harga_pinjam"]; ?></td>
                    <td>
                        <a href="tampilan_form/editbuku.php?isbn=<?php echo $data['isbn']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses/proses_deletebuku.php?isbn=<?php echo $data['isbn']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('delete?');">Delete</a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php  } ?>
        </table>
    </div>
</body>


</html>