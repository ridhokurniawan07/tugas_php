<?php
include "config.php";
$query = mysqli_query($conn, "select * from anggota");
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

        h1 {
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
    </style>
</head>

<body>
    <div>
        <h1>Tabel Daftar Anggota Perpustakaan</h1>
    </div>

    <div>
        <table>
            <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Jenis Kelamin</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["id_anggota"]; ?></td>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["username"]; ?></td>
                    <td><?php echo $data["password"]; ?></td>
                    <td><?php echo $data["sex"]; ?></td>
                    <td><?php echo $data["telp"]; ?></td>
                    <td><?php echo $data["alamat"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["role"]; ?></td>
                </tr>
                <?php $no++; ?>
            <?php  } ?>
        </table>
    </div>
</body>

</html>