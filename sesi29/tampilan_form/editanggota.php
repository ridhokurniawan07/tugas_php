<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Edit Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

include "../config.php";

$id = $_GET['id'];

$anggota = mysqli_query($conn, "select * from anggota where id_anggota ='$id' ");

foreach ($anggota as $data_anggota) {
    $nama = $data_anggota['nama'];
    $username = $data_anggota['username'];
    $password = $data_anggota['password'];
    $jenis_kelamin = $data_anggota['sex'];
    $telp = $data_anggota['telp'];
    $alamat = $data_anggota['alamat'];
    $email = $data_anggota['email'];
    $role = $data_anggota['role'];
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Edit Data Anggota</h3>
                <form action="../proses/proses_editanggota.php?id=<?php echo $id ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" class="form-control" required="" value="<?php echo $nama ?>" id="name"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type=" text" name="username" class="form-control" required="" value="<?php echo $username ?>" id="username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" class="form-control" required="" value="<?php echo $password ?>" id="password"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <div class="form-check">
                                    <?php
                                    if ($jenis_kelamin == 'P') {
                                        echo '<input class="form-check-input" type="radio" name="sex" value="P" checked="" id="jeniskelamin">';
                                    } else {
                                        echo '<input class="form-check-input" type="radio" name="sex" value="P">';
                                    }
                                    ?>
                                    <label class="form-check-label">P</label>
                                </div>
                                <div class="form-check">
                                    <?php
                                    if ($jenis_kelamin == 'L') {
                                        echo '<input class="form-check-input" type="radio" name="sex" value="L" checked="" id="jeniskelamin">';
                                    } else {
                                        echo '<input class="form-check-input" type="radio" name="sex" value="L">';
                                    }
                                    ?>
                                    <label class="form-check-label">L</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td><input type="number" name="telp" class="form-control" required="" value="<?php echo $telp ?>" id="telp"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea class="form-control" name="alamat" required="" id="alamat"><?php echo $alamat ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control" required="" value="<?php echo $email ?>" id="email"></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <div class="form-check">
                                    <?php
                                    if ($role == 'ADMIN') {
                                        echo ' <input class="form-check-input" type="radio" name="role" value="ADMIN" checked="" id="role">';
                                    } else {
                                        echo '<input class="form-check-input" type="radio" name="role" value="ADMIN">';
                                    }
                                    ?>
                                    <label class="form-check-label">ADMIN</label>
                                </div>
                                <div class="form-check">
                                    <?php
                                    if ($role == 'USER') {
                                        echo ' <input class="form-check-input" type="radio" name="role" value="USER" checked="" id="name"role>';
                                    } else {
                                        echo '<input class="form-check-input" type="radio" name="role" value="USER">';
                                    }
                                    ?>
                                    <label class="form-check-label">USER</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary" id="submit" disabled=""></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function () {
    $("#name, #username, #password, #telp, #alamat, #email").on("keyup", function() {
        $("#submit").prop('disabled', false);
    });
    $("#jeniskelamin").on("change", function() {
        $("#submit").prop('disabled', false);
    });
    $("#role").on("change", function() {
        $("#submit").prop('disabled', false);
    });
});
</script>