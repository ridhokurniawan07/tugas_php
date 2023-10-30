<?php
include "config.php";
$query = mysqli_query($conn, "select * from penerbit");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
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
    <div class="navbar">
        <a href="index.php">Anggota</a>
        <a href="buku.php">Buku</a>
        <a href="penerbit.php">Penerbit</a>
    </div>
    <div>
        <h2>Tabel Daftar Penerbit </h2>
    </div>

    <div>
        <table>
            <tr>
                <th>No</th>
                <th>ID Penerbit</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Alamat </th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["id_penerbit"]; ?></td>
                    <td><?php echo $data["nama_penerbit"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["telp"]; ?></td>
                    <td><?php echo $data["alamat"]; ?></td>
                </tr>
                <?php $no++; ?>
            <?php  } ?>
        </table>
    </div>
</body>

</html>