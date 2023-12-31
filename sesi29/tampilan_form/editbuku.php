<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

include "../config.php";

$isbn = $_GET['isbn'];

$buku = mysqli_query($conn, "select * from buku where isbn ='$isbn' ");
$penerbit = mysqli_query($conn, "select * from penerbit");
$pengarang = mysqli_query($conn, "select * from pengarang");
$katalog = mysqli_query($conn, "select * from katalog");

foreach ($buku as $data_buku) {
    $isbn = $data_buku['isbn'];
    $judul = $data_buku['judul'];
    $tahun = $data_buku['tahun'];
    $id_penerbit = $data_buku['id_penerbit'];
    $id_pengarang = $data_buku['id_pengarang'];
    $id_katalog = $data_buku['id_katalog'];
    $stok = $data_buku['qty_stok'];
    $harga = $data_buku['harga_pinjam'];
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Edit Data Buku</h3>
                <form action="../proses/proses_editbuku.php?isbn=<?php echo $isbn ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" name="isbn" class="form-control" required="" value="<?php echo $isbn ?>" id="isbn"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><input type="text" name="judul" class="form-control" required="" value="<?php echo $judul ?>" id="juduk"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="text" name="tahun" class="form-control" required="" value="<?php echo $tahun ?>" id="tahun"></td>
                        </tr>
                        <tr>
                            <td>Id Penerbit</td>
                            <td>
                                <select name="id_penerbit" class="form-control">
                                    <?php foreach ($penerbit as $data) { ?>
                                        <option value="<?php echo $data['id_penerbit']; ?>" <?php if ($data['id_penerbit'] == $id_penerbit) echo "selected"; ?>>
                                            <?php echo $data['id_penerbit']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Id Pengarang</td>
                            <td>
                                <select name="id_pengarang" class="form-control">
                                    <?php foreach ($pengarang as $data) { ?>
                                        <option value="<?php echo $data['id_pengarang']; ?>" <?php if ($data['id_pengarang'] == $id_pengarang) echo "selected"; ?>>
                                            <?php echo $data['id_pengarang']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Id Katalog</td>
                            <td>
                                <select name="id_katalog" class="form-control">
                                    <?php foreach ($katalog as $data) { ?>
                                        <option value="<?php echo $data['id_katalog']; ?>" <?php if ($data['id_katalog'] == $id_katalog) echo "selected"; ?>>
                                            <?php echo $data['id_katalog']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="text" name="qty_stok" class="form-control" required="" value="<?php echo $stok ?>" id="stok"></td>
                        </tr>
                        <tr>
                            <td>Harga Pinjam</td>
                            <td><input type="text" name="harga_pinjam" class="form-control" required="" value="<?php echo $harga ?>" id="harga"></td>
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
    $("#isbn, #judul, #tahun, #stok, #harga").on("keyup", function() {
        $("#submit").prop('disabled', false);
    });
});
</script>