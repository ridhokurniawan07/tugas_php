<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Tambah penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Penerbit</h3>
                <form action="../proses/proses_tambahpenerbit.php" method="post">
                    <table class="table">
                        <tr>
                            <td>ID Penerbit</td>
                            <td><input type="text" name="id_penerbit" class="form-control" required="" id="idpenerbit"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama_penerbit" class="form-control" required="" id="nama"></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="email" name="email" class="form-control" required="" id="email"></td>
                        </tr>
                        <tr>
                            <td>telp</td>
                            <td><input type="number" name="telp" class="form-control" required="" id="telp"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea class="form-control" name="alamat" required="" id="alamat"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary" id="submit" disabled="""></td>
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
    $("#idpenerbit, #nama, #email, #telp, #alamat").on("keyup", function() {
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