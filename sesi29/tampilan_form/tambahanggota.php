<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Anggota</h3>
                <form action="../proses/proses_tambahanggota.php" method="post">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="P" checked="">
                                    <label class="form-check-label">P</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="L">
                                    <label class="form-check-label">L</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td><input type="number" name="telp" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea class="form-control" name="alamat" required=""></textarea></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" value="ADMIN" checked="">
                                    <label class="form-check-label">ADMIN</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" value="USER" checked="">
                                    <label class="form-check-label">USER</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>