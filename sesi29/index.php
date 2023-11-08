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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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
        <h2>Tabel Daftar Anggota Perpustakaan</h2>
    </div>
    <div>
        <a href="tampilan_form/tambahanggota.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div>
    <table id="myTable" class="display">
    <thead>
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
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
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
                <td>
                    <a href="tampilan_form/editanggota.php?id=<?php echo $data['id_anggota']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="proses/proses_deleteanggota.php?id=<?php echo $data['id_anggota']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('delete?');">Delete</a>
                </td>
            </tr>
            <?php $no++; ?>
        <?php  } ?>
    </tbody>
</table>
    </div>
</body>

</html>
<script> 
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>