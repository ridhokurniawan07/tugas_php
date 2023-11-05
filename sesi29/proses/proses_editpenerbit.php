<?php
$id = $_GET['id'];
$id_baru = $_POST['id_penerbit'];
$nama = $_POST['nama_penerbit'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

include "../config.php";

mysqli_query($conn, "UPDATE penerbit SET id_penerbit= '$id_baru', nama_penerbit = '$nama', email = '$email', 
telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id'");


header("location:../penerbit.php");
