<?php
$id = $_POST['id_penerbit'];
$nama = $_POST['nama_penerbit'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

include "../config.php";

mysqli_query($conn, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) 
values ('$id', '$nama', '$email', '$telp', '$alamat'); ");

header("location:../penerbit.php");
